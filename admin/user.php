<a href="?page=tambah" class="btn btn-success btn-lg">Tambah User</a>
		<br/>
		<br/>
		     <div class="panel panel-default">
                        <div class="panel-heading">
                             List User
                        </div>
                        <div class="panel-body">        
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
					<th>No</th>
		            <th>Nama</th>
					<th><center>Jurusan</center></th>    
					<th><center>Username</center></th>
                    <th><center>Password</center></th>   
                    <th><center>Email</center></th>    
					<th><center>Level</center></th>
                    <th><center>Aksi</center></th> 
                    </tr>
                </thead>
                 <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM user");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id'];?></center></td>
              <td><center><?php echo $show['nama'];?></center></td>
              <td><center><?php echo $show['jurusan'];?></center></td>
             <td><center><?php echo $show['username'];?></center></td>
             <td><center><?php echo $show['password'];?></center></td>
             <td><center><?php echo $show['email'];?></center></td>
             <td><center><?php echo $show['telepon'];?></center></td>
             <td><center><?php echo $show['level'];?></center></td>

             </tr>
             <?php
           }
           ?>
             
			 </div>
			 </div>
			 </div>
			 
			 
  
