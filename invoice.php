<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Riwayat Invoice</h3>
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
					<div class="text-center">

					<h3>Riwayat Order Terbaru</h3>
					<p><span class="success-alert"> <i class="fa fa-smile-o"></i> 
Konfirmasi pembayaran sudah dilakukan. Tim Customer Service kami akan melakukan proses verifikasi dan akan memberikan informasi terbaru kepada Anda. </span></p>
					<table class="table table-striped table-hover ">
						<thead>
							<tr>
								<th>Invoice Number</th>
								<th>Box Yang dibutuhkan</th>
								<th>Barang Lain</th>
								<th>Jadwal Box Diantar</th>
								<th>Jadwal Box Diambil</th>
								<th>Biaya</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr class="danger">
								<td>2354</td>
								<td>10</td>
								<td>Kulkas</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>650000</td>
								<td><span class="label label-danger">Pending Payment</span></td>
								<td>
									<div class="checkbox">
									<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="info">
								<td>2354</td>
								<td>5</td>
								<td>Sofa, Meja, Lemari</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>452000</td>
								<td><span class="label label-info">Menunggu Konfirmasi</span></td>
								<td>
									<!--<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>-->
								</td>
							</tr>
							<tr class="success">
								<td>3217</td>
								<td>8</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-success">Completed Payment</span> </td>
								<td>
									<!--<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>-->
								</td>
							</tr>
							<tr class="success">
								<td>4412</td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-success">Completed Payment</span> </td>
								<td>
									<!--<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>-->
								</td>
							</tr>
							<tr class="success">
								<td>4412</td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-success">Completed Payment</span> </td>
								<td>
									<!--<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>-->
								</td>
							</tr>
							<tr class="success">
								<td>4412</td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-success">Completed Payment</span> </td>
								<td>
									<!--<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>-->
								</td>
							</tr>
							<tr>
								<td class="text-right" colspan="9">
									<div class="btn-group">
										<a href="javascript:void(0)" class="btn btn-primary">Action</a>
										<a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0)">Konfirmasi pembayaran</a></li>
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

<?php include "template/footer.tpl"; ?>