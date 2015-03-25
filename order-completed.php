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
				<li>
					<a><span class="round-tabs three"><i class="glyphicon glyphicon-user"></i></span></a>
				</li>
				<li >
					<a><span class="round-tabs four"><i class="glyphicon glyphicon-eye-open"></i></span></a>
				</li>
				<li class="active">
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
					<div data-step="1" data-intro="This is a tooltip!" class="panel-body ">
						<center>
							<h4>Terima Kasih!</h4>
							<hr>
							<p>Terima kasih sudah melakukan pemesanan untuk penyimpanan Storage Box atau Barang 
							Oversized Anda.<br><br>Langkah selanjutnya adalah melakukan pembayaran sesuai dengan metode pembayaran yang
							telah Anda pilih. Masuk ke Akun Anda - Lihat Invoice.</p>
							<div class="row">


						<center><a class="btn btn-primary" href="invoice.php">Lihat Invoice</a></center>

							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->
	<script>

		function codeAddress() {

			swal({
  title: "Thanks!",
  text: "Terima kasih sudah menggunakan layanan ThankSpace.",
  imageUrl: 'assets/img/order-completed.png'
});

		}
		window.onload = codeAddress;
	</script>
<?php include "template/footer.tpl"; ?>
<!--
New Member ALert
Sign In Alert
Forgot Password Alert
Order Success ALert
Send Back Alert
-->