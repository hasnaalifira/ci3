<?php $this->load->view('templates/header');?> 
   

        <section class="tm-section">
            <div class="container">
        <?php
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                    ?>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
 
                        <section>
                            <h3 class="tm-gold-text tm-form-title">Pendaftaran User</h3>
                            
                            <form action="index.html" method="post" class="tm-contact-form">
                                                            
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat"/>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password2" class="form-control" placeholder="Komfirmasi Password"/>
                                </div>

                            
                                <button type="submit" name="simpan" value="simpan" class="tm-btn">Daftar</button>  
                                <?php echo form_close(); ?>                        
                            </form>  
                        </section>
                    </div>
                </div>
            </div> 


        </section>
                        
<?php $this->load->view('templates/footer');?> 