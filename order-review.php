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
				<li class="active">
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
					<div data-step="1" data-intro="This is a tooltip!" class="panel-body ">
						<center>
							<h4>Review Pesanan Anda</h4>
							<hr>
							<p>Anda bisa me-review kembali rincian pesanan yang telah anda lakukan. 
							Apabila tidak ada perubahan pilih "Checkout"</p>



	<div class="row">
		<div class="col-lg-4">
							<h3>Address</h3>
							<hr>
							<p class="text-left">Deny Setiawan<br>
							Phone: 085732649156<br>
							Address: Jl. Arif Rahman Hakim No.23 Surabaya</p>
		</div>

		<div class="col-lg-4">
							<h3>Jadwal Pengantaran</h3>
							<hr>
							<p class="text-left">Date: Kamis, 31 Maret 2015<br>
							Time: 10:00am - 12:00pm</p>
		</div>

		<div class="col-lg-4">
							<h3>Jadwal Pengambilan</h3>
							<hr>
							<p class="text-left">Saat itu Juga</p>
		</div>

	</div>

	<div class="row">
		<div class="col-lg-4">
							<h3>Comment</h3>
							<hr>
							<p class="text-left">Anda bisa me-review kembali rincian pesanan yang telah anda lakukan. 
							Apabila tidak ada perubahan pilih "Checkout"</p>
		</div>

		<div class="col-lg-4">
							<h3>Details</h3>
							<hr>
									<div class="col-lg-5 text-left">
Storage box: <br>
item:
									</div>
									<div class="col-lg-2 text-left">
20<br>
-
									</div>
									<div class="col-lg-5 text-left">
Rp 1000000<br>
-
									</div>

									<br><br><h3>Total: Rp 1.000.000,-</h3>
		</div>

		<div class="col-lg-4">
							<h3>Billing</h3>
							<hr>
							<p class="text-left">Payment Method: Bank Trasnfer</p>
		</div>
	</div>
	<!-- end row -->



						<center>
						<a class="btn btn-primary" href="order-completed.php">Checkout</a></center><br>
						atau
						<a href="order-completed.php">Reset Order</a>

						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->

<?php include "template/footer.tpl"; ?>