<?php $this->load->view('templates/header');?> 
   

        <section class="tm-section">
            <div class="container">
        <?php
        echo form_open_multipart('blog/tambah', array('class' => 'needs-validation', 'novalidate' => ''));
       ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
 
                        <section>
                            <h3 class="tm-gold-text tm-form-title">Tambahkan Artikel</h3>
                            
                            <form action="index.html" method="post" class="tm-contact-form">
                                                            
<?php echo validation_errors(); ?>
                    <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                                <div class="form-group">
                                    <input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>" class="form-control" placeholder="Judul" />

                                    
                                </div>


                                <div class="form-group">
                                    <textarea type="text" name="input_content" value="<?php echo set_value('input_content'); ?>" class="form-control" rows="6" placeholder="Content" ></textarea>
                                    
                                </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <?php echo form_dropdown('cat_id', $categories, set_value('cat_id'), 'class="form-control" required' ); ?>
                    </div>

                                <div class="form-group">
                                    <label for="thumbnail">
                                    <input type="file" name="image" value="<?php echo set_value('image'); ?>" class="form-control" placeholder="Choose file"  required/>
                                </div>
                            
                                <button type="submit" name="simpan" value="simpan" class="tm-btn">Submit</button>                          
                            </form>  
                            <br>
                            <br>
                            <a href="<?php echo site_url('blog/'); ?>" class="btn btn-danger">Back</a>  



                        </section>
                    </div>
                </div>
            </div> 


        </section>
                        
<?php $this->load->view('templates/footer');?> 