<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Delivery Queue </h3>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-centered">
			<div class="panel panel-default">
				<div class="panel-body">
				<h3>Order yang perlu dikirim</h3>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Order Number</th>
								<th>Customer</th>
								<th>Phone</th>
								<th>Alamat</th>
								<th>Box Yang dibutuhkan</th>
								<th>Barang Lain</th>
								<th>Jadwal Box Diantar</th>
								<th>Jadwal Box Diambil</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr class="danger">
								<td>2354</td>        
								<td>JNE plus plus</td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>10</td>
								<td>Kulkas</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td><b>Scheduled for delivery</b><br>Delivery man: -</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="info">
								<td>2241</td>
								<td><a href="">JNE plus plus</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>4</td>
								<td>Boks dokumen</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td><b>On Thankspace vehicle ready for delivery</b><br>Delivery man: Wawan</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="success">
								<td>2354</td>
								<td><a href="">Clark Kent</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>5</td>
								<td>Sofa, Meja, Lemari</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>Delivered<br>Delivery man: Wawan</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="warning">
								<td>3217</td>
								<td><a href="">Deny Setiawan</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>8</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>Picked up<br>Delivery man: Wawan</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>4412</td>
								<td><a href="">Akbar</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>12</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>Arrived at Thankspace warehouse location<br>Delivery man: Wawan</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div> 
	</div>
<?php include "template/footer.tpl"; ?>