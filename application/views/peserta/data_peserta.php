<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Data Peserta</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<a href="<?php echo base_url('admin/Peserta/insertPage')?>" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Data Peserta</a>
		<br>
		<table class="table table-bordered" id="tabel">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>FAKULTAS</th>
					<th>JURUSAN</th>
					<th>IPK</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				foreach ($data_peserta as $key) { ?>
					<tr>
						<td><?php echo $no++; ?></td>          
						<td><?php echo $key->Nama; ?></td>
						<td><?php echo $key->Fakultas; ?></td>
						<td><?php echo $key->Jurusan; ?></td>
						<td><?php echo $key->IPK; ?></td>
						<td>
							<div class="btn-group btn-group-xs" role="group" aria-label="Basic example">
								<a type="button" class="btn btn-secondary btn-success">Edit</a>
								<a type="button" class="btn btn-secondary btn-danger">Hapus</a>
								<a type="button" class="btn btn-secondary btn-primary" href="<?php echo base_url('admin/Peserta/detail')?>">Detail</a>
							</div>
						</td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <script type="text/javascript">
	 $(document).ready(function() {
	 	$('#tabel').dataTable({
	          "bPaginate": true,
	          "bLengthChange": true,
	          "bFilter": true,
	          "bSort": true,
	          "bInfo": true,
	          "bAutoWidth": true
	    });
	 });
</script>