<!-- header - mulai -->
<?php include "template/header.tpl"; ?> 
	<!-- nav bar - mulai -->
	<?php include "template/navbar-logged-in.tpl"; ?> 

	<!-- modal - mulai -->
	<?php include "template/modal.tpl"; ?> 
	
	<div class="page-header" id="banner">
		<div class="row text-center">
			<h3>Delivery Team, Go Go Go</h3>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-centered">
			<div class="panel panel-default">
				<div class="panel-body">

				<p>Hallo, Wawan!</p>
				<h3>Order yang Anda tangani</h3>


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

							<tr>
								<td>2354</td>
								<td><a href="">Clark Kent</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>5</td>
								<td>Sofa, Meja, Lemari</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>Siap Diantar</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>3217</td>
								<td><a href="">Deny Setiawan</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>8</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>01-05-2015</td>
								<td>Sudah diantar di Warehouse</td>
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
								<td>Sudah dikembalikan</td>
								<td><!--
									<div class="checkbox">
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
											<li><a href="javascript:void(0)">"Sudah sampai Warehouse"</a></li>
											<li><a href="javascript:void(0)">"Sudah dikembalikan"</a></li>
										</ul>
									</div>
								</td>
							</tr>

						</tbody>
					</table>

				<h3>Daftar antrian order yang tersedia</h3>
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
								<th>Type</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2354</td>        
								<td>JNE plus plus</td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>10</td>
								<td>Kulkas</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>Order baru</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>2241</td>
								<td><a href="">JNE plus plus</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>4</td>
								<td>Boks dokumen</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>Order baru</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>2354</td>
								<td><a href="">Clark Kent</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>5</td>
								<td>Sofa, Meja, Lemari</td>
								<td>25-12-2015</td>
								<td>25-12-2015</td>
								<td>Order baru</td>
								<td>
									<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>3217</td>
								<td><a href="">Deny Setiawan</a></td>
								<td>5964441</td>
								<td>Jl. Gembong Sawah n0.6 denpasar surabaya</td>
								<td>8</td>
								<td>0</td>
								<td>01-05-2015</td>
								<td>Saat itu juga</td>
								<td>Order baru</td>
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
								<td>-</td>
								<td>Delivery Back</td>
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
											<li><a href="javascript:void(0)">"Saya tangani order ini"</a></li>
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
<?php include "template/footer.tpl"; ?>