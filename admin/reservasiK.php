<a href="?page=tambah4" class="btn btn-success btn-lg">Tambah Reservasi Kendaraan</a>
		<br/>
		<br/>
		     <div class="panel panel-default">
                        <div class="panel-heading">
                             List Reservasi Gedung
                        </div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                    <tr>
					          <th>No</th>
		                <th><center>Tanggal Reservasi</center></th>
					          <th><center>Tanggal Selesai</center></th>    
                    <th><center>Jam Penjemputan</center></th>
                    <th><center>Tempat Penjemputan</center></th>
                    <th><center>Kegiatan</center></th>
					          <th><center>Tujuan</center></th>    
                    <th><center>Kendaraan</center></th>
                    <th><center>Nama User</center></th>  
                    <th><center>Sopir</center></th>
                    <th><center>Klasifikasi</center></th>
                    <th><center>No. Telepon</center></th>   <th><center>Disposisi</center></th>
                    <th><center>Persetujuan</center></th>
                    </tr>
                </thead>
                 <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM reservasi_kendaraan");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id_reservasikendaraan'];?></center></td>
              <td><center><?php echo $show['tgl_mulai'];?></center></td>
              <td><center><?php echo $show['tgl_selesai'];?></center></td>
              <td><center><?php echo $show['jam_penjemputan'];?></center></td>
              <td><center><?php echo $show['tempat_penjemputan'];?></center></td>
              <td><center><?php echo $show['kegiatan'];?></center></td>
              <td><center><?php echo $show['tujuan'];?></center></td>
              <td><center><?php echo $show['id_kendaraan'];?></center></td>
              <td><center><?php echo $show['id_user'];?></center></td>
              <td><center><?php echo $show['id_sopir'];?></center></td>
              <td><center><?php echo $show['klasifikasi'];?></center></td>
              <td><center><?php echo $show['telp'];?></center></td>
              <td><center><?php echo $show['disposisi'];?></center></td>
              <td><center><?php echo $show['persetujuan'];?></center></td>


             </tr>
             <?php
           }
           ?>
             
			 </div>
			 </div>
			 </div>
			 
			 
  