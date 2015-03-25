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
					<h3>Daftar Member Terdaftar</h3>
					<table class="table table-striped table-hover ">
						<thead>
							<tr>
								<th>Number</th>
								<th>Nama Depan</th>
								<th>Nama Belakang</th>
								<th>Email</th>
								<th>No. Telepon</th>
								<th>Alamat</th>
								<th>Gender</th>
								<th>Type</th>
								<th>Order</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Antoni</td>
								<td>Putra</td>
								<td>antoni@gmail.com</td>
								<td>08572364664</td>
								<td>Jl. Panggung</td>
								<td>Male</td>
								<td>Customer</td>
								<td>2</td>
								<td>
									<div class="checkbox">
									<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Antoni</td>
								<td>Putra</td>
								<td>antoni@gmail.com</td>
								<td>08572364664</td>
								<td>Jl. Panggung</td>
								<td>Male</td>
								<td>Customer</td>
								<td>5</td>
								<td>
								<div class="checkbox">
										<label><input type="checkbox"></label>
									</div>
								</td>
							</tr>
							<tr class="success">
								<td>3</td>
								<td>Sam</td>
								<td>Samuel</td>
								<td>Samuel@gmail.com</td>
								<td>08572364664</td>
								<td>Jl. Embong Sawah</td>
								<td>Male</td>
								<td>Delivery Team</td>
								<td>1</td>
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
											<li><a href="javascript:void(0)">Edit Detail</a></li>
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