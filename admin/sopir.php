<a href="?page=tambah5" class="btn btn-success btn-lg">Tambah Data Sopir</a>
		<br/>
		<br/>
		     <div class="panel panel-default">
                        <div class="panel-heading">
                             List Sopir
                        </div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                    <tr>
					<th>No</th>
		            <th><center>Nama Sopir</center></th>
					<th><center>Kategori</center></th>    
                    <th><center>Aksi</center></th>
                    </tr>
                </thead>
                 <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM sopir");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id_sopir'];?></center></td>
              <td><center><?php echo $show['nama_sopir'];?></center></td>
              <td><center><?php echo $show['kategori'];?></center></td>
             <td><center><?php echo $show['kategori'];?></center></td>

             </tr>
             <?php
           }
           ?>
             
			 </div>
			 </div>
			 </div>
			 
			 
  