<?php $this->load->view('templates/header');?> 
   

        <section class="tm-section">
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
 
                        <section>
                            <h3 class="tm-gold-text tm-form-title">Tambahkan Kategori</h3>
                            
                            <form action="index.html" method="post" class="tm-contact-form">
                                                    <?php    
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                    ?>
                    <?php echo validation_errors(); ?>

                    <?php echo form_open( 'kategori/tambah', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                                                            
                                <div class="form-group">
                                    <input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>" class="form-control" placeholder="Nama Kategori" />
                                </div>


                                <div class="form-group">
                                    <textarea type="text" name="cat_description" value="<?php echo set_value('cat_description'); ?>" class="form-control" rows="6" placeholder="Deskripsi" ></textarea>

                                </div>
                            <button type="submit" name="simpan" value="simpan" class="tm-btn">Submit</button>
                                                          
                            </form>  
                            <br>
                            <br>
                            <a href="<?php echo site_url('kategori/'); ?>" class="btn btn-danger">Back</a>  



                        </section>
                    </div>
                </div>
            </div> 


        </section>
                        
<?php $this->load->view('templates/footer');?> 