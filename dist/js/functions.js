    function letraDni(dni) {
        var lockup = 'TRWAGMYFPDXBNJZSQVHLCKE';
        return lockup.charAt(dni % 23);
    }

    function isNumber(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }
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
                    jQuery.each(result, function(i, val) {
                        $("ul#course_selector").append("<li id='" + val.id + "' class='selectOption'><a href='#'>" + val.title + "</a></li>");
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
                jQuery.each(result, function(i, val) {
                    $("ul#edition_selector").append("<li id='" + val.id + "' class='selectOption'><a href='#'>" + val.title + "</a></li>");
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
                jQuery.each(result, function(i, val) {
                    $("ul#group_selector").append("<li id='" + val.id + "' class='selectOption'><a href='#'>" + val.name + "</a></li>");
                });
                $("li#group_selector").show();

                $("ul#group_selector li").click(function() {
                    $("span#group_selected").text($(this).find("a").text());

                });

            }
        }
    });
}
function saveTranlation(url, data, element) {
    $.ajax({
        url: url,
        method: "POST",
        data: data,
        success: function(data) {
            if (data.trim() && JSON.parse(data).length != 0 && JSON.parse(data).result == "OK") {

                var table1 = $('#trans1').DataTable();
                var table2 = $('#trans2').DataTable();

                var row = table1.row($(element).parents('tr'));
                if (row !== null) {
                    var rowNode = row.node();
                    if (rowNode !== null) {
                        row.remove().draw();
                        table2.row.add(rowNode).draw();
                    }
                }


            }

        }
    });

};
function UpdateTableHeaders() {
    $(".persist-area").each(function() {

        var el = $(this),
        offset = el.offset(),
        scrollTop = $(window).scrollTop(),
        floatingHeader = $(".floatingHeader", this)

        if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
            floatingHeader.css({
                "visibility": "visible"
            });
        } else {
            floatingHeader.css({
                "visibility": "hidden"
            });
        };
    });
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

                 $('input[type="checkbox"]').iCheck({
                    checkboxClass: 'icheckbox_flat-blue',
                    radioClass: 'iradio_flat-blue'
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

function validateForm(form) {
    $("form#" + form.id + " input.required").parent().removeClass("has-error");
    $("form#" + form.id + " input.required").filter(function() {
        return !this.value;
    }).parent().addClass("has-error");
    return ($("form#" + form.id + " input.required").parent(".has-error").length == 0);

}

function drawChart(){
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var PieData = [
      {
          value: 61,
          color: "#f56954",
          highlight: "#f56954",
          label: "Chrome"
      },
      {
          value: 30,
          color: "#00a65a",
          highlight: "#00a65a",
          label: "IE"
      },
      {
          value: 294,
          color: "#f39c12",
          highlight: "#f39c12",
          label: "FireFox"
      },
      {
          value: 41,
          color: "#00c0ef",
          highlight: "#00c0ef",
          label: "Safari"
      },
      {
          value: 24,
          color: "#3c8dbc",
          highlight: "#3c8dbc",
          label: "Otros"
      }
      ];
      var pieOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 1,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: false,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
        //String - A tooltip template
        tooltipTemplate: "<%=value %> conexiones con <%=label%>"
    };
    pieChart.Doughnut(PieData, pieOptions);
}