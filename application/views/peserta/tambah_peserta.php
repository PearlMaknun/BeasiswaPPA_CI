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
									<select class="form-control select2" style="width: 100%;" name= "provinsi" id="provinsi1">
										<option value="">PILIH PROVINSI</option>
										<?php
										foreach ($provinsi as $prov) {
											?>
											<option <?php echo $provinsi_selected == $prov->id ? 'selected="selected"' : '' ?> 
											value="<?php echo $prov->id ?>"><?php echo $prov->nama ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<label class="col-sm-2 control-label">Kabupaten/Kota:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="kota" id="kota1">
										<option value="">PILIH KABUPATEN/KOTA</option>
										<?php
										foreach ($kota as $kot) {
											?>
											<!--di sini kita tambahkan class berisi id provinsi-->
											<option <?php echo $kota_selected == $kot->id_provinsi ? 'selected="selected"' : '' ?> 
											class="<?php echo $kot->id_provinsi ?>" value="<?php echo $kot->id ?>"><?php echo $kot->nama_kota ?></option>
										<?php
										}
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
									<select class="form-control select2" style="width: 100%;" name="fakultas" id="fakultas">
										<option value="" selected="selected">PILIH FAKULTAS</option>
										<?php
										foreach ($fakultas as $fakul) {
											?>
											<option <?php echo $fakultas_selected == $fakul->id_fakultas ? 'selected="selected"' : '' ?> 
											value="<?php echo $fakul->id_fakultas ?>"><?php echo $fakul->nama_fakultas ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<label class="col-sm-2 control-label">Jurusan:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="jurusan" id="jurusan">
										<option value="" selected="selected">PILIH JURUSAN</option>
										<?php
										foreach ($jurusan as $jur) {
											?>
											<!--di sini kita tambahkan class berisi id provinsi-->
											<option <?php echo $jurusan_selected == $jur->id_fakultas ? 'selected="selected"' : '' ?> 
											class="<?php echo $jur->id_fakultas ?>" value="<?php echo $jur->id_jurusan ?>"><?php echo $jur->nama_jurusan ?></option>
										<?php
										}
										?>
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
									<select class="form-control select2" style="width: 100%;" name="provinsi_ortu" id="provinsi2">
										<option value="" selected="selected">PILIH PROVINSI</option>
										<?php
										foreach ($provinsiOrtu as $prov) {
											?>
											<option <?php echo $provinsiOrtu_selected == $prov->id ? 'selected="selected"' : '' ?> 
											value="<?php echo $prov->id ?>"><?php echo $prov->nama ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<label class="col-sm-2 control-label">Kabupaten/Kota:</label>

								<div class="col-sm-3">
									<select class="form-control select2" style="width: 100%;" name="kabupaten_ortu" id="kota2">
										<option value="" selected="selected">PILIH KABUPATEN/KOTA</option>
										<?php
										foreach ($kotaOrtu as $kot) {
											?>
											<!--di sini kita tambahkan class berisi id provinsi-->
											<option <?php echo $kotaOrtu_selected == $kot->id_provinsi ? 'selected="selected"' : '' ?> 
											class="<?php echo $kot->id_provinsi ?>" value="<?php echo $kot->id ?>"><?php echo $kot->nama_kota ?></option>
										<?php
										}
										?>
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
	<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
	<script>
            $("#kota1").chained("#provinsi1");
            $("#kota2").chained("#provinsi2");
            $("#jurusan").chained("#fakultas"); // disini kita hubungkan kota dengan provinsi
        </script>
    </section>