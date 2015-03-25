<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Reset Password</h3>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-4 col-centered text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-lg-12">

				<form class="form-horizontal">
					<fieldset>
					<span class="error-alert"> <i class="fa fa-meh-o"></i> Password tidak sama.</span>
<p>
<span class="success-alert"> <i class="fa fa-smile-o"></i> Password berhasil di ubah.</span>
						<p>Silahkan masukkan password baru Anda. Password minimal 6 karakter atau lebih.</p>
						<div class="form-group">
							<div class="col-lg-12">
								<div class="input-group margin-bottom-sm">
									<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
									<input class="form-control" placeholder="New Password" type="password" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
									<input class="form-control" id="passwordfield" placeholder="Confirm New Password" type="password" >
								</div>				
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<a class="btn btn-primary" href="customer-items.php"><i class="mdi-action-cached"></i> Change</a>
							</div>
						</div>
					</fieldset>
				</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->

<?php include "template/footer.tpl"; ?>