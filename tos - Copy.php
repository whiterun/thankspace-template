<?php include "temp/header.tpl"; ?> 

  </head>
  <body id="home">

<!-- ini nav bar - mulai - navbar-transparent -->
<?php include "temp/navbar2.tpl"; ?> 
<!-- ini nav bar - selesai-->



    <!-- Modal Log In - Mulai -->
  <div class="modal fade text-center  bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Log In</h4>
      </div>
      <div class="modal-body">
              <form class="form-horizontal">
                <fieldset>
                  <a class="btn btn-block btn-social btn-twitter">
                   <i class="fa fa-twitter"></i>
                   Sign in with Twitter
                  </a>
                  <a class="btn btn-block btn-social btn-facebook">
                    <i class="fa fa-facebook"></i>
                    Sign in with Facebook
                  </a>
                  <hr>Log in dengan akun terdaftar<p>

                  <div class="form-group">
                    <div class="col-lg-12">
<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="form-control" type="text" placeholder="Email address">
</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-12">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Ingat saya
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-sign-in"></i> Log In</button>
                    </div>
                  </div>

                </fieldset>
              </form>
      </div>
      <div class="modal-footer">
        Tidak punya akun? <a href="#myModal2" data-toggle="modal" data-dismiss="modal">Daftar</a>
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
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
      </div>
      <div class="modal-body">

              <form class="form-horizontal">
                <fieldset>

                  <div class="form-group">                    
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
                  </div>

                  <hr>Daftar akun baru<p>

       
                  <div class="form-group">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-bottom:5px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
                        <input class="form-control" type="fname" placeholder="Nama Depan">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
                        <input class="form-control" type="lname" placeholder="Nama Belakang">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-bottom:5px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input class="form-control" type="text" placeholder="Alamat Email">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                        <input class="form-control" type="lname" placeholder="No. Telepon">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-bottom:5px;">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Password">
</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" placeholder="Ulangi Password">
</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled checked> Saya telah membaca dan menyetujui <a href="#">Syarat & Ketentuan BagiKasih.com</a>.
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-sign-out"></i>  Daftar</button>
                    </div>
                  </div>

                </fieldset>
              </form>
      </div>
      <div class="modal-footer">
        Sudah mempunyai akun? <a href="#myModal" data-toggle="modal" data-dismiss="modal">Log In</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Sign Up - Selesai -->

      <div class="page-header" id="banner">
        <div class="row">

          </div>
        </div>
      </div>

<div class="container">

<div class="panel panel-default">
  <div class="panel-heading">Syarat dan Ketentuan Penggunaan Thankspace.com</div>
  <div class="panel-body">

<ol>
            <li>
                <h4>Pendahuluan</h4>
                <ol>
                    <li>
                            Terima kasih atas kunjungan Anda ke Website Kami, www.Thankspace.com. Kami berharap agar kunjungan Anda
                            dapat bermanfaat dan memberi kenyamanan dalam mengakses dan menggunakan seluruh Layanan yang tersedia
                            di Website Kami. Kami terus menerus berupaya memperbaiki dan meningkatan mutu pelayanan Kami, dan sangat
                            menghargai segala kritik, saran dan masukan dari Anda; Silakan Anda menyampaikannya ke Kami melalu
                            info@thankspace.com.
                        
                    </li>
                    <li>
                        
                            Website ini dimiliki, dioperasikan dan diselenggarakan oleh PT. Matahari Labs (“Kami” atau Thankspace.com”),
                            perseroan terbatas yang berdiri atas dasar hukum Republik Indonesia, Ijin Tetap Usaha Pariwisata Nomor ____/____
                            tertanggal __ ______ _____; Website dan Layanan Kami tersedia secara online melalui Website: www.thankspace.com
                            atau berbagai akses, media, perangkat dan platform lainnya, baik yang sudah atau akan
                            tersedia dikemudian hari.
                        
                    </li>                    
                </ol>
            </li>
            <li>
                <h4> Umum </h4>
                <ol>
                    <li>
                        
                            Dengan mengakses dan menggunakan Website dan Layanan Kami, Anda menyatakan telah membaca,
                            memahami, menyetujui dan menyatakan tunduk pada Syarat dan Ketentuan Penggunaan Thankspace.com ini. Jika Anda
                            tidak dapat menyetujui Syarat dan Ketentuan Penggunaan Thankspace.com ini, baik secara keseluruhan ataupun sebagian,
                            maka Anda tidak diperbolehkan untuk mengakses Website ini ataupun menggunakan Layanan yang Kami sediakan.
                        
                    </li>
                    <li>
                        
                            Syarat dan Ketentuan Penggunaan Thankspace.com ini terdiri atas (i) syarat dan ketentuan umum yang berlaku
                            untuk setiap akses dan Layanan yang tersedia pada Website, dan (ii) syarat dan ketentuan khusus yang mengatur
                            lebih lanjut ketentuan penggunaan produk atau Layanan tertentu. Dalam hal ditemukan adanya perbedaan atau
                            pertentangan antara syarat dan ketentuan umum dan syarat dan ketentuan khusus, maka yang berlaku adalah syarat
                            dan ketentuan khusus.
                        
                    </li>
                    <li>
                        
                            Syarat dan Ketentuan Penggunaan Thankspace.com dapat Kami ubah, modifikasi, tambah, hapus atau koreksi
                            ("perubahan") setiap saat dan setiap perubahan itu berlaku sejak saat Kami nyatakan berlaku atau pada waktu
                            lain yang ditetapkan oleh Kami; Anda Kami anjurkan untuk mengunjungi Website Kami secara berkala agar dapat
                            mengetahui adanya perubahan tersebut.
                        
                    </li>
                </ol>
            </li>
            <li>
                <h4> Penggunaan </h4>
                <ol>
                    <li>
                        
                            Website ini dan Layanan yang tersedia didalamnya dapat digunakan oleh Anda hanya untuk penggunaan
                            pribadi dan secara non-komersial dan setiap saat tunduk pada dan berlaku syarat dan ketentuan yang saat itu berlaku
                            dalam Syarat dan Ketentuan Penggunaan Thankspace.com.
                        
                    </li>
                    <li>
                        
                            Website ini dan produk-produk, teknologi dan proses yang terdapat atau terkandung dalam Website, dimiliki
                            oleh Kami atau pihak ketiga yang memberi hak kepada Kami. Kecuali untuk penggunaan yang secara tegas diijinkan
                            dan diperbolehkan dalam Syarat dan Ketentuan Penggunaan Thankspace.com ini, Anda tidak memiliki ataupun menerima
                            dan Thankspace.com tidak memberikan hak lain apapun ke Anda atas Website ini, berikut dengan segala data, informasi dan
                            konten didalamnya.
                        
                    </li>
                    <li>
                        
                            Dengan menggunakan Website ini atau Layanan yang tersedia didalamnya, maka Anda menyatakan setuju
                            tidak akan men-download, menayangkan atau mentransmisi dengan cara apa pun, dan atau membuat konten apa
                            pun tersedia untuk umum yang tidak konsisten dengan penggunaan yang diijinkan dalam Syarat dan Ketentuan
                            Penggunaan Thankspace.com ini.
                        
                    </li>
                    <li>
                        
                            Dalam Website ini mungkin terdapat <i>link</i> (tautan) ke website yang dikelola oleh pihak ketiga ("Situs Eksternal").
                            Situs Eksternal disediakan hanya untuk referensi dan kenyamanan saja. Thankspace.com tidak mengoperasikan,
                            mengendalikan atau mendukung dalam bentuk apa pun Situs Eksternal yang bersangkutan ataupun konten/isinya.
                            Anda bertanggung jawab penuh atas penggunaan Situs Eksternal tersebut dan dianjurkan untuk mempelajari syarat
                            dan ketentuan dari Situs Eksternal itu secara seksama.
                        
                    </li>
                    <li>
                            Layanan yang tersedia dalam Website ini secara umum menggunakan sistem <i>re-marketing</i> dan sistem <i>cookies</i> yang 
                            memungkinkan pihak ketiga (termasuk dan tidak terbatas pada Google) mengakses dan menggunakan data kunjungan dalam sistem 
                            <i>Cookies website</i> ini untuk menampilkan dan menayangkan kembali tiap iklan Thankspace.com melalui internet.
                    </li>
                    <li>
                        
                            Anda tidak boleh membuat link, melakukan screen capture atau data crawling ke Website tanpa adanya
                            persetujuan tertulis sebelumnya dari Thankspace.com. Hal-hal tersebut dianggap sebagai pelanggaran hak milik intelektual
                            Thankspace.com.
                        
                    </li>
                </ol>
            </li>
 

  </div>
</div>

</div>

    <div class="container footerbg">
    <?php include "temp/footer2.tpl"; ?>

    </div>


  </body>
</html>
