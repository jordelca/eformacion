var pathArray = window.location.pathname.split('/');
var lang = pathArray[1];



$(document).ready(function() {


    $('input[name="daterange"]').daterangepicker({
        format: 'DD/MM/YYYY'
    });

    $('.input-daterange').datepicker({
      format: "dd/mm/yyyy",
      startDate: "01/01/2010",
      endDate: "Today"
    });

    $('#datepicker input').datepicker('update', '05/03/2011');


    // Horizontal slider

/*



*/

$("#range_03").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 100,
    from: 18,
    to: 65
});

$(".js-reset-03").on("click", function (e) {
    e.preventDefault();
    $("#range_03").data("ionRangeSlider").reset();
});



$("#range_04").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 3000,
    from: 500,
    to: 2500
});

$(".js-reset-04").on("click", function (e) {
    e.preventDefault();
    $("#range_04").data("ionRangeSlider").reset();
});

    $('a[data-toggle="collapse"]').on('click', function() {
        var objectID = $(this).attr('href');
        if ($(objectID).hasClass('in')) {
            $(objectID).collapse('hide');
        } else {
            $(objectID).collapse('show');
        }
    });
    $('#expandAll').on('click', function() {
        $('a[data-toggle="collapse"]').each(function() {
            var objectID = $(this).attr('href');
            if ($(objectID).hasClass('in') === false) {
                $(objectID).collapse('show');
            }
        });
    });
    $('#collapseAll').on('click', function() {
        $('a[data-toggle="collapse"]').each(function() {
            var objectID = $(this).attr('href');
            if ($(objectID).hasClass('in') === true) {
                $(objectID).collapse('hide');
            }
        });
    });

    $("input#dniField").change(function() {
        var dni = $(this).val();
        var result = "Letra";
        if (isNumber(dni) && dni.length == 8) {
            result = letraDni($(this).val());
        } else {
            $(this).val("");
        }
        $("#dniChar").html(result);


    });

    $(".popover-right").popover({
        placement: 'right'
    });

    $(".tab-button").click(function() {
        if (!$(this).hasClass("active")) {

            $(this).siblings().removeClass("active");

            $(this).addClass("active");

            $("#rightSidebar.tab-content .tab-pane").removeClass("active");

            $("#rightSidebar.tab-content .tab-pane#" + this.id).addClass("active");

        }

    });

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


    $('form.saveForm').on("submit", function(e) {
        e.preventDefault();
        var data = {};
        var inputs = $(this).serializeArray();

        inputs.forEach(function(element) {
            data[element.name] = element.value;
        });
        data.type = "POST";
        var url = "/" + lang + "/settings/addTranslation";
        if (data.translation_key.length && data.lang_code.length && data.translation.length) {
            saveTranlation(url, data, this);
        }



    });




    $("button#selectAll").click(function() {
        if ($(".content .table-responsive div.icheckbox_flat-blue.checked, .small-box .inner div.icheckbox_flat-blue.checked").length) {
            $("div.icheckbox_flat-blue").removeClass("checked");
            $("button#selectAll i").removeClass("fa-square-o");
            $("button#selectAll i").addClass("fa-check-square-o");
        } else {
            $("div.icheckbox_flat-blue").addClass("checked");
            $("button#selectAll i").removeClass("fa-check-square-o");
            $("button#selectAll i").addClass("fa-square-o");
        }

    });


    $("#input-701,#input-702,#input-703,#input-704").fileinput({
        uploadUrl: "http://eformacion.gva.com/cs/register/massregistration", // server upload action
        uploadAsync: true,
        maxFileCount: 1
    });

    /*
    var stickyOffset = $('.sticky').offset().top;

    $(window).scroll(function(){
      var sticky = $('.sticky'),
          scroll = $(window).scrollTop();

      if (scroll >= stickyOffset) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
    });
*/

$("#mytable #checkall").click(function() {
    if ($("#mytable #checkall").is(':checked')) {
        $("#mytable input[type=checkbox]").each(function() {
            $(this).prop("checked", true);
        });

    } else {
        $("#mytable input[type=checkbox]").each(function() {
            $(this).prop("checked", false);
        });
    }
});

$("[data-toggle=tooltip]").tooltip();


$('#example1').dataTable();
$('#trans1,#trans2').dataTable();

$("#example1.dataTable").prev(".row").appendTo(".box-header.table-top");
$("#example1.dataTable").next(".row").prependTo(".box-header.table-bottom");

$("#trans1.dataTable").prev(".row").appendTo(".box-header.table-top1");
$("#trans1.dataTable").next(".row").prependTo(".box-header.table-bottom1");

$("#trans2.dataTable").prev(".row").appendTo(".box-header.table-top2");
$("#trans2.dataTable").next(".row").prependTo(".box-header.table-bottom2");


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


$('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });








var clonedHeaderRow;

$(".persist-area").each(function() {
    clonedHeaderRow = $(".persist-header", this);
    clonedHeaderRow
    .before(clonedHeaderRow.clone())
    .css("width", clonedHeaderRow.outerWidth())
    .addClass("floatingHeader");

});

$(window)
.scroll(UpdateTableHeaders)
.trigger("scroll");


$('#select-user1,#select-user2,#select-country,#select-city,#select-region,#select-subregion').selectize();

if ($("#editor1").length) {
    CKEDITOR.replace('editor1');
}


    //-------------
    //- PIE
    //-------------
    


  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.  

  
  //$(".panel").on('shown.bs.collapse', drawChart());
  if($("#pieChart").length){
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


  //-----------------
  //- END PIE CHART -
  //-----------------


  if (document.getElementById("map-canvas") !== null) {

    var myLatlng = new google.maps.LatLng(39.468796, -0.376934);
    var mapOptions = {
        zoom: 16,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        // To add the marker to the map, use the 'map' property
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "Hello World!"
        });
    }




});
