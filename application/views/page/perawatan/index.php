<div class="content-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<div class="card overflow-hidden">
				<div class="card-header">
					<a href="<?php echo base_url('perawatan/create'); ?>" class="btn btn-outline-primary">Create</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Jenis Perawatan</th>
								<th>Tanaman</th>
								<th>Perawatan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($perawatans as  $perawatan) :
							?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $perawatan->jenis_nama; ?></td>
									<td><?= $perawatan->tanaman_nama; ?></td>
									<td><?= $perawatan->nama; ?></td>
									<td>
										<a href="<?php echo base_url("perawatan/edit/{$perawatan->id}"); ?>" class="btn btn-primary btn-sm">Edit</a>
										<a href="<?php echo base_url("perawatan/delete/{$perawatan->id}"); ?>" class="btn btn-outline-danger btn-sm">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
