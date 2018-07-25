<section>
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements disabled -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Tambah User</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<form class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama:</label>

								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="Nama" name="nama_mhs">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Jenis Kelamin:</label>
								<div class="col-sm-8">
									<div class="radio-inline">
										<label>
											<input type="radio" name="jeniskelamin" id="jeniskelamin1" value="Laki-laki" checked>
											Laki-laki
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" name="jeniskelamin" id="jeniskelamin2" value="Perempuan">
											Perempuan
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">NIM:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="NIM" name="NIM">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Tempat Lahir:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
								</div>

								<label class="col-sm-2 control-label">Tanggal Lahir:</label>

								<div class="col-sm-3">
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="date" class="form-control pull-right" id="datepicker" name="tanggal_lahir">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Alamat:</label>

								<div class="col-sm-8">
									<textarea class="form-control" rows="3" name="alamat">
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Provinsi:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name= "provinsi" id="provinsi">
										<option value="">PILIH PROVINSI</option>
										<?php
										//while($pq=mysqli_fetch_array($pquery)){
										?>
										<option id="provinsi" value="<?php //$pq['id_provinsi']; ?>"><?php //echo $pq['nama_provinsi']; ?></option>
										<?php
										//}
										//$kquery = mysqli_query($connect, "SELECT * FROM kota WHEN id_kota = $provinsi");
										?>
									</select>
								</div>

								<label class="col-sm-2 control-label">Kabupaten/Kota:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="kabupaten" id="kabupaten">
										<option value="">PILIH KABUPATEN/KOTA</option>
										<?php
										//$kquery = mysqli_query($connect, "SELECT * FROM kota INNER JOIN propinsi ON kota.id_propinsi = propinsi.id_provinsi ORDER BY nama_kota");
										//while($kq=mysqli_fetch_array($kquery)){
										?>
										<option id="kabupaten" class="<?php //echo $row['id_propinsi']; ?>" value="<?php //$pq['id_kota']; ?>"><?php //echo $kq['nama_kota']; ?></option>
										<?php
										//}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kode Pos:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="Kode Pos" name="kodepos">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">No Telepon:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="No. Telp/Hp" name="telepon">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Fakultas:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="fakultas">
										<option value="" selected="selected">700 - SAINS DAN TEKNOLOGI</option>
									</select>
								</div>

								<label class="col-sm-2 control-label">Jurusan:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="jurusan">
										<option value="" selected="selected">705 - TEKNIK INFORMATIKA</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Semester:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="Semester" name="semester">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">IPK:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="IPK" name="ipk">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Ayah Kandung:</label>

								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="Nama Ayah Kandung" name="nama_ayah">
									<div class="radio-inline">
										<label>
											<input type="radio" name="status_ayah" id="status_ayah1" value="Hidup" checked>
											Hidup
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" name="status_ayah" id="status_ayah2" value="Meninggal">
											Meninggal
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Ibu Kandung:</label>

								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="Nama Ibu Kandung" name="nama_ibu">
									<div class="radio-inline">
										<label>
											<input type="radio" name="status_ibu" id="status_ibu1" value="Hidup" checked>
											Hidup
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" name="status_ibu" id="status_ibu2" value="Meninggal">
											Meninggal
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Pekerjaan Orang Tua:</label>

								<div class="col-sm-8">
									<select class="form-control select2" style="width: 100%;" name="pekerjaan">
										<option value="" selected="selected">GURU</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Alamat Orang Tua:</label>

								<div class="col-sm-8">
									<textarea class="form-control" rows="3" placeholder="Alamat jelas...." name="alamat_ortu">
									</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Provinsi:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="provinsi_ortu">
										<option value="" selected="selected">Jawa Barat</option>
									</select>
								</div>

								<label class="col-sm-2 control-label">Kabupaten/Kota:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="kabupaten_ortu">
										<option value="" selected="selected">Bandung</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kode Pos:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="Kode Pos" name="kodepos_ortu">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">No Telepon Orang Tua:</label>

								<div class="col-sm-3">
									<input type="text" class="form-control" placeholder="No. Telp/Hp Orang Tua" name="telepon_ortu">
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
								<div class="col-sm-2">
									<button type="submit" class="btn btn-default">Batal</button>
									<button type="submit" class="btn btn-info">Simpan</button>
								</div>
							</div>
						</div>
						<!-- /.box-footer -->
					</form>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!--/.col (right) -->
	</div>
<script src="dist/jquery-1.11.3.min"></script>
<script src="jquery.chained.min.js"></script>
<script>
    $("#kabupaten").chained("#provinsi");
</script>
</section>