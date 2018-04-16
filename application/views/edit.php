<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Data</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >                                     <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/templatemo-style.css');?>">                               <!-- Templatemo style -->

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
                                <li class="nav-item ">
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
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">

                       <?php if ($update_data){
                        $a = $update_data->id;
                        $judul = $update_data->judul;
                        $content = $update_data->content;
                        $image = $update_data->image;

                    }else{
                        $judul = "";
                        $content = "";
                        $image = "";
                }
                ?> 


                        <section>
                            <h3 class="tm-gold-text tm-form-title">Edit Data</h3>
                            
                            <form action="<?php echo site_url('blog/update/'.$a) ?>" method="POST" class="tm-contact-form">
                                                            

                                <div class="form-group">
                                    <input type="text" name="judul" value="<?php echo $judul ?>" class="form-control" placeholder="Judul"  required/>
                                    
                                </div>


                                <div class="form-group">
                                    <textarea type="text" name="content"  class="form-control" rows="6" placeholder="Content" required><?php echo $content ?></textarea>
                                    
                                </div>

                                <div class="form-group">
                                    <input type="file" name="image" value="<?php echo $image ?>" class="form-control" placeholder="Choose file"  required/>
                                </div>
                            
                                <button type="submit" name="simpan" value="simpan" class="tm-btn">Submit</button>                          
                            </form>  
                            <br>
                            <br>
                            <a href="<?php echo site_url('blog/'); ?>" class="tm-btn btn-danger">Back</a>   
                        </section>
                    </div>
                </div>
            </div> 











        </section>
                        
                      
                 

        
                </footer>


        <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >
        <!-- load JS files -->
        <script src="<?php echo base_url('a/js/jquery-1.11.3.min.js');?>"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="<?php echo base_url('a/js/bootstrap.min.js');?>"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>