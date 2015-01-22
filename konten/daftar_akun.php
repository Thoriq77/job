<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<!-- Judul -->
        	<div class="col-lg-12">
            	<h1 class="page-header"><font color="#009ae4">Daftar</font> <small>isi biodata anda dengan lengkap</small></h1>
        	</div>
        	<!-- End Judul -->

        	<!-- Tabs -->
        	<div class="col-lg-12">
                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Pencari Kerja / Career Seeker</a></li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Pemberi Kerja / Employer</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <!--Pencari Kerja-->
                    <div class="tab-pane fade active in" id="service-one">
                    	<br>
                    	<div class="col-md-6">

                        <form method="post" action="daftar_akun.php">
    						          <div class="form-group">
      							         <label for="usr">Nama Depan:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      								          <input type="text" class="form-control" style="width: 500px" id="nama_depan" name="nama_depan" >
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="usr">Nama Belakang:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      								          <input type="text" class="form-control" style="width: 500px" id="nama_belakang" name="nama_belakang">
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="usr">Jenis Kelamin:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
      								          <select class="form-control" style="width: 500px" name="jenis_kelamin">
										              <option>-- Pilih --</option>
										              <option value="laki">Laki - Laki</option>
										              <option value="perempuan">Perempuan</option>
									               </select>
								            </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="pwd">Alamat Email:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      								          <input type="text" class="form-control" style="width: 500px" id="email" name="email">
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="pwd">Masukkan Kembali Alamat Email:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      								          <input type="text" class="form-control" style="width: 500px" id="email" name="email">
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="usr">Masukkan Password:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      								          <input type="password" class="form-control" style="width: 500px" id="password" name="password">
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="usr">Masukkan Kembali Password:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      								          <input type="password" class="form-control" style="width: 500px" id="usr">
      							         </div>
    						          </div>
    						          <div class="form-group">
      							         <label for="usr">Nomor Telepon / Hp:</label>
      							         <div class="input-group">
      								          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      								          <input type="text" class="form-control" style="width: 500px" id="telepon" name="telepon">
      							         </div>
    						          </div>
                           <br><br>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="daftar" name="daftar"><span class="glyphicon glyphicon-save"></span> Daftar</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                          </div>
                          <hr>
  						          </form>
                        <?php
                            include "koneksi.php";

                            if(isset($_POST['simpan'])){
                              $nama_depan =$_POST['nama_depan'];
                              $nama_belakang=$_POST['nama_belakang'];
                              $jenis_kelamin=$_POST['jenis_kelamin'];
                              $alamat_email=$_POST['email'];
                              $password=$_POST['password'];
                              $telepon=$_POST['telepon'];

                              mysql_query("INSERT INTO user_career (id_career, nm_depan_career, nm_belakang_career, jenis_kelamin_career, email_career, pass_career, status_career, no_hp) VALUES ('','".$nama_depan."','".$nama_belakang."','".$jenis_kelamin."','".$alamat_email."','".$password."','career','".$telepon."')");
                              echo '<br>';
                              echo "Data Berhasil Disimpan";
                            }
                          ?>

  						        </div>
  						        <br>

  						        <div class="col-md-6">
                			   <img class="img-responsive" src="img/pencari-kerja.jpg" width="700" height="450" alt="">

                         <h2 class="page-header">Modern Business Features</h2>
                          <p>The Modern Business template by Start Bootstrap includes:</p>
                          <ul>
                            <li><strong>Bootstrap v3.2.0</strong></li>
                            <li>jQuery v1.11.0</li>
                            <li>Font Awesome v4.1.0</li>
                            <li>Working PHP contact form with validation</li>
                            <li>Unstyled page elements for easy customization</li>
                            <li>17 HTML pages</li>
                          </ul>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            			    </div>
                    </div>
                    <!--End Pencari Kerja-->

                    <!--Pemberi Kerja-->
                    <div class="tab-pane fade" id="service-two">
                      <div class="col-md-6">
                        <br>
                        <img class="img-responsive" src="img/employer.jpg" width="700" height="450" alt="">

                        <h2 class="page-header">Modern Business Features</h2>
                        <p>The Modern Business template by Start Bootstrap includes:</p>
                        <ul>
                          <li><strong>Bootstrap v3.2.0</strong></li>
                          <li>jQuery v1.11.0</li>
                          <li>Font Awesome v4.1.0</li>
                          <li>Working PHP contact form with validation</li>
                          <li>Unstyled page elements for easy customization</li>
                          <li>17 HTML pages</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>

                      </div>

                      <div class="col-md-6 ">
                        <form role="form" method="post" action="daftar_akun.php">
                          <br>
                          <div class="form-group">
                             <label for="usr">Nama Lengkap:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="usr">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Nama Panggilan:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="usr">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Jenis Kelamin:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select class="form-control" style="width: 510px">
                                  <option>-- Pilih --</option>
                                  <option>Laki - Laki</option>
                                  <option>Perempuan</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                             <label for="pwd">Alamat Email:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="pwd">Masukkan Kembali Alamat Email:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Masukkan Password:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" style="width: 510px" id="usr">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Masukkan Kembali Password:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" style="width: 510px" id="usr">
                             </div>
                          </div>
                          <hr>
                          <br><br>
                          <div class="form-group">
                             <label for="usr">Nama Perusahaan:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                            <label for="usr">Deskripsi Perusahaan:</label>
                            <textarea class="form-control" rows="5" style="width: 550px" id="comment"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="usr">Bergerak Dibidang:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                              <select class="form-control" style="width: 510px">
                                <option>-- Pilih --</option>
                                <option>Tehnik Informatika</option>
                                <option>Las karbit</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="usr">Alamat Perusahaan:</label>
                            <textarea class="form-control" rows="5" style="width: 550px" id="comment"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="usr">Lokasi:</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                              <select class="form-control" style="width: 510px">
                                <option>-- Pilih --</option>
                                <option>Jawa Tengah</option>
                                <option>Jawa Barat</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Kode Pos:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">Nomor Telepon / Hp:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <hr>
                          <br><br>
                          <div class="form-group">
                             <label for="usr">No NPWP:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="usr">No NPPKP:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>
                          <div class="form-group">
                            <label for="usr">Alamat NPWP:</label>
                            <textarea class="form-control" rows="5" style="width: 550px" id="comment"></textarea>
                          </div>
                          <div class="form-group">
                             <label for="usr">Kode Pos:</label>
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" style="width: 510px" id="txt">
                             </div>
                          </div>

                          <br><br>
                          <div class="form-group">
                            <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"><span class="glyphicon glyphicon-save"></span> Daftar</button>
                            <script>
                              $('#myButton').on('click', function () {
                                var $btn = $(this).button('loading')
                                // business logic...
                                $btn.button('reset')
                              })
                            </script>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat"></span> Reset Form</button>
                          </div>

                          <hr>
                        </form>
                      </div>
                        
                    </div>
                    <!--End Pemberi Kerja-->
                </div>
            </div>
            <!-- End Tabs -->
    	</div>

      <br><br><br>
      <!--Well-->
      <div class="well">
        <div class="row">
          <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#exampleModal_pesan" data-whatever="@mdo"><span class="glyphicon glyphicon-envelope"></span> Hubungi JOBhouse</button>
          </div>
        </div>
      </div>
      <!--End Well-->
      <!--Well toogle-->
      <div class="modal fade" id="exampleModal_pesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="control-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send message</button>
            </div>
          </div>
        </div>
      </div>
      <!--End Well toogle-->
      <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
      </script>

    </div>
</body>
</html>

