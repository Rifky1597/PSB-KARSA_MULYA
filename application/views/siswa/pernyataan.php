<style>
  #tbl_input {
    width: 50px;
    text-align: center;
  }

  #tbl_input2 {
    width: 100px;
    text-align: center;
  }

  #th_center>th {
    text-align: center;
  }
</style>

<?php
error_reporting(0);
$berkas = $berkas->row();
$user = $user->row(); ?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <?php
    echo $this->session->flashdata('msg2');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="panel panel-flat">
            <div class="panel-body">
              <tr>
               <th>Pernyataan<input type="file" name="pernyataan"></th>
                </tr>
                <td><a href="files/berkas/<?php echo $berkas->pernyataan; ?>" target="_blank"><b><?php echo $berkas->s_pernyataan; ?></b></a>
               <button type="submit" name="btn-pernyataan" class="btn btn-primary" style="float:right;">Simpan</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /dashboard content -->