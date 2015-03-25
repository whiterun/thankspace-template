<!-- header - mulai -->
<?php include "template/header.tpl"; ?>
	<!-- nav bar - mulai -->
	<?php include "template/navbar.tpl"; ?>

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?>

	<div class="board">
		<div class="board-inner">
			<ul class="nav nav-tabs" style="background:#fff;" id="myTab">
			<div class="liner"></div>
				<li>
					<a><span class="round-tabs one"><i class="glyphicon glyphicon-gift"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs two"><i class="glyphicon glyphicon-time"></i></span></a>
				</li>
				<li class="active">
					<a><span class="round-tabs three"><i class="glyphicon glyphicon-user"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs four"><i class="glyphicon glyphicon-eye-open"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs five"><i class="glyphicon glyphicon-ok"></i></span></a>
				</li>
			</ul>
		</div>
	</div>
	<!-- start container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-centered">
				<div class="panel panel-default">
					<div class="panel-body ">
						<center>
							<h4>Silakan masukkan detail diri Anda</h4><hr>
						</center>
						<br><br>
						<form class="form-horizontal">
							<fieldset>
								<div class="form-group">
									<label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Sudah terdaftar?</label>
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="memberstatus" id="id_radio2" value="lama" checked /> Ya, Saya customer lama 
											</label>
											<label>
												<input type="radio" name="memberstatus" id="id_radio1" value="baru" /> Belum, saya ingin mendaftar 
											</label>
										</div>
									</div>
								</div>
								<!-- div belum -->
								<div id="Wowdiv" >
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Nama Lengkap</label>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
											<input class="form-control floating-label" data-hint="Masukkan nama asli Anda" type="fname" placeholder="Nama Depan">
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding-bottom:20px;">
											<input class="form-control floating-label" type="lname" placeholder="Nama Belakang">
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding-bottom:20px;">
											<input type="email" class="form-control" data-hint="Masukkan email yang valid">
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">No. Telepon</label>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding-bottom:20px;">
											<input type="number" class="form-control" data-hint="Masukkan nomor yang valid">  
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Alamat Anda</label>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding-bottom:20px;">
											<input class="form-control" type="address" data-hint="Alamat diperlukan untuk pengiriman">
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Password</label>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
											<input class="form-control floating-label" data-hint="Buat password yang tidak mudah di tebak. Minimal 6 karakter. " type="password" placeholder="Password">
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding-bottom:20px;">
											<input class="form-control floating-label" data-hint="Ingat password Anda?" type="password" placeholder="Ulangi Password">
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label"></label>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
											<div class="checkbox">
												<label> 
													<input type="checkbox" checked="" /> Saya telah membaca dan menyetujui <a href="terms-and-conditions.php" target="_blank">Syarat & Ketentuan Thankspace</a>.
												</label>
											</div>       
										</div>
									</div>
								</div>
								<!-- div belum -->
								<!-- div ya -->
								<div id="div2">
									<div class="form-group">
										<label for="select" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Login </label>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
											<input type="email" class="form-control floating-label" placeholder="Email">        
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding-bottom:20px;">
											<input class="form-control floating-label" type="password" placeholder="Password">
										</div>
									</div>
								</div>
								<!-- div ya -->
								<hr>
								<center>
									<h3>Pilih Cara Pembayaran</h3>
								</center>
								<br><br>
								<div class="form-group">
									<label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Metode Pembayaran?</label>
									<div class="col-lg-9 col-md-9col-sm-9 col-xs-9">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="payment" id="payment1" value="banktransfer" checked /> Bank Transfer
											</label>
										</div>   
									</div>
								</div>
								<div class="form-group"> 
									<label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Pesan Tambahan</label>
									<div class="col-lg-9 col-md-9col-sm-9 col-xs-9">
										<textarea class="form-control" name="komentar" placeholder="Optional"></textarea>
									</div>
								</div>
							</fieldset>
						</form>
						<center><a class="btn btn-primary" href="order-review.php">Lanjutkan</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->
<?php include "template/footer.tpl"; ?>