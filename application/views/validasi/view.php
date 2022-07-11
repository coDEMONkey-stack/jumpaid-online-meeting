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
							<li class="breadcrumb-item active" aria-current="page">Validasi</li>
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
					<h3 class="box-title">Data Validasi</h3><a href="<?= base_url('validasi/tambah') ?>" style="float:right" class="btn btn-sm btn-primary">Tambah</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Judul Validasi</th>
									<th>Deskripsi</th>
									<th>Gambar</th>
									<th width="18%">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $row) : ?>
									<tr id="delete<?= $row->id; ?>">
										<td>1</td>
										<td><?= $row->judul ?></td>	 
										<td><?= $row->deskripsi ?></td>
										<td class="text-center">
											<img src="<?= base_url('assets/images/validasi/' . $row->gambar) ?>" class="img-fluid" style="max-width:150px">
										</td>
										<td class="text-center">
											<a href="<?= base_url('validasi/edit/' . $row->id) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a onclick="swdel('validasi','del',<?php echo $row->id ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Judul Validasi</th>
									<th>deskripsi</th>
									<th>Gambar</th>
									<th width="18%">Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
<!-- /.content -->