  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
     
    <link rel="stylesheet" href="<?php echo base_url('a/css?family=Open+Sans:300,400');?>" >  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >                                     <!-- Bootstrap style -->
<link rel="stylesheet" href="<?php echo base_url('a/css/templatemo-style.css');?>">                                 <!-- Templatemo style -->

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
                                <li class="nav-item">
                                    <a href="<?php echo site_url('home/'); ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('about/'); ?>" class="nav-link">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="<?php echo site_url('blog/'); ?>" class="nav-link">Blog</a>
                                </li>
                            </ul>                       
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>


       
        
        

        <section class="tm-section">
            <div class="container-fluid">
                <a href="<?php echo site_url('blog/tambah/'); ?>" class="tm-btn text-uppercase">Tambah Data</a>
                <br>
                <br>
                <br>
                
                <div class="row">
            <?php foreach ($artikel as $key): ?> 
               

            
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                        <div class="tm-content-box">
                             <h3 class="tm-margin-b-20 tm-gold-text"> <?php echo $key->judul ?></h3>
                                <a href="<?php echo base_url(). 'blog/view/'. $key->id ?>"  style="color: black;">
                                    <img src="<?php echo base_url (). 'img/'. $key->image?>" alt="Image" class="tm-margin-b-30 img-fluid"   width="250" height="250">
                                        <br>
                                       <!-- <p class="tm-ma rgin-b-20"><?php echo $key->ctn ?></p> -->
                                        <a href="<?php echo base_url(). 'blog/view/'. $key->id ?>" class="tm-btn text-uppercase">Read More</a>    
                                        <br> 
                                        <br>    
                <a href="<?php echo site_url('blog/Form_Edit/'. $key->id); ?>" class="btn btn-sm btn-danger">edit</a>
                <!--<a href='blog/edit/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>edit</a> -->
                <a href="<?php echo base_url(). 'blog/delete/' . $key->id ?>" class="btn btn-sm btn-danger">Hapus</a>

                         </div>
                     </div>    
               <?php endforeach ?> 
                           

                       

                    
                </div> <!-- row -->

            </div>
        </section>
         
        
        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                    
                    



                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->


                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <center><p class="tm-copyright-text">Copyright 2016 Your Company Name</p></center>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->

        <script src="<?php echo base_url('a/js/jquery-1.11.3.min.js');?>"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="<?php echo base_url('a/js/bootstrap.min.js');?>"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>