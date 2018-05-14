<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php $this->load->view('templates/header');?> 
<main role="main">

	<section class="jumbotron text-center">
        <h1><center>DataTables</center></h1>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-ajax" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Jenis Kategori</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
	
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>a/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>a/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>a/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function(){

        $('#dt-ajax').DataTable({
            "ajax": "<?php echo base_url() ?>datatables/get_json",
            "columns": [
                { "data": "id" },
                { "data": "judul" },
                { "data": "cat_name" },
                { "data": "image" },
                
                // Kolom Action
                { 
                    "data" : null,
                    "render": function (data) {
                        return '<a href="<?php echo base_url('blog/edit/') ?>'+ data.id + '" class="btn btn-sm btn-outline-primary">Edit</a> <a href="<?php echo base_url('blog/delete/') ?>'+ data.id + '" class="btn btn-sm btn-outline-danger">Delete</a>' 
                    }
                },
            ],
        });
    });

</script>

<?php $this->load->view('templates/footer');?> 
