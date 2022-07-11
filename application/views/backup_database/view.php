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
                            <li class="breadcrumb-item" aria-current="page">Setting</li>
                            <li class="breadcrumb-item active" aria-current="page">Backup Database</li>
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
                    <h4 class="box-title">Backup Database</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="<?=base_url('backup_database/download')?>" class="btn btn-primary"><i class="fa fa-database"></i> Download</a>    
                    </div>
                </div>

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