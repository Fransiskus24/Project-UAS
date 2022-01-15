<div class="content-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<div class="card overflow-hidden">
				<div class="card-header">
					<a href="<?php echo base_url('users/create'); ?>" class="btn btn-outline-primary">Create</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Email</th>
								<th>Avatar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($users as  $user) :
							?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $user->email; ?></td>
									<td><?= $user->avatar; ?></td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">Edit</a>
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
