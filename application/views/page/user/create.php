<div class="content-wrapper">
	<div class="row">
		<div class="col-sm-8">
			<div class="card overflow-hidden">
				<div class="card-header">
					<a href="<?php echo base_url('users'); ?>" class="btn btn-outline-primary">Back</a>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('users/store'); ?>" method="post" autocomplete="off">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="email">
							<small id="password" class="text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="password">
							<small id="password" class="text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="avatar">Avatar</label>
							<input type="file" name="avatar" id="avatar" class="form-control-file" aria-describedby="avatar">
							<small id="avatar" class="text-danger">Help text</small>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
