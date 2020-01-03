
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
				
			  <form action="" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Judul Buku">           
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
						<?php foreach ($kategori as $row) :?>
                                         <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?></option>
                                       <?php endforeach;?>
						
					</select>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
			  </form>
        </div>
      </div>
    </div>
  </body>
</html>