<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-gray-900">Master User</h6>
		<div class="button">
			<a href="#" class="btn btn-secondary btn-sm btn-icon-split">
				<span class="icon text-white-50">
					<i class="fad fa-user-plus"></i>
				</span>
				<span class="text">Tambah User</span>
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-borderless " id="masteruser" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Handphone</th>
						<th></th>
					</tr>
				</thead>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>
						<button onclick="deleteConfirm('<?=site_url('barang/delete/')?>')" href="#!" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus User <?='ade'?>">
							<i class="fas fa-user-minus"></i>
						</button>
						<a href="<?php echo site_url('user/edit/') ?>"><button class="btn btn-circle btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit User">
							<i class="fas fa-user-edit"></i>
						</button></a>
						
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>2</td>
					<td>2</td>
					<td>2</td>
					<td>1</td>
					<td>
						<a onclick="deleteConfirm('<?=site_url('barang/delete/')?>')" href="#!" class="btn btn-circle btn-sm btn-danger">
							<i class="fas fa-user-minus"></i>
						</a>
						<a href="<?php echo site_url('barang/update/') ?>"
							class="btn btn-circle btn-sm btn-info">
							<i class="fas fa-user-edit"></i>
						</a>
					</td>
				</tr>
							<!-- <tbody>
								<?php $no=1;
								foreach ($barang as $dt) :?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo strtoupper($dt->KodeBarang)  ?></td>
										<td><?php echo strtoupper($dt->NamaBarang) ?></td>
										<td><?php echo strtoupper($dt->Qty) ?></td>
										<td><?php echo strtoupper($dt->Box) ?></td>
										<td><?php echo strtoupper($dt->Label) ?></td>
										<td><a href="<?php echo site_url('barang/update/'.$dt->IdBarang) ?>"
											class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

											<a onclick="deleteConfirm('<?=site_url('barang/delete/'.$dt->IdBarang)?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody> -->
							</table>
						</div>
					</div>
				</div>