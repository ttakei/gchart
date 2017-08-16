<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['日付', '順位推移'],['2017-07-18',8],['2017-07-19',7],['2017-07-20',7],['2017-07-21',6],['2017-07-22',7],['2017-07-23',7],['2017-07-24',8],['2017-07-25',7],['2017-07-26',8],['2017-07-28',20],['2017-08-04',6],['2017-08-05',6],['2017-08-06',7],['2017-08-08',6]]);
    var options = {
        width:540,
        height:300,
        pointSize:8,
        chartArea:{left:50,top:10,bottom:80,right:10},
        hAxis:{maxAlternation: 1,slantedText: true,slantedTextAngle: 90},
        vAxis: {direction:-1,maxValue:31,minValue:1,baseline:1}
    };
    var chart = new google.visualization.LineChart(document.getElementById('chart_div157954674'));
    chart.draw(data, options);
  }
</script>
<div id="chart_div157954674" style=""></div>
