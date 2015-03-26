<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Settings</h3>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-3">
			<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
				<li><a href="customer.php">Storage Saya</a></li>
				<li><a href="invoice.php">Riwayat Invoice</a></li>
				<li><a href="order.php">Order Storage Box</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="#">Sign Out</a></li>
			</ul>
		</div>
		<div class="col-lg-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-sm-10 col-sm-offset-1 text-center">

<!--mulai-->
				<form class="form-horizontal">
					<fieldset>
					<span class="error-alert"> <i class="fa fa-meh-o"></i> 
Jangan lupa isi nama Anda.</span><br>
<span class="error-alert"> <i class="fa fa-meh-o"></i> 
Format No telepon Anda tidak benar.</span><br>
<span class="error-alert"> <i class="fa fa-meh-o"></i> 
Maaf, alamat email sudah terdaftar di Thankspace.</span><br>
<span class="error-alert"> <i class="fa fa-meh-o"></i> 
Maaf, password yang Anda masukkan tidak sama.<br></span><br>
<span class="success-alert"> <i class="fa fa-smile-o"></i> 
Kami suka sekali nama Anda.</span><br>
<span class="success-alert"> <i class="fa fa-smile-o"></i> 
Email tersedia untuk di daftarkan.</span><br>
<span class="success-alert"> <i class="fa fa-smile-o"></i> 
Jangan sampai lupa dengan Password Anda.</span>
<br><br>
						<p>Lengkapi detail data diri anda untuk mempermudah kami memberikan layanan terbaik untuk Anda.</p>

						<div class="form-group">                    
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input disable class="form-control floating-label" type="fname" disabled="disabled" placeholder="Deny">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input class="form-control floating-label" type="lname" disabled="disabled" placeholder="Setiawan">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
									<input type="email" class="form-control floating-label" disabled="disabled" data-hint="Masukkan email yang valid" placeholder="denydeyn@gmail.com">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
									<input type="number" class="form-control floating-label" data-hint="Masukkan nomor yang valid" placeholder="Nomor telepon">
								</div>
							</div>
						</div>
						<div class="form-group">                    
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
									<input class="form-control floating-label" data-hint="Buat password yang tidak mudah di tebak. Minimal 6 karakter. " type="password" placeholder="Password">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
									<input class="form-control floating-label" data-hint="Ingat password Anda?" type="password" placeholder="Ulangi Password">
								</div>
							</div>
						</div>
						<div class="form-group">                    
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input class="form-control floating-label" data-hint="Masukkan Alamat" type="alamat" placeholder="Alamat">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
										<select class="form-control" nama="jumlahbox" id="jumlahbox">
											<option value="4">Male</option>
											<option value="5">Female</option>
										</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="col-lg-12">
								<a href="customer-items.php">
									<button type="submit" class="btn btn-primary" id="check" ><i class="mdi-social-person-add"></i> Simpan</button>
								</a>
							</div>
						</div>
					</fieldset>
				</form>

<!-- selesai -->


					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "template/footer.tpl"; ?>