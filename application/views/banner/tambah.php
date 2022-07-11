<?php $date = date_create(date("Y-m-d"));
$newdate = date_format($date, "d-M-Y"); ?>
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
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Formulir Tambah Banner</h4>
                </div>
                <!-- /.box-header -->
                <form class="form" method="POST" action="<?= base_url('banner/do_tambah') ?>" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?= set_value('judul') ?>">
                            <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                        </div>
                     
                        <div class="form-group">
                            <label>Gambar</label><br>
                            <label class="file">
                                <img id="image-preview" alt="image preview" style="max-width:250px" /><br>
                                <input type="file" name="user_file" id="image-source" onchange="previewImage();" accept="image/png,image/x-png,image/jpeg,image/jpg">
                            </label>
                            <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <a href="<?= base_url('banner') ?>" class="btn btn-warning mr-1">
                            Back
                        </a>
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