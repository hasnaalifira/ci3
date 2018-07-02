<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Framework</title>





    <!-- load stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('a/css/bootstrap.min.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('a/css/templatemo-style.css');?>">
                                       
    <link rel="stylesheet" href="<?php echo base_url() ?>a/css/custom.css">

        <script src="<?php echo base_url() ?>a/js/jquery-1.9.1.min.js"></script>


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

                                <?php if(!$this->session->userdata('logged_in') || $this->session->userdata('level') != 1) : ?>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('blog/'); ?>" class="nav-link">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('kategori/'); ?>" class="nav-link">Kategori</a>
                                </li>
                                <?php endif; ?>
                               
                             
                <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <?php echo anchor('user/register', 'Register', array('class' => 'nav-link')); ?>
                    </li>
                    <li class="nav-item">
                        <?php echo anchor('user/login', 'Login', array('class' => 'nav-link')); ?>
                    </li>
                    </ul> 
                    </div>

                <?php endif; ?>

        

        <?php if($this->session->userdata('logged_in') && $this->session->userdata('level') == 1) : ?>
            <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <?php echo anchor('Datatables/view_json', 'Datatables', array('class' => 'nav-link')); ?>
                    </li>
                    
                    </ul> 
                    </div>
        <?php endif; ?>  

                <?php if($this->session->userdata('logged_in')) : ?>
                    <li class="nav-item">
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'nav-link')); ?>
                    </li>
                    </ul>
                    </div>
                <?php endif; ?> 

                        </div>
                        
                    </nav> 


        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?> 

                </div>                                  
            </div>            
        </div>