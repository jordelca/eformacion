/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/
"use strict";


  //Activate the iCheck Plugin
  $('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
  //Make the dashboard widgets sortable Using jquery UI
  $(".connectedSortable").sortable({
    placeholder: "sort-highlight",
    connectWith: ".connectedSortable",
    handle: ".box-header, .nav-tabs",
    forcePlaceholderSize: true,
    zIndex: 999999
  });
  $(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");
  //jQuery UI sortable for the todo list
  $(".todo-list").sortable({
    placeholder: "sort-highlight",
    handle: ".handle",
    forcePlaceholderSize: true,
    zIndex: 999999
  });

  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();

  $('.daterange').daterangepicker(
          {
            ranges: {
              'Hoy': [moment(), moment()],
              'Ayer': [moment().subtract('days', 1), moment().subtract('days', 1)],
              'Últimos 7 días': [moment().subtract('days', 6), moment()],
              'Últimos 30 días': [moment().subtract('days', 29), moment()],
              'Este mes': [moment().startOf('month'), moment().endOf('month')],
              'Mes anterior': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment()
          },
  function (start, end) {
    alert("You chose: " + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  });

  /* jQueryKnob */
  $(".knob").knob();

  //jvectormap data
  var visitorsData = {
    "US": 398, //USA
    "SA": 400, //Saudi Arabia
    "CA": 1000, //Canada
    "DE": 500, //Germany
    "FR": 760, //France
    "CN": 300, //China
    "AU": 700, //Australia
    "BR": 600, //Brazil
    "IN": 800, //India
    "GB": 320, //Great Britain
    "RU": 3000 //Russia
  };
  //World map by jvectormap
  $('#world-map').vectorMap({
    map: 'es_mill_en',
    backgroundColor: "transparent",
    regionStyle: {
      initial: {
        fill: '#e4e4e4',
        "fill-opacity": 1,
        stroke: 'none',
        "stroke-width": 0,
        "stroke-opacity": 1
      }
    },
    series: {
      regions: [{
          values: visitorsData,
          scale: ["#92c1dc", "#ebf4f9"],
          normalizeFunction: 'polynomial'
        }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] != "undefined")
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
    }
  });

  //Sparkline charts
  var myvalues = [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021];
  $('#sparkline-1').sparkline(myvalues, {
    type: 'line',
    lineColor: '#92c1dc',
    fillColor: "#ebf4f9",
    height: '50',
    width: '80'
  });
  myvalues = [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921];
  $('#sparkline-2').sparkline(myvalues, {
    type: 'line',
    lineColor: '#92c1dc',
    fillColor: "#ebf4f9",
    height: '50',
    width: '80'
  });
  myvalues = [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21];
  $('#sparkline-3').sparkline(myvalues, {
    type: 'line',
    lineColor: '#92c1dc',
    fillColor: "#ebf4f9",
    height: '50',
    width: '80'
  });

  //The Calender
  $("#calendar").datepicker();

  //SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').slimScroll({
    height: '250px'
  });

  /* Morris.js Charts */
  // Sales chart
  var area = new Morris.Area({
    element: 'revenue-chart',
    resize: true,
    data: [
      {y: '2015-01', item1: 0, item2: 6, item3: 4},
      {y: '2015-02', item1: 2, item2: 4, item3:10},
      {y: '2015-03', item1: 1, item2: 1, item3:17},
      {y: '2015-04', item1: 3, item2: 3, item3:24},
      {y: '2015-05', item1: 6, item2: 10, item3:48},
      {y: '2015-06', item1: 0, item2: 8, item3:0},
      {y: '2015-07', item1: 0, item2: 0, item3:0},
      {y: '2015-08', item1: 0, item2: 0, item3:0},
      {y: '2015-09', item1: 0, item2: 0, item3:0},
      {y: '2015-10', item1: 0, item2: 0, item3:0},
      {y: '2015-11', item1: 0, item2: 0, item3:0},
      {y: '2015-12', item1: 0, item2: 0, item3:0}
    ],
    xkey: 'y',
    ykeys: ['item3', 'item2', 'item1'],
    labels: ['Activas', 'Inactivas', 'Finalizadas'],
    lineColors: ['#00A65A', '#00C0EF', '#DD4B39'],
    hideHover: 'auto'
  });
  var line = new Morris.Line({
    element: 'line-chart',
    resize: true,
    data: [
      {y: '2015-01', item1: 0},
      {y: '2015-02', item1: 2},
      {y: '2015-03', item1: 1},
      {y: '2015-04', item1: 3},
      {y: '2015-05', item1: 6},
      {y: '2015-06', item1: 0},
      {y: '2015-07', item1: 0},
      {y: '2015-08', item1: 0},
      {y: '2015-09', item1: 0},
      {y: '2015-10', item1: 0},
      {y: '2015-11', item1: 0},
      {y: '2015-12', item1: 0},
    
    ],
    xkey: 'y',
    ykeys: ['item1'],
    labels: ['Item 1'],
    lineColors: ['#efefef'],
    lineWidth: 2,
    hideHover: 'auto',
    gridTextColor: "#fff",
    gridStrokeWidth: 0.4,
    pointSize: 4,
    pointStrokeColors: ["#efefef"],
    gridLineColor: "#efefef",
    gridTextFamily: "Open Sans",
    gridTextSize: 12
  });

  //Donut Chart
  var donut = new Morris.Donut({
    element: 'sales-chart',
    resize: true,
    colors: ["#DD4B39", "#00C0EF", "#00A65A"],
    data: [
      {label: "Finalizadas", value: 12},
      {label: "Inactivas", value: 10},
      {label: "Activas", value: 48}
    ],
    hideHover: 'auto'
  });

  //Fix for charts under tabs
  $('.box ul.nav a').on('shown.bs.tab', function (e) {
    area.redraw();
    donut.redraw();
  });


  /* BOX REFRESH PLUGIN EXAMPLE (usage with morris charts) */
  $("#loading-example").boxRefresh({
    source: "ajax/dashboard-boxrefresh-demo.php",
    onLoadDone: function (box) {
      bar = new Morris.Bar({
        element: 'bar-chart',
        resize: true,
        data: [
          {y: '2006', a: 100, b: 90},
          {y: '2007', a: 75, b: 65},
          {y: '2008', a: 50, b: 40},
          {y: '2009', a: 75, b: 65},
          {y: '2010', a: 50, b: 40},
          {y: '2011', a: 75, b: 65},
          {y: '2012', a: 100, b: 90}
        ],
        barColors: ['#00a65a', '#f56954'],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['CPU', 'DISK'],
        hideHover: 'auto'
      });
    }
  });

  /* The todo list plugin */
  $(".todo-list").todolist({
    onCheck: function (ele) {
      console.log("The element has been checked")
    },
    onUncheck: function (ele) {
      console.log("The element has been unchecked")
    }
  });
