<a href="?page=tambah3" class="btn btn-success btn-lg">Tambah Reservasi Gedung</a>
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
					          <th><center>Acara</center></th>    
                    <th><center>Waktu Mulai</center></th>
                    <th><center>Waktu Selesai</center></th>
                    <th><center>Gedung</center></th>
					          <th><center>Nama User</center></th>    
                    <th><center>Klasifikasi</center></th>
                    <th><center>No. Telp</center></th>  
                    <th><center>Disposisi</center></th>
                    <th><center>Persetujuan</center></th>
                    </tr>
                </thead>
                 <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM reservasi");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id_reservasi'];?></center></td>
              <td><center><?php echo $show['tanggal'];?></center></td>
              <td><center><?php echo $show['acara'];?></center></td>
              <td><center><?php echo $show['waktu_mulai'];?></center></td>
             <td><center><?php echo $show['waktu_selesai'];?></center></td>
             <td><center><?php echo $show['id_gedung'];?></center></td>
             <td><center><?php echo $show['id_penyewa'];?></center></td>
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
			 
			 
  