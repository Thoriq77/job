<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job House</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet" type="text/css" media="all">
    
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><font color="#009ae4" size="5"><b>JOB</b></font><font color="#fff" size="5">house.com</font></a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?p=home">Home<span class="sr-only"></span></a></li>
                    <!-- Large Dropdown -->
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"></span> Kategori Lowongan<b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Glyphicons</li>
                                    <li><a href="#">Available glyphs</a></li>
                                    <li class="disabled"><a href="#">How to use</a></li>
                                    <li><a href="#">Examples</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdowns</li>
                                    <li><a href="#">Example</a></li>
                                    <li><a href="#">Aligninment options</a></li>
                                    <li><a href="#">Headers</a></li>
                                    <li><a href="#">Disabled menu items</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Button groups</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Button toolbar</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Nesting</a></li>
                                    <li><a href="#">Vertical variation</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Button dropdowns</li>
                                    <li><a href="#">Single button dropdowns</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Input groups</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Checkboxes and radio addons</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Navs</li>
                                    <li><a href="#">Tabs</a></li>
                                    <li><a href="#">Pills</a></li>
                                    <li><a href="#">Justified</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Navbar</li>
                                    <li><a href="#">Default navbar</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Text</a></li>
                                    <li><a href="#">Non-nav links</a></li>
                                    <li><a href="#">Component alignment</a></li>
                                    <li><a href="#">Fixed to top</a></li>
                                    <li><a href="#">Fixed to bottom</a></li>
                                    <li><a href="#">Static top</a></li>
                                    <li><a href="#">Inverted navbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End Large Dropdown -->
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"></span>Bantuan</a></li>
                    <li><a href="index.php?p=daftar_akun"></span>Daftar</a></li>
                   <!--Form Login -->
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign in <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="user_name">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Anda Login Sebagai</label>
                                                <select class="form-control" id="exampleInputPassword2" required name="sts">
                                                    <option>Login Sebagai</option>
                                                    <option>Career Seccer</option>
                                                    <option>Employer</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Remember me
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block" name="login">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Facebook">
                            </li>
                        </ul>
                    </li>
                    <!--End Form Login -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- jumbotron -->
    <div class="jumbotron" style="background-image: url(img/background.jpg)">
        <div class="container">
            <div class="col-md-9">
                <font color="#fff" size="10">Ingin cari lowongan kerja !</font>
                <p><font color="#fff">Atau ingin masang iklan lowongan kerja.</font></p>
                <button type="button" style="width: 240px" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="glyphicon glyphicon-pencil"></span> Buat Lowongan Disini</button>
            </div>
            <div class="col-md-3" align="center">
                <div class="panel panel-default">
                    <img class="img-responsive img-hover" src="image/icon.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End jumbotron -->

    <!-- Page Content -->
    <div class="container">
        <?php
            $konten_dir ="konten";
            if(!empty($_GET["p"])){
                $konten = scandir($konten_dir,0);
                unset($konten[0], $konten[1]);
                        
                $p=$_GET["p"];
                if(in_array($p.'.php',$konten)){
                    include($konten_dir.'/'.$p.'.php');
                }
                else{
                    echo "Halaman Tidak ditemukan coy";
                }
            }
            else{
                include($konten_dir."/home.php");
            }
        ?>
    </div>
    <!-- End Page Content -->

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">

            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright: e-digitalsoft 2014 - 2018
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!--Well toogle-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Pesan Peringatan</h4>
                </div>
                <div class="modal-body">
                    <font color="#000" size="5">Anda tidak bisa buat lowongan</font>
                    <br>
                    <font color="#000" size="2">silahkan login. jika belum mempunyai akun, silahkan daftar terlebih dahulu</font>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" href="index.php?p=daftar_akun"><span class="glyphicon glyphicon-pencil"></span> Daftar disini</a>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>