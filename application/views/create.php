<?php include_once('header.php');?>
  <div class="container">

      <?php echo form_open('welcome/save', ['class' => 'form-horizontal']); ?>
        <fieldset>
          <legend>Form Tabel Karyawan</legend>
          <div class="form-group">
            <label for="inputID">ID Karyawan</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'id_karyawan','placeholder' => 'Isi dengan ID Karyawan-mu','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputNama">Nama Karyawan</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'nama_karyawan','placeholder' => 'Nama Lengkap Anda','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputGol">Golongan</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'golongan','placeholder' => 'Golongan','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputTglLhr">Tanggal Lahir</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'tgl_lahir','placeholder' => 'Tanggal Lahir','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'alamat','placeholder' => 'Alamat','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputJenkel">Jenis Kelamin</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'jenis_kelamin','placeholder' => 'Jenis Kelamin','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputStatus">Status</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'status','placeholder' => 'Status','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputJbtn">Jabatan</label>
            <div class="col-md-10">
            <?php echo form_input(['name' => 'jabatan','placeholder' => 'Jabatan','class' => 'form-control',]); ?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-10-col-md-offset-2">
              <?php echo form_submit(['name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-default']) ;?>
              <?php echo anchor('welcome', 'Back', ['class' => 'btn btn-default']) ;?>
            </div>
          </div>
        </fieldset>
    <?php echo form_close(); ?>
    </div>
<?php include_once('footer.php');?>
