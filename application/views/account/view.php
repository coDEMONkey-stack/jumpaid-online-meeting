<!-- Main content -->
<section class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">My Account</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account Setting</li>
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
                    <h4 class="box-title">Account Setting</h4>
                </div>
                <!-- /.box-header -->
                <form class="form" method="POST" action="<?= base_url('account/do_edit/') ?>" enctype="multipart/form-data">
                <div class="box-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="pw">
                            <?= form_error('pw', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" name="cpw">
                            <?= form_error('cpw', '<small class="text-danger">', '</small>'); ?>
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