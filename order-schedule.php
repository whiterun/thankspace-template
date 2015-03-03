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
				<li class="active">
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
							<h2>Kapan kami mengantarkan storage box Anda?</h2>
							<p>Jadwalkan tanggal pengiriman storage box sesuai dengan waktu Anda</p>
						</center>
						<br><br>
						<form class="form-horizontal">
							<fieldset>
								<div class="form-group">
									<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Tanggal pengiriman</label>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
										<select class="form-control" name="deliveryday" id="deliveryday">
											<? for ($x = 1; $x < 32; $x++): ?>
											<option value="<?= $x ?>" <?= (date('j') == $x ? 'selected' : '' ) ?>><?= $x ?></option>
											<? endfor; ?>
										</select>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<select class="form-control" name="deliverymonth" id="deliverymonth">
											<? for ($x = 1; $x < 13; $x++): ?>
											<option value="<?= $x ?>" <?= (date('n') == $x ? 'selected' : '' ) ?>><?= date('F', mktime(0, 0, 0, $x, 1, date('Y'))) ?></option>
											<? endfor; ?>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
										<select class="form-control" name="deliveryyear" id="deliveryyear">
											<? for ($x = date('Y'); $x < date('Y') + 2; $x++): ?>
											<option value="<?= $x ?>" <?= (date('Y') == $x ? 'selected' : '' ) ?>><?= $x ?></option>
											<? endfor; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Waktu pengiriman</label>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
										<select class="form-control" name="deliverytime" id="deliverytime">
											<option value="0810">08:00am - 10:00am</option>
											<option value="1012" selected="selected">10:00am - 12:00pm</option>
											<option value="1202">12:00pm - 02:00pm</option>
											<option value="0204">02:00pm - 04:00pm</option>
											<option value="0406">04:00pm - 06:00pm</option>
										</select> 
									</div>
									<span class="help-block"><i>Thankspace office hours:</i> mon-fri, 08:00am - 06:00pm</span>
								</div>
								<hr>
								<center>
									<h3>Kapan kami mengambil kembali storage box?</h3>
									<p>Jadwalkan tanggal pengambilan storage box sesuai dengan waktu Anda</p>
								</center>
								<br><br>
								<div class="form-group">
									<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Jadwal Pengambilan?</label>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="collect" id="id_radio2" value="immediately" checked /> Ambil saat itu juga 
											</label>
											<span class="help-block"><i>Driver</i> kami akan menunggu hingga 20 menit saat Anda mengepak barang Anda.</span>
										</div>                
										<div class="radio radio-primary">
											<label>
												<input type="radio" name="collect" id="id_radio1" value="later">Ambil di kemudian hari
											</label>
										</div>
									</div>
								</div>
								<!-- div ya -->
								<div id="Wowdiv" >
									<div class="form-group">
										<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Tanggal Pengambilan</label>

										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
											<select class="form-control" name="pickupday">
												<? for ($x = 1; $x < 32; $x++): ?>
												<option value="<?= $x ?>" <?= (date('j') == $x ? 'selected' : '' ) ?>><?= $x ?></option>
												<? endfor; ?>
											</select>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<select class="form-control" name="pickupmonth" id="pickupmonth">
												<? for ($x = 1; $x < 13; $x++): ?>
												<option value="<?= $x ?>" <?= (date('n') == $x ? 'selected' : '' ) ?>><?= date('F', mktime(0, 0, 0, $x, 1, date('Y'))) ?></option>
												<? endfor; ?>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
											<select class="form-control" name="pickupyear" id="pickupyear">
												<? for ($x = date('Y'); $x < date('Y') + 2; $x++): ?>
												<option value="<?= $x ?>" <?= (date('Y') == $x ? 'selected' : '' ) ?>><?= $x ?></option>
												<? endfor; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Waktu Pengambilan</label>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
											<select class="form-control" name="pickuptime" id="pickuptime">
												<option value="0810" selected="selected">08:00am - 10:00am</option>
												<option value="1012">10:00am - 12:00pm</option>
												<option value="1202">12:00pm - 02:00pm</option>
												<option value="0204">02:00pm - 04:00pm</option>
												<option value="0406">04:00pm - 06:00pm</option>
											</select> 
										</div>
										<span class="help-block"><i>Thankspace office hours:</i> mon-fri, 08:00am - 06:00pm</span>
									</div>
								</div>
								<!-- div ya -->
							  <!-- div tidak -->
							  <div id="div2"></div>
							</fieldset>
						</form>
						<center><a class="btn btn-primary" href="order-profile.php">Lanjutkan</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->
<?php include "template/footer.tpl"; ?>