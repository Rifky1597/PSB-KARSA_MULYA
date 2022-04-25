<style>
 #chart{
   z-index:-10;}
</style>

    <!-- Dashboard content -->

                <center>
                <div id="chart_penghasilan_ayah">
                </div>
                </center>

    <!-- /dashboard content -->

<!-- <script src="assets/highcharts/jquery.min.js" type="text/javascript"></script> -->
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart_penghasilan_ayah',
   type: 'pie',
  },
  title: {
   text: 'Laporan PSB Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?>',
   x: -20
  },
  subtitle: {
   text: 'Jumlah Data Pendaftar Berdasarkan Penghasilan Ayah',
   x: -20
  },
  xAxis: {
   categories: [
   <?php foreach($penghasilan_ayah as $k => $value) {
      $key = str_replace("<","Di bawah ",$k);
      echo "'$key',";}
   ?>
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
    foreach($penghasilan_ayah as $k => $value) {
      $key = str_replace("<","Di bawah ",$k);
      echo "{name: '$key',y:$value},";  }
    ?>
    
  ]
  }]
 });
});

function thn2()
{
  var thn = $('[name="thn"]').val();
    window.location = "panel_admin/statistik/thn/"+thn;
}
$('[name="thn"]').select2({
    placeholder: "- Tahun -"
});
</script>
