<?php include "template/header.tpl"; ?> 

  </head>
  <body id="home">

<!-- nav bar - mulai -->
<?php include "template/navbar-logged-in.tpl"; ?> 

<!-- modal - mulai -->
<?php include "template/modal.tpl"; ?>  

      <div class="page-header" id="banner">
        <div class="row text-center">
<h3>My Storage Boxes</h3>
        </div>
      </div>

<div class="container">


            <div class="col-lg-3">

  <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
    <li><a href="javascript:void(0)">Storage Keren Saya</a></li>
    <li><a href="javascript:void(0)">Order Storage Box</a></li>
    <li><a href="javascript:void(0)">Settings</a></li>
    <li><a href="javascript:void(0)">Sign Out</a></li>
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
            <td>
              <img class="img-responsive" src="assets/img/box.png">
            </td>
            <td>        
              <h2>Box #1</h2>
              <h4>Buku 2 Dus, Lampu Meja, Kipas Angin</h4>    
            </td>
            <td><span class="label label-success">Stored</span></td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox">
              </label>
              </div>
            </td>
        </tr>

        <tr>
            <td>
              <img class="img-responsive" src="assets/img/box.png">
            </td>
            <td>        
              <h2>Box #2</h2>
              <h4>2 Bola Basket</h4>    
            </td>
            <td><span class="label label-success">Stored</span></td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox">
              </label>
              </div>
            </td>
        </tr>

        <tr>
            <td>
              <img class="img-responsive" src="assets/img/item.jpg">
            </td>
            <td>        
              <h2>Item #1</h2>
              <h4>Patung Kuda Antik</h4>    
            </td>
            <td><span class="label label-success">Stored</span></td>
            <td>
              <div class="checkbox">
              <label><input type="checkbox">
              </label>
              </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
<div class="btn-group">
    <a href="javascript:void(0)" class="btn btn-primary">Action</a>
    <a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="javascript:void(0)">Kirimkan kembali ke Saya</a></li>
        <li><a href="javascript:void(0)">Ikutkan Storage War (soon)</a></li>
    </ul>
</div>
            </td>
            <td></td>
            <td></td>
        </tr>

    </tbody>
</table>

                      </div>




                </div>
              </div>
          </div> 

</div>
<!-- end container -->

<!-- start container-->
<div class="container">

<div class="row">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-centered">

<div class="panel panel-default">


    <div class="panel-body ">
                        
      <center>
            <h2>Kapan kami mengirimkan kembali storage box Anda?</h2>
            <p>Jadwalkan tanggal pengiriman storage box sesuai dengan waktu Anda</p>
      </center>
<br><br>
<form class="form-horizontal">
    <fieldset>

        <div class="form-group">
            <label for="select" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">Tanggal pengiriman</label>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
<?php 
// using the current time for the sake of the example, your timestamp would take the place of this
$timestamp = time();

// determine the selected month, day, and year
$selected_month = date('n', $timestamp);
$selected_day = date('j', $timestamp);
$selected_year = date('Y', $timestamp);



// create the day drop-down
$day_html = '<select class="form-control" name="deliveryday" id="deliveryday">';
for ($x = 1; $x < 32; $x++) {
    $day_html .= '<option value='.$x.($selected_day == $x ? ' selected=true' : '' ).'>'.$x.'</option>';
}   
$day_html .= '</select></div>';
// output
print $day_html;

           

 // now, create the drop-down for months
$month_html = '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><select class="form-control" name="deliverymonth" id="deliverymonth">';
for ($x = 1; $x < 13; $x++) {
    $month_html .= '<option value='.$x.($selected_month == $x ? ' selected=true' : '' ).'>'.date("F", mktime(0, 0, 0, $x, 1, $selected_year)).'</option>';
}
$month_html .= '</select></div>';
// output
print $month_html;            

             
// create the year drop-down
$year_html = '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "><select class="form-control" name="deliveryyear" id="deliveryyear">';
$start_year = date('Y', time());
$max_year = $start_year + 2;
for ($x = $start_year; $x < $max_year; $x++) {
    $year_html .= '<option value='.$x.($selected_year == $x ? ' selected=true' : '' ).'>'.$x.'</option>';
}   
$year_html .= '</select>';
// output
print $year_html;

?>

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


  </body>
</html>
