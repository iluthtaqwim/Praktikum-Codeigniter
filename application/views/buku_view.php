<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Data Buku</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
          
          <br />
          <h2>My Library</h2>
          <p>Arif Laksito - 190302150</p>
          <a href="<?php echo site_url("welcome/add")?>" class="btn btn-primary">Tambah Buku</a>
          <br /><br />

          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun terbit</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th></th>
				<th></th>
              </tr>
            </thead>
            <tbody>
			  <?php $no = 1 ?>
              <?php foreach($buku as $b): ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $b['judul']?></td>
					<td><?php echo $b['pengarang']?></td>
					<td><?php echo $b['th_terbit']?></td>
                    <td><img src="<?php echo $b['image']?>"/></td>
					<td><?php echo $b['nama_kategori']?></td>
					<td>
						<a href="<?php echo site_url('welcome/update/'.$b['id'])?>"
						class="btn btn-success btn-sm">edit</a>
					</td>
					
					<td>
						<a href="<?php echo site_url('welcome/del/'.$b['id']) ?>" class="btn btn-danger btn-sm"
						onclick="javascript: return confirm('Anda yakin hapus ?')">delete</a>
					</td>
				</tr>
			  <?php endforeach;?>
                
            </tbody>
          </table>
		  
		  <img src="stats.php" />

        </div>
      </div>
    </div>
  </body>
</html>