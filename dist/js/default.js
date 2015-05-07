var pathArray = window.location.pathname.split('/');
var lang = pathArray[1];
var showUserDetail = 0;







$(document).ready(function() {
    
   
    $("button#selectAll").click(function() {
        if ($("input[type='checkbox']:checked").length) {
            $("input[type='checkbox']").removeAttr("checked");
            $("button#selectAll i").removeClass("fa-square-o");
            $("button#selectAll i").addClass("fa-check-square-o");
        } else {
            $("input[type='checkbox']").prop("checked", "checked");
            $("button#selectAll i").removeClass("fa-check-square-o");
            $("button#selectAll i").addClass("fa-square-o");
        }

    });

    $('input[name="daterange"]').daterangepicker({
            format: 'YYYY-MM-DD',
            startDate: '2013-01-01',
            endDate: '2013-12-31'
        },
        function(start, end, label) {
            alert('A date range was chosen: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        }
    );

    $("select#select_organization").change(function(opt) {
        $("#cat_forms form").trigger("reset");

        if (getParameterByName("org_id") && getParameterByName("cat_id")) {
            $("#cat_name").show();


        } else {
            $("#cat_tree").show();
        }

        $("input#org_id").val(this.value);
        $("div#cat_panel").show();


        if ($("select#select_organization").attr("view") == "listOrgCourses") {
            var url = "/" + lang + "/organization/getAssociatedCourses";
            var data = {
                org_id: this.value
            };
            getAssociatedCourses(url, data);
        } else {
            var url = "/" + lang + "/organization/getCategoryTree";
            var data = {
                org_id: this.value
            };
            getCategoryTree(url, data);

            var url = "/" + lang + "/organization/getAvailableCourses";
            getAvailableCourses(url, data);
        }

    });



    $("button#change_category").click(function() {
        $("div#cat_tree").toggle();

    });

    if (getParameterByName("org_id") && getParameterByName("cat_id")) {
        var url = "/" + lang + "/organization/findCategoryName";
        var data = {
            org_id: getParameterByName("org_id"),
            cat_id: getParameterByName("cat_id")
        };
        getCategoryName(url, data);

    }

    myList = [];
    $("select#select_organization option").each(function() {
        if ($(this).val() != "") {
            myList.push($(this).val())
        }
    });
    if (getParameterByName("org_id") && $.inArray(getParameterByName("org_id"), myList) != -1) {
        $("select#select_organization").val(getParameterByName("org_id")).change();
    }

    $("form#new_category").submit(function(e) {
        e.preventDefault();
        if (validateForm(this)) {
            var url = "/" + lang + "/organization/insertCategory";
            var data = {
                org_id: $("select#select_organization").val(),
                parent_node: $("input#selectedNode").attr("nodeid"),
                cat_new_name: $("input#cat_new_name").val()
            };
            insertCategory(url, data);
            $(this).find("div#errorMessage").hide();
        } else {
            $(this).find("div#errorMessage").show();
        }
    });
    $("form#edit_category").submit(function(e) {
        e.preventDefault();
        if (validateForm(this)) {

            var url = "/" + lang + "/organization/updateCategory";
            var data = {
                org_id: $("select#select_organization").val(),
                node_id: $("input#selectedNode").attr("nodeid"),
                cat_modify_name: $("input#cat_modify_name").val()
            };
            updateCategory(url, data);
            $("div#errorMessage").hide();
        } else {
            $("div#errorMessage").show();
        }
    });
    $("button#delete_cat").click(function(e) {
        e.preventDefault();
        if (validateForm(this)) {

            var url = "/" + lang + "/organization/deleteCategory";
            var data = {
                org_id: $("select#select_organization").val(),
                node_id: $("input#selectedNode").attr("nodeid")
            };
            deleteCategory(url, data);
            $("div#errorMessage").hide();
        } else {
            $("div#errorMessage").show();
        }
    });
    /* $('#dataTables-pending').dataTable(); */
    /* $('#dataTables-org').dataTable(); */
    /* $('#dataTables-translated').dataTable(); */


    $("div#page-wrapper,footer#page-footer,ul#side-menu").show();

    $(".user-row").click(function(){
        if($(this).attr("userid") == showUserDetail){
            showUserDetail = 0;
            $("#userDetail").empty();
        }else{
            showUserDetail = $(this).attr("userid");
            var url = "/" + lang + "/user/getUser";
            var data = {
                userId: $(this).attr("userid")
            };
            getUser(url, data);    
        }
        
    });

    $(".navbar-toggle").click(function(){
        if($(window).width()>768){
            if($(".navbar-default.sidebar").css("margin-left") == "0px"){
                $("#page-wrapper").css("margin-left","47px");
            }else{
                $("#page-wrapper").css("margin-left","250px");
            }
        }else{
            $("#page-wrapper").css("margin-left","0px");
        }
        
    });



});


function getUser(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                $("#userDetail").empty();
                $("#userDetail").dialog({
                  resizable: false,
                  modal: true,
                  dialogClass: 'noTitleStuff',
                  minWidth:400
                });
                console.log(data.trim());
                $("#userTmpl").tmpl(JSON.parse(data.trim())).appendTo("#userDetail");

                $("#close_dialog").click(function(){
                    $("#userDetail").dialog("close");
                });

            }
        }
    });
}


function validateForm(form) {
    $("form#" + form.id + " input.required").parent().removeClass("has-error");
    $("form#" + form.id + " input.required").filter(function() {
        return !this.value;
    }).parent().addClass("has-error");
    return ($("form#" + form.id + " input.required").parent(".has-error").length == 0);

}

function getCategoryTree(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                showTreeView(data);
            } else {
                $('#treeview').hide();
            }
        }
    });
}

function insertCategory(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                showTreeView(data);
            }
        }
    });
}

function updateCategory(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                showTreeView(data);
            }
        }
    });
}

function getCategoryName(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                data = $.parseJSON(data);
                $("input#selectedNode").val(data.text);
                $("input#selectedNodeId").val(data.id);
            }
        }
    });
}

function deleteCategory(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim()) {
                $('#treeview').show();
                showTreeView(data);
            }
        }
    });
}

function getAvailableCourses(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        success: function(data) {
            if (data.trim()) {
                $("div#course_table * tbody").empty();
                $("div#course_table * tbody").append(data);
                /* $('#dataTables-courses').dataTable(); */
                $("#course_table").show();
                $("input[name=course_id_list]").click(function() {
                    checkedCourses = [];
                    $("input[name=course_id_list]:checked").each(function() {
                        checkedCourses.push($(this).val());
                    });
                    $("input#course_selected_list").val(checkedCourses);
                });
            }
        }
    });
}

function getAssociatedCourses(url, data) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        success: function(data) {
            if (data.trim()) {
                $("div#specific_course_table * tbody").empty();
                $("div#specific_course_table * tbody").append(data);
                /* $('table#specific_course_table').dataTable(); */
                $("#specific_course_table").show();
                $("input[name=course_id_list]").click(function() {
                    checkedCourses = [];
                    $("input[name=course_id_list]:checked").each(function() {
                        checkedCourses.push($(this).val());
                    });
                    $("input#course_selected_list").val(checkedCourses);
                });
            }
        }
    });
}



$("ul#org_selector li").click(function() {
    var url = "/" + lang + "/organization/getAssociatedCourses";
    var data = {
        org_id: this.id,
        type: "json"
    };
    getOrgCourses(url, data);
    
    $("span#org_selected").text($(this).find("a").text());
    $("span#course_selected").text($("ul#course_selector li.baseOption a").text());
    $("span#edition_selected").text($("ul#edition_selector li.baseOption a").text());
    $("span#group_selected").text($("ul#group_selector li.baseOption a").text());
    
            
});

function getOrgCourses(url, data) {
    $("li#course_selector").hide();
    $("li#edition_selector").hide();
    $("li#group_selector").hide();

    $.ajax({
        url: url,
        method: "POST",
        data: data,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        success: function(data) {
            
            
            if (data.trim() && JSON.parse(data).length != 0) {
                

                var result = $.parseJSON(data);

                $("ul#course_selector li.selectOption").remove();
                jQuery.each(result, function(i,val) {
                  $("ul#course_selector").append("<li id='"+ val.id +"' class='selectOption'><a href='#'>" + val.title + "</a></li>");
                });

                $("li#course_selector").show();
                $("ul#course_selector li").click(function() {
                    var url = "/" + lang + "/course/getAssociatedEditions";
                    var data = {
                        course_id: this.id,
                        type: "json"
                    };
                    getCourseEditions(url, data);
                    $("span#course_selected").text($(this).find("a").text());

                    $("span#edition_selected").text($("ul#edition_selector li.baseOption a").text());
                   
                            
                });

            }

        }
    });
}


function getCourseEditions(url, data) {
    $("li#edition_selector").hide();
    $("li#group_selector").hide();

    $.ajax({
        url: url,
        method: "POST",
        data: data,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        success: function(data) {
            $("ul#edition_selector li.selectOption").remove();
            if (data.trim() && JSON.parse(data).length != 0) {
                var result = $.parseJSON(data);
                jQuery.each(result, function(i,val) {
                  $("ul#edition_selector").append("<li id='"+ val.id +"' class='selectOption'><a href='#'>" + val.title + "</a></li>");
                });
                $("li#edition_selector").show();
                $("ul#edition_selector li").click(function() {
                    var url = "/" + lang + "/edition/getAssociatedGroups";
                    var data = {
                        edition_id: this.id,
                        type: "json"
                    };
                    getEditionGroups(url, data);
                    $("span#edition_selected").text($(this).find("a").text());
                    $("span#group_selected").text($("ul#group_selector li.baseOption a").text());
                            
                });

            }
        }
    });
}


function getEditionGroups(url, data) {
    $("li#group_selector").hide();

    $.ajax({
        url: url,
        method: "POST",
        data: data,
        contentType: 'application/x-www-form-urlencoded; charset=ISO-8859-1',
        success: function(data) {
            $("ul#group_selector li.selectOption").remove();
            if (data.trim() && JSON.parse(data).length != 0) {
                var result = $.parseJSON(data);
                jQuery.each(result, function(i,val) {
                  $("ul#group_selector").append("<li id='"+ val.id +"' class='selectOption'><a href='#'>" + val.name + "</a></li>");
                });
                $("li#group_selector").show();

                $("ul#group_selector li").click(function() {
                    $("span#group_selected").text($(this).find("a").text());
                            
                });

            }
        }
    });
}





function showTreeView(data) {
    var options = {
        onNodeSelected: function(event, node) {

            $("input#selectedNode").val(node.text);
            $("div#cat_name").show();
            $("div#course_table").show();
            $("input#selectedNode").attr("nodeid", node.id);
            $("input#selectedNodeId").val(node.id);
            $("input#cat_modify_name").val(node.text);
            $('html,body').animate({
                scrollTop: $("#selectedNode").offset().top
            }, 'slow');
            if ($("a#course_link").length) {
                $("a#course_link").attr("href", $("a#course_link").attr("href").split("?")[0] + "?org_id=" + $("select#select_organization").val() + "&cat_id=" + $("input#selectedNode").attr("nodeid"));
            }

        },
        onNodeUnselected: function(event, node) {

            $("input#selectedNode").val("");
            $("div#cat_name").hide();
            $("div#course_table").hide();
            if ($("a#course_link").length) {
                $("a#course_link").attr("href", $("a#course_link").attr("href").split("?")[0]);
            }
        },
        bootstrap2: false,
        showTags: true,
        levels: 5,
        data: data
    };
    $('#treeview').treeview(options);
    $('#treeview').show();
}

function showForm(id) {
    if ($("div#cat_forms form#" + id).is(":hidden")) {
        $("div#cat_forms form").hide();
        $("div#cat_forms form#" + id).show();
    } else {
        $("div#cat_forms form").hide();

    }
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
