<!-- Modal Log In - Mulai -->
  <div class="modal fade text-center  bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Selamat Datang Kembali!</h4><hr>
      </div>
      <div class="modal-body">
              <form class="form-horizontal">
                <fieldset>

                  Silahkan Sign In dengan akun Anda<p>

                  <div class="form-group">
                    <div class="col-lg-12">
<div class="input-group margin-bottom-sm">
    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
    <input type="email" class="form-control " placeholder="Email">
</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control " id="passwordfield" type="password" placeholder="Password">
</div>				
                    </div>
                  </div>

                  <div class="form-group">

                    <div class="col-lg-12">

                      <a class="btn btn-primary" style="width:100%;" href="customer-items.php"><i class="fa fa-sign-in"></i> Sign In</a>

                      <!--<a href="customer-items.php"><button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-sign-in"></i> Sign In</button></a>-->
                    </div>
                  </div>

                </fieldset>
              </form>
      </div>
      <div class="modal-footer">
        Lupa password? klik <a href="#myModal3" data-toggle="modal" data-dismiss="modal">di sini</a><br>
        Customer baru? Hooree, Sign Up <a href="#myModal2" data-toggle="modal" data-dismiss="modal">di sini</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal Log In - Selesai -->


<!-- Modal Sign Up - Mulai -->
<div class="modal fade text-center  " id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Pendaftaran Customer</h4><hr>
      </div>
      <div class="modal-body">

              <form class="form-horizontal">
                <fieldset>

                  <!--<div class="form-group">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:5px;">
                      <a class="btn btn-block btn-social btn-twitter">
                      <i class="fa fa-twitter"></i>
                      Sign Up with Twitter
                      </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <a class="btn btn-block btn-social btn-facebook">
                      <i class="fa fa-facebook"></i>
                      Sign Up with Facebook
                      </a>
                    </div>
                  </div>-->

                  Isi data Anda untuk pendaftaran <p>

       
                  <div class="form-group">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
                        <input class="form-control floating-label" data-hint="Masukkan nama asli Anda" type="fname" placeholder="Nama Depan">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
                        <input class="form-control floating-label" type="lname" placeholder="Nama Belakang">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
<input type="email" class="form-control floating-label" data-hint="Masukkan email yang valid" placeholder="Email">        

                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                        <input type="number" class="form-control floating-label" data-hint="Masukkan nomor yang valid" placeholder="Nomor telepon">  
                      </div>
                    </div>
                  </div>

                  <div class="form-group">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control floating-label" data-hint="Buat password yang tidak mudah di tebak. Minimal 6 karakter. " type="password" placeholder="Password">
</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control floating-label" data-hint="Ingat password Anda?" type="password" placeholder="Ulangi Password">
</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
                      <div class="checkbox">
                        <label>	
                          <input type="checkbox" onchange="document.getElementById('check').disabled = !this.checked;" /> Saya telah membaca dan menyetujui <a href="terms-and-conditions.php" target="_blank">Syarat & Ketentuan Thankspace</a>.
                        </label>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
                      <a href="customer-items.php"><button type="submit" class="btn btn-primary" id="check" disabled><i class="mdi-social-person-add"></i> Sign Up</button></a>
                    </div>
                  </div>

                </fieldset>
              </form>
      </div>
      <div class="modal-footer">
        Sudah mempunyai akun? <a href="#myModal" data-toggle="modal" data-dismiss="modal">Sign In</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Sign Up - Selesai -->

<!-- Modal Forgot Password  - Mulai -->
  <div class="modal fade text-center" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Lupa Password</h4><hr>
      </div>
      <div class="modal-body">
              <form class="form-horizontal">
                <fieldset>

                  Apakah password Anda kombinasi huruf dan angka? nama sebuah kota? <br>atau nama mantan?<br><br>Jangan khawatir, tim peramal kami akan masuk ke ingatan terdalam Anda dan mengembalikan Password ke email yang terdaftar di Thankspace<p>

                  <div class="form-group">
                    <div class="col-lg-12">
<div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input type="email" class="form-control " placeholder="Email">
</div>
                    </div>
                  </div>

                  <div class="form-group">

                    <div class="col-lg-12">
                      <button type="submit" class="btn btn-primary"><i class="mdi-notification-sync"></i> Abracadabra</button>
                    </div>
                  </div>

                </fieldset>
              </form>
      </div>
      <div class="modal-footer">
        Sudah ingat password Anda? coba <a href="#myModal" data-toggle="modal" data-dismiss="modal">Sign In</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal Forgot Password - Selesai -->