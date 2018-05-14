<?php $this->load->view('templates/header');?> 
        

<section class="tm-section">
    <?php if( !empty($categories) ) : ?>
            <div class="container-fluid">
                <a href="<?php echo site_url('kategori/create/'); ?>" class="tm-btn text-uppercase">Tambah Kategori</a>
                <br>
                <br>
                <br>
                
                <div class="row"> 

                    <?php
                       
                        foreach ($categories as $key) :
                    ?>
               
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                        <div class="tm-content-box">
                             <h3 class="tm-margin-b-20 tm-gold-text"> <?php echo $key->cat_name ?></h3>
                                
                                   
                                       
                <a href="<?php echo base_url('kategori/artikel/'.$key->cat_id) ?>" class="btn btn-success">Lihat Artikel</a>    
                                        <br> 
                                        <br>    
                <a href="<?php echo base_url(). 'kategori/edit/' . $key->cat_id ?>" class="btn btn-sm btn-danger">edit</a>
                <!--<a href='blog/edit/<?php echo $key->id ?>' class='btn btn-sm btn-danger'>edit</a> -->
                <a href="<?php echo base_url(). 'kategori/delete/' . $key->cat_id ?>" class="btn btn-sm btn-danger">Hapus</a>

                         </div>
                     </div>    
               <?php endforeach ?> 
                           

                       

                    
                </div> <!-- row -->

            </div>
                    <?php else : ?>
        <p>Belum ada data bosque.</p>
        <?php endif; ?>
        </section>
         
        
<?php $this->load->view('templates/footer');?> 