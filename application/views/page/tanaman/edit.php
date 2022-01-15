<div class="content-wrapper">
	<div class="row">
		<div class="col-sm-8">
			<div class="card overflow-hidden">
				<div class="card-header">
					<a href="<?php echo base_url('tanaman'); ?>" class="btn btn-outline-primary">Back</a>
				</div>
				<div class="card-body">
					<form action="" method="post" autocomplete="off">
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal" value="<?= $tanaman->tanggal; ?>" aria-describedby="tanggal">
							<small id="password" class="text-danger"><?= form_error('tanggal'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-describedby="nama" value="<?= $tanaman->nama; ?>">
							<small id="password" class="text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="variates">Variates</label>
							<input type="text" name="variates" id="variates" class="form-control" placeholder="Variates" aria-describedby="variates" value="<?= $tanaman->variates; ?>">
							<small id="password" class="text-danger"><?= form_error('variates'); ?></small>
						</div>
						<div class="form-group">
							<label for="lokasi">Lokasi</label>
							<input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Lokasi" aria-describedby="lokasi" value="<?= $tanaman->lokasi; ?>">
							<small id="password" class="text-danger"><?= form_error('lokasi'); ?></small>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
