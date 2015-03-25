<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?>  

	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Administration Panel</h3>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-centered">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3>Admin Menu</h3>
					<p><a href="add-member.php">Add New Customer/Delivery Team</a> - <a href="customer-list.php">Member List </a></p>

					<div class="col-lg-12">
						<div class="col-lg-3 text-center">
							<h2>1523 Box</h2>
							<p>Total storage box telah tersimpan di <i>Warehouse</i></p>
						</div>
						<div class="col-lg-3 text-center">
							<h2>125 Item</h2>
							<p>Total barang oversized telah tersimpan <i>Warehouse</i></p>
						</div>
						<div class="col-lg-3 text-center">   
							<h2>IDR 540.500.000</h2>
							<p>Total transaksi yang terjadi di ThankSpace</p>         
						</div>
						<div class="col-lg-3 text-center">
							<h2>250 Customer</h2>
							<p>Total <i>customer</i> terdaftar di ThankSpace</p>
						</div>
					</div>
					<div class="col-lg-12">
						<hr>
					</div>
					<h3>Tambahkan Member</h3>

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
						<p>Isi data keanggotaan baru dengan cermat.</p>

						<div class="form-group">                    
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input class="form-control floating-label" data-hint="Masukkan nama asli Anda" type="fname" placeholder="Nama Depan">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input class="form-control floating-label" type="lname" placeholder="Nama Belakang">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
									<input type="email" class="form-control floating-label" data-hint="Masukkan email yang valid" placeholder="Email">
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
							<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
									<input class="form-control floating-label" data-hint="Masukkan Alamat" type="alamat" placeholder="Alamat">
								</div>
							</div>-->
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
										<select class="form-control" nama="jumlahbox" id="jumlahbox">
											<option value="4">Customer</option>
											<option value="5">Delivery Team</option>
										</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<a href="customer-items.php">
									<button type="submit" class="btn btn-primary" id="check" ><i class="mdi-social-person-add"></i> Tambahkan</button>
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
	<script>
		document.querySelector('.sweet-3').onclick = function codeAddress(){
			swal("Good job!", "You clicked the button!", "success");
		};
	</script>
<?php include "template/footer.tpl"; ?>