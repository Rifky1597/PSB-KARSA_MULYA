    <!-- Dashboard content -->
    <div class="row">
      <div class="panel panel-flat col-md-12">
        <?php
        echo $this->session->flashdata('msg');
        //echo json_encode($pekerjaan_ayah);
        ?>

          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-stats-dots"></i> Grafik Statistik Pendaftaran Siswa Pertahun</legend>
                <center>
                <div class="form-group"><b></b>
                  <div class="input-group col-md-2">
                    <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                    <select class="form-control" name="thn" onchange="thnn()">
                      <?php for ($i=date('Y'); $i >=2018 ; $i--) {?>
                        <option value="<?php echo $i; ?>" <?php if($v_thn==$i){echo "selected";} ?>>Tahun <?php echo $i; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  &nbsp;
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#1" role="tab" data-toggle="tab">Jenis Kelamin</a></li>
                  <li><a href="#2" role="tab" data-toggle="tab">Agama</a></li>
                  <li><a href="#3" role="tab" data-toggle="tab">Pendidikan Ayah dan Ibu</a></li>
                  <li><a href="#4" role="tab" data-toggle="tab">Pekerjaan Ayah dan Ibu</a></li>
                  <li><a href="#5" role="tab" data-toggle="tab">Penghasilan Ayah dan Ibu</a></li>
                  <li><a href="#6" role="tab" data-toggle="tab">Usia</a></li>
                </ul>

                <script src="assets/panel/highcharts/highcharts.js" type="text/javascript"></script>
                <script src="assets/panel/highcharts/modules/exporting.js" type="text/javascript"></script>
                <script src="assets/panel/highcharts/modules/offline-exporting.js" type="text/javascript"></script>

                <div class="tab-content">
                  <div class="tab-pane active" id="1">
                    <?php $this->load->view('admin/laporan_psb/jk'); ?>
                  </div>
                  <div class="tab-pane" id="2">
                    <?php $this->load->view('admin/laporan_psb/agama'); ?>
                  </div>
                  <div class="tab-pane" id="3">
                    <?php $this->load->view('admin/laporan_psb/pdd_ayah'); ?>
                    <br><br>
                    <?php $this->load->view('admin/laporan_psb/pdd_ibu'); ?>
                  </div>
                  <div class="tab-pane" id="4">   
                    <?php $this->load->view('admin/laporan_psb/pekerjaan_ayah'); ?>
                    <br><br>
                    <?php $this->load->view('admin/laporan_psb/pekerjaan_ibu'); ?>
                  </div>
                  <div class="tab-pane" id="5">   
                    <?php $this->load->view('admin/laporan_psb/penghasilan_ayah'); ?>
                    <br><br>
                    <?php $this->load->view('admin/laporan_psb/penghasilan_ibu'); ?>
                  </div>
                  <div class="tab-pane" id="6">   
                    <?php $this->load->view('admin/laporan_psb/usia'); ?>
                  </div>
                </div>

                </center>
            </fieldset>
          </div>
      </div>
    </div>
<script type="text/javascript">
  function thnn()
{
  var thn = $('[name="thn"]').val();
    window.location = "panel_admin/laporan_psb/thn/"+thn;
}
$('[name="thn"]').select2({
    placeholder: "- Tahun -"
});
</script>
    <!-- /dashboard content -->
