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
					<h3>Summary</h3>
					<h4>A success message!</h4>
					<div class="row">
						<div class="col-sm-2 text-center">
							<p><button class="btn btn-primary sweet-3" onclick="_gaq.push(['example', 'try', 'sweet-3']);">Try It</button></p>
						</div>
					</div>
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
					<h3>Riwayat Order Terbaru</h3>
					<table class="table table-striped table-hover ">
						<thead>
							<tr>
								<th>Order Number</th>
								<th>Customer</th>
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
								<td><a href="">Dapoer Coklat</a></td>
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
								<td>2241</td>
								<td><a href="">JNE plus plus</a></td>
								<td>4</td>
								<td>Boks dokumen</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>650000</td>
								<td><span class="label label-info">Complete Payment</span> </td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="success">
								<td>2354</td>
								<td><a href="">Clark Kent</a></td>
								<td>5</td>
								<td>Sofa, Meja, Lemari</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>452000</td>
								<td><span class="label label-success">Stored</span></td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="warning">
								<td>3217</td>
								<td><a href="">Deny Setiawan</a></td>
								<td>8</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-warning">Di ambil Sebagian</span> </td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>4412</td>
								<td><a href="">Akbar</a></td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-default">Diambil semua (Completed)</span> </td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>4412</td>
								<td><a href="">Akbar</a></td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-default">Diambil semua (Completed)</span> </td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>4412</td>
								<td><a href="">Akbar</a></td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>250000</td>
								<td><span class="label label-default">Diambil semua (Completed)</span> </td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-right" colspan="9">
									<div class="btn-group">
										<a href="javascript:void(0)" class="btn btn-primary">Action</a>
										<a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0)">Confirm payment</a></li>
											<li><a href="javascript:void(0)">Store to warehouse</a></li>
											<li><a href="javascript:void(0)">Diambil sebagian</a></li>
											<li><a href="javascript:void(0)">Diambil semua</a></li>
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
	<script>
		document.querySelector('.sweet-3').onclick = function codeAddress(){
			swal("Good job!", "You clicked the button!", "success");
		};
	</script>
<?php include "template/footer.tpl"; ?>