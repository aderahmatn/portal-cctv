<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-gray-900">Formulir Tambah User</h6>
		<div class="button">
			<a href="<?php echo site_url('user') ?>" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Close">
				<i class="fas fa-times"></i>
			</a>
		</div>
	</div>
	<div class="card-body">
		
		<form>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="fnik">Nomor Induk Karyawan</label>
					<input type="text" class="form-control is-invalid " id="fnik" autofocus="on">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fnamadepan">Nama Depan</label>
					<input type="text" class="form-control" id="fnamadepan">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fnamabelakang">Nama Belakang</label>
					<input type="text" class="form-control" id="fnamabelakang">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="fusername">Username</label>
					<input type="text" class="form-control" id="fusername">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fpassword">Password</label>
					<input type="password" class="form-control" id="fpassword">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fulangipassword">Ulangi Password</label>
					<input type="password" class="form-control is-invalid" id="fulangipassword">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="fwa">Whatsapp</label>
					<input type="text" class="form-control is-invalid" id="fwa">
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fshif">Group Shif</label>
					<select id="fshif" class="form-control is-invalid">
						<option selected>Pilih...</option>
						<option>SHOCC01</option>
						<option>SHOCC02</option>
						<option>SHOCC03</option>
						<option>SHOCC04</option>
					</select>
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
				<div class="form-group col-md-4">
					<label for="fava">Avatar</label>
					<input type="file" class="form-control-file" id="fava">
					<span><small>*File size avatar tidak lebih dari 1Mb</small></span>
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
			</div>
			<div class="card-footer text-right">
				<button type="submit" class="btn btn-primary">
					<i class="fad fa-paper-plane"></i>
					Kirim
				</button>
			</div>
		</form>
	</div>
</div>
