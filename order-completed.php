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
					<div data-step="1" data-intro="This is a tooltip!" class="panel-body ">
						<center>
							<h2 >Thank You!</h2>
							<p>Lorem ipsum</p>
							<h4>A success message!</h4>
							<div class="row">
								<div class="col-sm-2 text-center">
									<p><button class="btn btn-primary sweet-3" onclick="_gaq.push(['example', 'try', 'sweet-3']);">Try It</button></p>
									<p><button class="btn btn-primary" onclick="javascript:introJs().setOption('showProgress', true).start();">Demo css</button></p>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container-->
	<script>
		document.querySelector('.sweet-3').onclick = function codeAddress(){
			swal("Good job!", "You clicked the button!", "success");
		};
		function codeAddress() {
			swal("Good job!", "You clicked the button!", "success");
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