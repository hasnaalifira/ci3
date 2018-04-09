<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->



    <!-- load stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" ><!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >                                     <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/templatemo-style.css');?>">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    
                    <a href="#" class="navbar-brand tm-site-name"><img src="<?php echo site_url('a/img/logo.png'); ?>" width="60px" height="60px"></a>

                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="<?php echo site_url('home/'); ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('about/'); ?>" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('blog/'); ?>" class="nav-link">Blog</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>

        <div class="tm-home-img-container">
            <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div> 

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Nama saya Hasna Alifira saya kuliah di Politeknik Negeri Malang di jurusan Teknologi Informasi prodi D3 Manajemen Informatika . </p>
                    </div>
                </div>
           

            </div>
        </section>
        
        <footer class="tm-footer">
            <div class="container-fluid">
              <div class="row">

                 </div>   

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                      <p>

                            </p>
                        <center><p class="tm-copyright-text">Copyright 2016 Your Company Name</p></center>
                    </div>
                </div>

            </div>
        </footer>


        <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >
        <!-- load JS files -->
        <script src="<?php echo base_url('a/js/jquery-1.11.3.min.js');?>"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="<?php echo base_url('a/js/bootstrap.min.js');?>"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>