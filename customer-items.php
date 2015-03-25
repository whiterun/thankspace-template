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
					<div class="col-lg-12">
						<table class="table table-striped table-hover ">
							<thead>
								<tr>
									<th></th>
									<th>Box Details</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img class="img-responsive" src="assets/img/box.png"></td>
									<td>        
										<h2>Order #1321</h2>
										<h4>Box 1: Buku 2 Dus<bR>
										Box 2: Lampu Meja
										Item: Kipas Angin</h4>
									</td>
									<td><span class="label label-success">Stored</span></td>
									<td>
										<div class="checkbox">
											<label><input type="checkbox"></label>
										</div>
									</td>
								</tr>
								<tr>
									<td><img class="img-responsive" src="assets/img/box.png"></td>
									<td>        
										<h2>Order #5551</h2>
										<h4>Box 1: Mie Instan 2 Dus<bR>
										Box 2: Lampu <bR>
										Box 3: Buah-buahan<bR>
										Box 4: Sepatu</h4>
									</td>
									<td><span class="label label-success">Stored</span></td>
									<td>
										<div class="checkbox">
											<label><input type="checkbox"></label>
										</div>
									</td>
								</tr>

								<tr>
									<td><img class="img-responsive" src="assets/img/box.png"></td>
									<td>        
										<h2>Order #1347</h2>
										<h4>Box 1: Botol<bR>
										Box 2: Baju <bR>
										Box 3: Barbel<bR>
										Box 4: Obat-obatan</h4>
									</td>
									<td><span class="label label-default">Completed</span></td>
									<td><!--
										<div class="checkbox">
											<label><input type="checkbox"></label>
										</div>-->
									</td>
								</tr>
								<tr>
									<td class="text-right" colspan="4">
										<div class="btn-group">
											<a href="javascript:void(0)" class="btn btn-primary">Action</a>
											<a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0)">"Kirimkan kembali barang Saya"</a></li>
												<!--<li><a href="javascript:void(0)">Ikutkan Storage War (soon)</a></li>-->
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->

<?php include "template/footer.tpl"; ?>