

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$no_agenda	= $datpil->no_agenda;
	$kode		= $datpil->kode;
	$tujuan		= $datpil->tujuan;
	$no_surat	= $datpil->no_surat;
	$tgl_surat	= $datpil->tgl_surat;
	$uraian		= $datpil->isi_ringkas;
	$ket		= $datpil->keterangan;
	
} else {
	$act		= "act_add";
	$idp		= "";
	$no_agenda	= "";
	$kode		= "";
	$tujuan		= "";
	$no_surat	= "";
	$tgl_surat	= "";
	$uraian		= "";
	$ket		= "";
}
?>
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Buat Surat</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?=base_URL()?>admin/buat_surat/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td width="20%">No. Agenda</td><td><b><input type="text" name="no_agenda" required value="<?php echo $no_agenda; ?>" style="width: 100px" class="form-control"></b></td></tr>
		<tr><td width="20%">Tujuan Surat</td><td><b><input type="text" name="tujuan" required value="<?php echo $tujuan; ?>" id="tujuan" style="width: 400px" class="form-control"></b></td></tr>		
		<tr><td width="20%">Nomor Surat</td><td><b><input type="text" name="no_surat" required value="<?php echo $no_surat; ?>" style="width: 300px" class="form-control"></td></tr>	
		<tr><td width="20%">Isi Ringkas</td><td><b><textarea name="uraian" required style="width: 400px; height: 90px" class="form-control"><?php echo $uraian; ?></textarea></b></td></tr>	
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?=base_URL()?>admin/buat_surat" class="btn btn-success">Kembali</a>
		</td></tr>
		</table>
	</div>
	
	<div class="col-lg-6">	
		<table  class="table-form">
		<tr><td width="20%">Kode Klasifikasi</td><td><b><input type="text" name="kode" id="kode_surat" required value="<?php echo $kode; ?>" style="width: 100px" class="form-control"></b></td></tr>
		<tr><td width="20%">Tanggal Surat</td><td><b><input type="text" name="tgl_surat" required value="<?php echo $tgl_surat; ?>" id="tgl_surat" style="width: 100px" class="form-control"></b></td></tr>	
		<tr><td width="20%">Keterangan</td><td><b><textarea name="ket" required style="width: 400px; height: 90px" class="form-control"><?php echo $ket; ?></textarea></b></td></tr>		
		</table>	
	</div>
<hr>
	</div>
	
	</form>
