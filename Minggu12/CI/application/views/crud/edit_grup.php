<div class="row"><div class="col-lg-7">
    <div class="p-5"><div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Grup</h1>
    </div>
            <form class="user" action="<?php echo base_url('index.php/Mahasiswa/updategrup');?>" method="post">
                <?php foreach($grup as $baris){ ?>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $baris->id_grup; ?>">
                    <input type="text" class="form-control form-control-user" id="grup" name="grup" placeholder="Grup Maximal 10 Character" value="<?php echo $baris->grup; ?>" require>
                </div>
                <?php } ?>
                <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
            </form>
        <hr>
    <div class="text-center">
        <a class="small" href="<?php echo base_url('index.php/Mahasiswa/grup')?>">Kembali</a>
    </div>
</div>