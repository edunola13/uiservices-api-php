 <script type="text/javascript"> $(function () {     $('#chart-column-parsed').highcharts({         data: {             table: document.getElementById('<?php echo $valores["config.tableId"];?>')         },         chart: {             type: 'column'         },         title: {             text: '<?php echo $valores["config.title"];?>'         },         yAxis: {             allowDecimals: true,             title: {                 text: '<?php echo $valores["config.units"];?>'             }         },         tooltip: {             formatter: function () {                 return '<b>' + this.point.name + '</b><br/>' +                     this.series.name + ': ' + this.point.y + ' <?php echo $valores["config.units"];?>';             }         }     }); }); </script>  <div id="chart-column-parsed" style="min-width: 310px; height: 400px; margin: 0 auto"></div>  