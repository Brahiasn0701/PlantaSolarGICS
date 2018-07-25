<script>

google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);
function drawBasic() {
    var Mouth = {1 : "Enero", 2 : "Febrero", 3 : "Marzo", 4 : "Abril", 5 : "Mayo", 6 : "Junio", 7: "Julio", 
                    8 : "Agosto", 9 : "Septiembre", 10 : "Octubre", 11 : "Noviembre", 12 : "Diciembre"};
    var f = new Date();
    
    var data = new google.visualization.DataTable();
    data.addColumn('timeofday', 'X');
    data.addColumn('number', 'Voltaje');
    data.addRows([
        [{v: [5, 0, 0], f: '5 am'}, 0],
        [{v: [6, 0, 0], f: '6 am'}, 1.2],
        [{v: [9, 0, 0], f:'9 am'}, 0.8],
        [{v: [11, 0, 0], f: '11 am'}, 1.8]
      ]);
    var options = {
    hAxis: {    
        title: f.getDate() + " de " + Mouth[f.getMonth() + 1] + " del " + f.getFullYear(),
        format: 'h:mm a',
        viewWindow: {
            min: [f.getHours() - 6, 0, 0],
            max: [f.getHours(), 0, 0]
        }
    },
    vAxis: {
        title: 'Voltaje'
    },
    width: 800,
    height: 400
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
}
</script>
 <div id="chart_div1"></div>


