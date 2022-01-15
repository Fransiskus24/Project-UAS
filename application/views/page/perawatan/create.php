<div class="content-wrapper">
	<div class="row">
		<div class="col-sm-8">
			<div class="card overflow-hidden">
				<div class="card-header">
					<a href="<?php echo base_url('perawatan'); ?>" class="btn btn-outline-primary">Back</a>
				</div>
				<div class="card-body">
					<form action="" method="post" autocomplete="off">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" aria-describedby="nama">
							<small id="password" class="text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jenis">Jenis Perawatan</label>
							<select name="jenis" id="jenis" class="form-select">
								<option value="">Pilih</option>
								<?php foreach ($jenis as $j) : ?>
									<option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
								<?php endforeach; ?>
							</select>
							<small id="jenis" class="text-danger"><?= form_error('jenis'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanaman">Tanaman</label>
							<select name="tanaman" id="tanaman" class="form-select">
								<option value="">Pilih</option>
								<?php foreach ($tanaman as $t) : ?>
									<option value="<?= $t->id; ?>"><?= $t->nama; ?></option>
								<?php endforeach; ?>
							</select>
							<small id="tanaman" class="text-danger"><?= form_error('tanaman'); ?></small>
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
