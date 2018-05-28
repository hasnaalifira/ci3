<?php $this->load->view('templates/header');?> 
   

        <section class="tm-section">
            <div class="container">

                    <?php echo form_open('user/login'); ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
 
                        <section>
                            <h3 class="tm-gold-text tm-form-title">Login </h3>
                            
                            <form action="index.html" method="post" class="tm-contact-form">
                                                            
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus/>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required/>
                                </div>
   
                                <button type="submit" name="simpan" value="simpan" class="tm-btn">Login</button>  
                                <?php echo form_close(); ?>                        
                            </form>  
                        </section>
                    </div>
                </div>
            </div> 


        </section>
                        
<?php $this->load->view('templates/footer');?> 