<!-- Main content -->
<section class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Data</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                            <li class="breadcrumb-item" aria-current="page">Setting</li>
                            <li class="breadcrumb-item active" aria-current="page">Global Setting</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="box">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="box-header with-border">
                    <h4 class="box-title">Global Setting</h4>
                </div>
                <!-- /.box-header -->
                <form class="form" method="POST" action="<?= base_url('global_setting/do_edit/') ?>" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_perusahaan" value="<?= $data['nama_perusahaan'] ?>">
                            <?= form_error('nama_perusahaan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Perusahaan</label>
                            <input type="text" class="form-control" name="deskripsi_perusahaan" value="<?= $data['deskripsi_perusahaan'] ?>">
                            <?= form_error('deskripsi_perusahaan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    <!--    <div class="form-group">
                            <label>Fixed Content</label>
                            <input type="text" class="form-control" name="fixed_content" value="<?= $data[ 'fixed_content'] ?>">
                            <?= form_error('fixed_content', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Multiple Content</label>
                            <input type="text" class="form-control" name="multiple_content" value="<?= $data['multiple_content'] ?>">
                            <small>Gunakan "," sebagai pemisah kata. Cth: Supplier,Stok</small>
                            <?= form_error('multiple_content', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="sosmed_1" value="<?= $data['sosmed_1'] ?>">
                            <?= form_error('sosmed_1', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control" name="sosmed_2" value="<?= $data['sosmed_2'] ?>">
                            <?= form_error('sosmed_2', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="sosmed_3" value="<?= $data['sosmed_3'] ?>">
                            <?= form_error('sosmed_3', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Skype</label>
                            <input type="text" class="form-control" name="sosmed_4" value="<?= $data['sosmed_4'] ?>">
                            <?= form_error('sosmed_4', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" class="form-control" name="sosmed_5" value="<?= $data['sosmed_5'] ?>">
                            <?=  form_error('sosmed_5', '<small class="text-danger">', '</small>'); ?>
                        </div>--> 
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="<?= $data['lokasi'] ?>">
                            <?=  form_error('sosmed_5', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>">
                            <?=  form_error('sosmed_5', '<small class="text-danger">', '</small>'); ?> 
                        </div>   

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="<?= $data['telepon'] ?>">
                            <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Logo Perusahaan</label><br>
                            <label class="file">
                                <img id="image-preview" alt="image preview" style="max-width:250px" /><br>
                                <img id="image-now" alt="image preview" style="max-width:250px" src="<?= base_url('assets/images/logo/' . $data['logo']) ?>" /><br><br>
                                <input type="file" name="user_file" id="image-source" onchange="previewImage();" accept="image/png,image/x-png,image/jpeg,image/jpg">
                            </label>
                            <?= form_error('logo', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>


    </div>
    <!-- /.box -->
    </div>
    <!--/.col (right) -->
    </div>
</section>
<!-- /.content -->