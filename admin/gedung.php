<a href="?page=tambah1" class="btn btn-success btn-lg">Tambah Gedung</a>
		<br/>
		<br/>
		     <div class="panel panel-default">
                        <div class="panel-heading">
                             List Gedung
                        </div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                    <tr>
					<th>No</th>
		            <th><center>Nama Gedung</center></th>
					<th><center>Letak</center></th>    
                    <th><center>Aksi</center></th> 
                    </tr>
                </thead>
                 <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM gedung");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id_gedung'];?></center></td>
              <td><center><?php echo $show['Nama_Gedung'];?></center></td>
              <td><center><?php echo $show['letak'];?></center></td>
             <td><center><?php echo $show['letak'];?></center></td>

             </tr>
             <?php
           }
           ?>
             
			 </div>
			 </div>
			 </div>
			 
			 
  