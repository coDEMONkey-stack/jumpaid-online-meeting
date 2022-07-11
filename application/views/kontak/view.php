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
							<li class="breadcrumb-item active" aria-current="page">Kontak</li>
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
					<h3 class="box-title">Data Kontak</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Judul</th>
									<th>Isi</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($data as $row) : ?>
									<tr id="delete<?= $row->id; ?>">
										<td><?= $no++ ?></td>
										<td><?= $row->nama ?></td>
										<td><?= $row->email ?></td>
										<td><?= $row->judul ?></td>
										<td><?= substr($row->isi, 0, 100) ?></td>
										<td><?php $date = date_create($row->tanggal);
											echo date_format($date, "H:i:s d-M-Y"); ?></td>
										<td>
											<a onclick="swdel('kontak','del',<?php echo $row->id ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Judul</th>
									<th>Isi</th>
									<th>Tanggal</th>
									<th>Aksi</th>
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