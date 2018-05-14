<?php $this->load->view('templates/header');?> 

   

        <section class="tm-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">


                        <section>
                            <h3 class="tm-gold-text tm-form-title">Edit Artikel</h3>

            <?php echo validation_errors(); ?>
            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

            <?php echo form_open_multipart(current_url(), array('class' => 'needs-validation', 'novalidate' => '')); ?>

                            <form  method="POST" class="tm-contact-form">
                                                            

                                <div class="form-group">
                                    <input type="text" name="input_judul" value="<?php echo set_value('input_judul', $artikel->judul) ?>" class="form-control" placeholder="Judul"  />
                                    
                                </div>


                                <div class="form-group">
                                    <textarea type="text" name="input_content"  class="form-control" rows="6" placeholder="Content" ><?php echo set_value('input_content', $artikel->content) ?></textarea>
                                    
                                </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <?php echo form_dropdown('cat_id', $categories, set_value( 'cat_id', $artikel->jenis_cat ), 'class="form-control"' ); ?>
                    </div>

                                <div class="form-group">
                        <?php if( $artikel->image ) : ?>
                        <img class="card-img-top" src="<?php echo base_url() .'img/'. $artikel->image ?>" alt="Card image cap" width=300>
                        <?php endif; ?>

                                    <input type="file" name="image" class="form-control" placeholder="Choose file" />
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