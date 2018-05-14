<?php $this->load->view('templates/header');?> 

        <section class="tm-section">
            <div class="container-fluid">
            
                
               
 <?php foreach ($view as $key): ?>
        <div class="container">
            <table>
                <tr class="text-center">
                    <td>
                        <center><h1><b><?php echo $key->judul; ?></b></h1></center>
                        </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <center><img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400"></center>

                    </td>
                </tr>
                <tr>
                    <td class="text-justify">
                        <?php echo $key->content; ?>
                    </td>
                </tr>

            </table>
        </div>
        <?php endforeach ?>
              <br>  
        <a href="<?php echo site_url('blog/'); ?>" class="tm-btn text-uppercase">Back</a>   


            </div>
        </section>
        
<?php $this->load->view('templates/footer');?> 