<?php
    session_start();
?>

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

    <!-- Link Upload file -->
    <link href="upload/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="upload/jquery.min.js"></script>
    <script src="upload/fileinput.js" type="text/javascript"></script>
    
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
                    <li><a href="index_employer.php?q=home_employer">Home</a></li>
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
                    <!-- Dropdown Message -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pesan <span class="badge">0</span><span class="caret"></span></a>
                        <ul class="dropdown-menu scrollable-menu" role="menu">

                            <li><a href="#">
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong></h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                </div>    
                            </a></li>
                            <li><a href="#">
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong></h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                </div>    
                            </a></li>
                            <li><a href="#">
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong></h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                </div>    
                            </a></li>
                            <li><a href="#">
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong></h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                </div>    
                            </a></li>

                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Lihat semua pesan</a></li>
                        </ul>
                    </li>
                    <!-- End Dropdown Message -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Name<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index_employer.php?q=profile_employer">Profile</a></li>
                            <li><a href="#">Daftar Lowongan</a></li>
                            <li><a href="#">Tambah Lowongan</a></li>
                            <li><a href="#">Invite</a></li>
                            <li><a href="#">JH Widget</a></li>
                            <li><a href="#">Pengaturan Admin</a></li>
                            <li><a href="#">Daftar Notifikasi</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- jumbotron -->
    <div class="jumbotron" style="background-image: url(img/background.jpg)">
        <div class="container">
            <div class="col-md-9">
                <font color="#fff" size="10">Halaman Utama Employer</font>
                <p><font color="#fff">Anda sudah bisa memasang lowongan disini</font></p>
                <a class="btn btn-lg btn-primary" href="index_employer.php?q=buat_lowongan_employer"><span class="glyphicon glyphicon-pencil"></span> Buat Lowongan Disini</a>
            </div>
            <div class="col-md-3" align="right">
                <div class="panel panel-default">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End jumbotron -->

    <!-- Page Content -->
    <div class="container">
        <?php
            $konten_dir ="konten";
            if(!empty($_GET["q"])){
                $konten = scandir($konten_dir,0);
                unset($konten[0], $konten[1]);
                        
                $p=$_GET["q"];
                if(in_array($p.'.php',$konten)){
                    include($konten_dir.'/'.$p.'.php');
                }
                else{
                    echo "Halaman Tidak ditemukan coy";
                }
            }
            else{
                include($konten_dir."/home_employer.php");
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>