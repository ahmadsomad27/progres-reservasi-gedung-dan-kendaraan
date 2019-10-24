<h3>Tambah Reservasi Gedung</h3>
		<br/>
		<br/>
		     <div class="panel panel-default">
                        <div class="panel-heading">
                             Pengaturan
                        </div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                    <tr>   
					<th>No</th>
		            <th><center>Nama Situs</center></th>
					<th><center>Nama Header</center></th>    
                    <th><center>Fitur Gedung</center></th>
                    <th><center>Fitur Kendaraan</center></th>
                    <th><center>Nama Header Admin dan User</center></th>
                    <th><center>Gambar Logo</center></th>
                    <th><center>Aksi</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   include "koneksi.php";
				      
				   $tampil=mysql_query("select * from kategori ORDER BY nama_kategori");
					  $no = 1;	  
                      while($k=mysql_fetch_array($tampil)){
						
                      echo "<tr>";
                      echo "<td>$no</td>";						
					  echo "<td>$k[nama_kategori]</td>";
					  echo "<td><center>$k[aktif]</center></td>";
					  echo "<td><center><a class='btn btn-success' href='?page=aksi&matkul=form-edit&id=$k[id_kategori]'><i class='fa fa-edit'>Edit</i></a>  
					            <a class='btn btn-danger' href='?page=aksi&matkul=hapus&id=$k[id_kategori]'><i class='fa fa-pencil'>Delete</i></a></center></td>";
					  echo "</tr>";
                      $no++;
                    }  

   
echo "</tbody></table> ";            
                    ?>
             
			 </div>
			 </div>
			 </div>
			 
			 
  