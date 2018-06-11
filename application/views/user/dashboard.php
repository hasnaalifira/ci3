<?php $this->load->view('templates/header');?> 

<section class="tm-section">
   <div class="container">
   <div class="tm-gold-text tm-form-title">
       <center><h2>Selamat datang <?php echo $user->nama ?></h2></center>
   </div>
       <br>  
       <center><h1><div class="tm-gold-text tm-form-title"><?php echo $user->nama_level ?></div></h1></center>
</div>
</section>

<?php $this->load->view('templates/footer');?> 