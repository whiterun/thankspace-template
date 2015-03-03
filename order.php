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
				<li class="active">
					<a><span class="round-tabs one"><i class="glyphicon glyphicon-gift"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs two"><i class="glyphicon glyphicon-time"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs three"><i class="glyphicon glyphicon-user"></i></span></a>
				</li>
				<li>
					<a><span class="round-tabs four"><i class="glyphicon glyphicon-ok"></i></span></a>
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
					<div class="panel-body">
						<center>
							<h2>Berapa banyak storage box yang Anda butuhkan?</h2>
							<p>Biaya sewa 1 storage box hanya IDR 50.000 / bulan</p>
						</center>
						<br><br>
						<form class="form-horizontal">
							<fieldset>
								<div class="form-group">
									<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Jumlah box</label>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
										<select class="form-control" nama="jumlahbox" id="jumlahbox">
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">Saya butuh storage box lebih dari 20</option>
										</select>
									</div>
								</div>
								<div id="many_box" class="form-group" style="display: none;"> 
									<label for="textArea" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Deskripsi</label>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<textarea class="form-control" nama="berapabanyak" placeholder="Berapa banyak yang dibutuhkan?"></textarea>
										<span class="help-block"><i>Sales representative</i> kami akan menghubungi Anda untuk ketersediaan box</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
										Ingin menyimpan sesuatu yang tidak muat dalam box?
									</label>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="morebox" id="id_radio2" value="tidak" checked> Tidak
											</label>
											<label>
												<input type="radio" name="morebox" id="id_radio1" value="ya"> Iya, Tentu saja
											</label>
										</div>
									</div>
								</div>
								<!-- div ya -->
								<div id="Wowdiv" >
								<hr>
									<center>
										<h3>Kami juga menerima "Wow Stuffs" atau barang-barang oversized Anda</h3>
									</center>
									<br><br>
									<div class="form-group">
										<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Jenis barang</label>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
											<select multiple="" nama="wowstuffs" class="form-control" id="wowstuffs">
												<option value="1">Mebel/Furniture IDR 100.000</option>
												<option value="2">Sepeda Motor IDR 150.000</option>
												<option value="3">Patung/pahatan/ukiran seni IDR 200.000</option>
												<option value="4">Lainnya</option>
											</select>
										</div>
									</div>
									<div id="wowstuffsother" class="form-group" style="display: none;"> 
										<label for="textArea" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Barang lainnya</label>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
											<textarea class="form-control" nama="wowstuffslain" placeholder="Sebutkan dengan detail barang lainnya yang ingin Anda simpan"></textarea>
											<span class="help-block"><i>Sales representative</i> kami kan menghubungi Anda untuk mengkonfirmasi biaya</span>
										</div>
									</div>
								</div>
								<!-- div ya -->
								<!-- div tidak -->
								<div id="div2"></div>
							</fieldset>
						</form>
						<center>
							<a class="btn btn-primary" href="order-schedule.php">Lanjutkan</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->
<?php include "template/footer.tpl"; ?>