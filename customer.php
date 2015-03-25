<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Hai, bagaimana kabar Anda hari ini.</h3>
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
						<h3>Saat ini Anda belum menyimpan sesuatu pada tempat penyimpanan/<i>Warehouse</i> kami.</h3>
						<p>Pesan storage box sesuai dengan kebutuhan Anda</p>
						<p>
							<a class="btn btn-primary" href="order.php">Order Storage Box</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "template/footer.tpl"; ?>