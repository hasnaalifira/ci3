<?php $this->load->view('templates/header');?> 

        <section class="tm-section">
            <div class="container-fluid">

<?php if( !empty($artikel) ) : ?>
                <a href="<?php echo site_url('blog/tambah/'); ?>" class="tm-btn text-uppercase">Tambah Artikel</a>
                <br>
                <br>
                <br>
                
                <div class="row">
                    <?php
                        foreach ($artikel as $key) :
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                        <div class="tm-content-box">
                             <h3 class="tm-margin-b-20 tm-gold-text"><?php echo ($key->judul) ?></h3>
                                
                                    
                    <?php if( $key->image ) : ?>
                            <img src="<?php echo base_url() .'img/'. $key->image ?>" alt="Image" class="tm-margin-b-30 img-fluid"   width="250" height="250">

                    <?php ; else : ?>
                            <img class="card-img-top" data-src="holder.js/100px190?theme=thumb&bg=eaeaea&fg=aaa&text=Thumbnail" alt="Card image cap">
                            <?php endif; ?>
                                   

                                        <br>
                            <small class="text-success text-uppercase"><?php echo $key->cat_name ?></small>
                            <br>
                                       
                <a href="<?php echo base_url(). 'blog/view/'. $key->id ?>" class="tm-btn text-uppercase">Read More</a>    
                                        <br> 
                                        <br>    
                <a href="<?php echo base_url('blog/edit/'. $key->id); ?>" class="btn btn-sm btn-danger">edit</a>
                <a href="<?php echo base_url(). 'blog/delete/' . $key->id ?>" class="btn btn-sm btn-danger">Hapus</a>

                         </div>
                     </div>    
               <?php endforeach; ?> 
    
                </div> <!-- row -->

        <?php else : ?>
        <p>Belum ada data bosque.</p>
        <?php endif; ?>
                <center><?php 
        if (isset($links)) {
            echo $links;
        } 
        ?> </center>
            </div>
              
        </section>
         
        
<?php $this->load->view('templates/footer');?> 