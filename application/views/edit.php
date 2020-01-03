
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form PHP</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
    			<br />
                <h2>Form tambah buku</h2>
				
				<?php echo form_open_multipart('welcome/update/'.$edits['id']); ?>
				  <div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Judul Buku"><?php echo ($this->input->post('judul') ? $this->input->post('judul') : $edits['judul']); ?>           
				  </div>
				  <div class="form-group">           
					<input type="text" name="authors" class="form-control" placeholder="Nama Pengarang">
				  </div>     
				  <div class="form-group">           
					<input type="date" name="th_terbit" class="form-control" placeholder="Th Terbit">
				  </div>    
                  <div class="form-group">           
					<input type="file" name="image" accept="image/*" class="form-control" placeholder="Th Terbit">
				  </div>  
				  <div class="form-group">           
					<select class="form-control" name="cats">
						<option>-- Pilih Kategori --</option>
						<?php foreach($kategori as $cats){ ?>
							<option value="<?php echo $cats['nama_kategori'] ?>"></option>
						<?php }?>
						
					</select>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </body>
</html>