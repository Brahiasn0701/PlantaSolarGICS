<script>
// google.charts.load('current', {packages: ['corechart', 'line']});
// google.charts.setOnLoadCallback(drawCurveTypes);
// function drawCurveTypes() {
//     var data = new google.visualization.DataTable();
//     data.addColumn('number', 'X');
//     data.addColumn('number', 'Dogs');
//     data.addColumn('number', 'Cats');
//     data.addColumn('number', 'Birds');
//     data.addColumn('number', 'Fish');
//     data.addRows([
//         [0, 0, 0, 0, 0],    [1, 10, 5, 3, 1],   [2, 23, 15, 8, 2], [3, 17, 9, 3, 1], [4, 18, 10, 4, 1],  [5, 9, 5, 2, 1]
//       ]);
//     var options = {
//     hAxis: {
//         title: 'Hola'
//     },
//     vAxis: {
//         title: 'Brahian'
//     },
//     width: 800,
//     height: 400
//     };

//     var chart = new google.visualization.LineChart(document.getElementById('chart_div5'));
//     chart.draw(data, options);
// }
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');
      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, 1.5],
        [{v: [9, 0, 0], f: '9 am'}, 2, 2.5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 3.5],
        [{v: [11, 0, 0], f: '11 am'}, 4, 4.5],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 5.5],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 6.6],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 7.7],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 8.8],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 9.9],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10.1],
      ]);

      var options = {
        title: 'Motivation Level Throughout the Day',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        },
        width: 800,
        height: 400
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div5'));

      chart.draw(data, options);
    }
</script>
 <div id="chart_div5"></div>


