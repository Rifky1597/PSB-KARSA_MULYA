<style>
 #chart{
   z-index:-10;}
</style>

    <!-- Dashboard content -->

                <center>
                <div id="chart_pdd_ayah">
                </div>
                </center>

    <!-- /dashboard content -->

<!-- <script src="assets/highcharts/jquery.min.js" type="text/javascript"></script> -->

<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart_pdd_ayah',
   type: 'pie',
  },
  title: {
   text: 'Laporan PSB Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?>',
   x: -20
  },
  subtitle: {
   text: 'Jumlah Data Pendaftar Berdasarkan Pendidikan Ayah',
   x: -20
  },
  xAxis: {
   categories: [
   <?php foreach($pdd_ayah as $key => $value) {
      echo "'$key',";
    }?>
    ]
  },
  yAxis: {
   title: {
    text: 'Total Data Pendaftaran'
   }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.y}'
      }
    }
  },
  series: [{
    name: 'Jumlah',
    colorByPoint: true,
    data: [
        <?php
    foreach($pdd_ayah as $key => $value) {
      echo "{name: '$key',y:$value},";
    }
    ?>
  ]
  }]
 });
});

function thnn()
{
  var thn = $('[name="thn"]').val();
    window.location = "panel_admin/statistik/thn/"+thn;
}
$('[name="thn"]').select2({
    placeholder: "- Tahun -"
});
</script>
