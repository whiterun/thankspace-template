<?php include "template/header.tpl"; ?> 

  </head>
  <body id="home">

<!-- ini nav bar - mulai - navbar-transparent -->
<?php include "template/navbarorder.tpl"; ?> 
<!-- ini nav bar - selesai-->


<?php include "template/modal.tpl"; ?> 
<!--
      <div class="page-header" id="banner">
        <div class="row text-center">
<h3>Aturan Penyimpanan</h3>
        </div>
      </div>-->

<div class="container">


  <div class="panel-body">


	<section>

                <div class="board">
                    <div class="board-inner">
                    <ul class="nav nav-tabs" style="background:#fff;"id="myTab">
                    <div class="liner"></div>
					
                    <li class="active">
                    <a href="#boxthankspace" data-toggle="tab" title="box">
                    <span class="round-tabs one">
                    <i class="glyphicon glyphicon-gift"></i>
                    </span> 
					</a>
					</li>

					<li>
					<a href="#timethankspace" data-toggle="tab" title="time">
                    <span class="round-tabs two">
                    <i class="glyphicon glyphicon-time"></i>
                    </span> 
					</a>					
					</li>
					
					<li>
					<a href="#profilethankspace" data-toggle="tab" title="profile">
                    <span class="round-tabs three">
                    <i class="glyphicon glyphicon-user"></i>
                    </span>
					</a>
                    </li>

                    <li>
					<a href="#completethankspace" data-toggle="tab" title="completed">
                     <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
					 
<!-- tab  1 -->
					 
                      <div class="tab-pane fade in active" id="boxthankspace">
			<center>
            <h2>Berapa banyak storage box yang Anda butuhkan?</h2>
            <p>Biaya sewa 1 storage box hanya IDR 50.000 / bulan
            <!--, dengan rencana untuk ekspansi menuju kota-kota besar lain seperti Jakarta & Singapura.-->
            </p>
			</center>

<form class="form-horizontal">
    <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Checkbox
                    </label>
                </div>
                <br>
                <div class="togglebutton">
                    <label>
                        <input type="checkbox" checked=""> Toggle button
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputFile" class="col-lg-2 control-label">File</label>
            <div class="col-lg-10">
                <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                <input type="file" id="inputFile" multiple="">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Radios</label>
            <div class="col-lg-10">
                <div class="radio radio-primary">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        Option one is this
                    </label>
                </div>
                <div class="radio radio-primary">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Selects</label>
            <div class="col-lg-10">
                <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <br>
                <select multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

                          </p>
                          
                <p class="text-center">
				
                <a href="order-2.php">
				<button type="submit" class="btn btn-primary btn-lg"><i class="mdi-action-shopping-cart"></i> Order</button>
				</a>
					
                </p>
                      </div>
					  
<!-- tab  1 end -->

<!-- tab  2 -->
                      <div class="tab-pane fade" id="timethankspace">

            <h1>Lokasi</h1>
            <p class="lead">Thankspace saat ini melayani on-demand Storage area kota Surabaya &amp; Denpasar.
            <!--, dengan rencana untuk ekspansi menuju kota-kota besar lain seperti Jakarta & Singapura.-->
            </p>
<form class="form-horizontal">
    <fieldset>


<div class="contaicner">

                
                

                <h2 class="h1 mb">Please enter your details</h2>

                <div class="containerf text-left">

                    
                    <div class="form-group">
                        <label for="fullName">Full name</label>
                        <input type="text" id="fullName" name="fullName" value="" class="form-control" placeholder="Required">                                            </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" value="" class="form-control" placeholder="Required">                                            </div>
                    <div class="relative">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="" class="form-control" placeholder="Required" autocomplete="off">                                            </div>
                    <div class="checkbox">
                        <input type="checkbox" id="subscribeNewsletter" name="subscribeNewsletter" placeholder="Subscribe to our newsletter">                        <label for="subscribeNewsletter">
                            <span class="checkbox-label glyphicon"></span>
                            Subscribe to our newsletter                        </label>
                    </div>

                    <hr>

                    
                    <div id="fieldsNewAddress" style="display:block">

                        <div class="checkbox">
                            <input type="checkbox" id="isBusiness" name="isBusiness" placeholder="Are you a business?">                            <label for="isBusiness" data-toggle="collapse" data-target="#businessHolder">
                                <span class="checkbox-label glyphicon"></span>
                                Are you a business?                            </label>
                        </div>
                        <div id="businessHolder" class="layout form-group collapse">
                            <div class="layout__item lap-and-up-1/2">
                                <div class="form-group">
                                    <label for="companyName">Company name</label>
                                    <input type="text" id="companyName" name="companyName" value="" class="form-control" placeholder="e.g. SpaceWays">                                                                    </div>
                            </div><!--
                        --><div class="layout__item lap-and-up-1/2">
                                <div class="form-group">
                                    <label for="vatId">VAT number</label>
                                    <input type="text" id="vatId" name="vatId" value="" class="form-control" placeholder="Optional">                                                                    </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address_1">Address line 1 - house number &amp; street name</label>
                            <input type="text" id="address_1" name="address_1" value="" class="form-control" placeholder="Required">                                                    </div>
                        <div class="form-group">
                            <label for="address_2">Address line 2 - apartment name, number &amp; floor</label>
                            <input type="text" id="address_2" name="address_2" value="" class="form-control" placeholder="Optional">                                                    </div>
                        <div class="form-group">
                            <label for="address_3">Address line 3 - delivery instructions</label>
                            <input type="text" id="address_3" name="address_3" value="" class="form-control" placeholder="Optional">                                                    </div>

                        <div class="layout">
                            <div class="layout__item lap-and-up-1/2">
                                <div class="form-group">
                                    <label for="cityName">City</label>
                                    <input type="text" id="cityName" name="cityName" value="Chicago" class="form-control" placeholder="Required" readonly="readonly" disabled="disabled">                                                                    </div>
                            </div><!--
                            --><div class="layout__item lap-and-up-1/2">
                                <div class="form-group">
                                    <label for="zipCode">Zip code</label>
                                    <input type="text" id="zipCode" name="zipCode" value="60675" class="form-control" placeholder="Required">                                                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Required">                                            </div>

                </div>
            
            </div>


<div class="container">

                <h2 class="h2">When should we drop off your empty boxes?</h2>

                <div class="container container-narrow pt- text-left">

                    <div class="layout">
                        <div class="layout__item lap-and-up-1/2">
                            <div class="form-group has-feedback">
                                <label for="dateDay" class="control-label">Delivery date</label>
                                <div class="select-control">
                                <select id="dateDay" name="dateDay" class="form-control">
	<option selected="selected" value="">Choose a day</option>
	<option value="1421733600">20.01.2015 - Tue</option>
	<option value="1421820000">21.01.2015 - Wed</option>
	<option value="1421906400">22.01.2015 - Thu</option>
	<option value="1421992800">23.01.2015 - Fri</option>
	<option value="1422252000">26.01.2015 - Mon</option>
	<option value="1422338400">27.01.2015 - Tue</option>
	<option value="1422424800">28.01.2015 - Wed</option>
	<option value="1422511200">29.01.2015 - Thu</option>
	<option value="1422597600">30.01.2015 - Fri</option>
	<option value="1422856800">02.02.2015 - Mon</option>
</select>                                                                </div>
                            </div>
                        </div><!--
                        --><div class="layout__item lap-and-up-1/2">
                            <div class="form-group has-feedback">
                                <label for="dateTime" class="control-label">Delivery time</label>
                                <div class="select-control">
                                <select id="dateTime" name="dateTime" class="form-control">
	<option selected="selected" value="">Choose a time</option>
</select>                                                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deliveryRequirements">Special requirements</label>
                        <input type="text" id="deliveryRequirements" name="deliveryRequirements" value="" class="form-control" placeholder="Optional">                    </div>
                    <div class="checkbox" id="doormanContainer" style="display:block">
                        <input type="checkbox" id="hasDoorman" name="hasDoorman" placeholder="You can leave my empty boxes with my %strong%doorman%/strong%, if I'm not there.">                        <label for="hasDoorman">
                            <span class="checkbox-label glyphicon"></span>
                            You can leave my empty boxes with my <strong>doorman</strong>, if I'm not there.                        </label>
                    </div>
                    <div class="checkbox" id="leaveAtNeighbourContainer">
                        <input type="checkbox" id="leaveAtNeighbour" name="leaveAtNeighbour" placeholder="You can leave my empty boxes with my %strong%neighbour%/strong%, if I'm not there.">                        <label for="leaveAtNeighbour">
                            <span class="checkbox-label glyphicon"></span>
                            You can leave my empty boxes with my <strong>neighbour</strong>, if I'm not there.                        </label>
                    </div>
                </div>
            </div>


<div class="container">

                <h2>When should we collect your boxes &amp; bulky items?</h2>

                <div class="container container-narrow pt- text-left">

                    <div id="pickupWrapper">
                        <div class="radio">
                            <input id="collectNo" name="pickupToken" type="radio" value="LTR" checked="">
                            <label for="collectNo">
                                <span class="radio-label glyphicon"></span>
                                <strong class="text-large">Collect later</strong><br>
                                <span class="pickupInfoText" style="display: inline;">Please come by and collect my packed items free of charge on:</span>
                            </label>
                        </div>
                        <div id="pickupTimeContainer" style="display: block;">
                            <div class="layout">
                                <div class="layout__item lap-and-up-1/2">
                                    <div class="form-group has-feedback">
                                        <label for="pickupDateDay" class="control-label">Collection date</label>
                                        <div class="select-control">
                                        <select id="pickupDateDay" name="pickupDateDay" class="form-control black">
	<option selected="selected" value="">Choose a day</option>
	<option value="1421733600">20.01.2015 - Tue</option>
	<option value="1421820000">21.01.2015 - Wed</option>
	<option value="1421906400">22.01.2015 - Thu</option>
	<option value="1421992800">23.01.2015 - Fri</option>
	<option value="1422252000">26.01.2015 - Mon</option>
	<option value="1422338400">27.01.2015 - Tue</option>
	<option value="1422424800">28.01.2015 - Wed</option>
	<option value="1422511200">29.01.2015 - Thu</option>
	<option value="1422597600">30.01.2015 - Fri</option>
	<option value="1422856800">02.02.2015 - Mon</option>
</select>                                                                                </div>
                                    </div>
                                </div><!--
                                --><div class="layout__item lap-and-up-1/2">
                                    <div class="form-group has-feedback">
                                        <label for="pickupDateTime" class="control-label">Collection time</label>
                                        <div class="select-control">
                                        <select id="pickupDateTime" name="pickupDateTime" class="form-control"><option value="0800:1000">08:00am - 10:00am </option><option value="1000:1200">10:00am - 12:00pm </option><option value="1200:1400">12:00pm - 02:00pm </option><option value="1400:1600">02:00pm - 04:00pm </option><option value="1600:1800">04:00pm - 06:00pm </option><option value="1800:2000">06:00pm - 08:00pm </option></select>                                                                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pickupRequirements">Special requirements</label>
                                <input type="text" id="pickupRequirements" name="pickupRequirements" value="" class="form-control" placeholder="Optional">                            </div>
                        </div>

                        <div class="radio">
                            <input id="collectYes" name="pickupToken" type="radio" value="RWY">
                            <label for="collectYes">
                                <span class="radio-label glyphicon"></span>
                                <strong class="text-large">Collect immediately</strong><br>
                                Our drivers will wait up to 20 mins while you pack your boxes.                            </label>
                        </div>
                    </div>
                </div>
            </div>



    </fieldset>
</form>





                          
                      </div>
					  
					  
<!-- tab  2 end -->
<!-- tab  3 -->
                      <div class="tab-pane fade" id="profilethankspace">
                          <h3 class="head text-center">Bootsnipp goodies</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                </p>
                      </div>


<!-- tab  3 end-->
<!-- tab  4 -->
                      <div class="tab-pane fade" id="completethankspace">
  <div class="text-center">
    <i class="img-intro icon-checkmark-circle"></i>
</div>
<h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">?</span> Bootstrap</h3>
<p class="narrow text-center">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>


<!-- tab  4 end-->

<div class="clearfix"></div>
</div>

</div>

</section>

</div>

</div>

    <div class="container ">
    <?php include "template/footer.tpl"; ?>

    </div>


  </body>
</html>
