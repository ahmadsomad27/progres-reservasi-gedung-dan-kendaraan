<a href="?page=tambah1" class="btn btn-success btn-lg">Tambah Kendaraan</a>
            <br/>
            <br/>
                 <div class="panel panel-default">
                        <div class="panel-heading">
                             List Kendaraan
                        </div>
                        <div class="panel-body">        
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                    <tr>
                              <th>Id Kendaraan</th>
                              <th><center>Nama Kendaraan</center></th>
                              <th><center>No Polisi</center></th>    
                              <th><center>Unit</center></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                   $data=mysqli_query($mysqli, "SELECT*FROM kendaraan");
                                // $no = 1;       
                      while($show = mysqli_fetch_array($data)){
                                    ?>
            <tr>
              <td><center><?php echo $show['id_kendaraan'];?></center></td>
              <td><center><?php echo $show['nama_kendaraan'];?></center></td>
              <td><center><?php echo $show['no_pol'];?></center></td>
             <td><center><?php echo $show['unit'];?></center></td>

             </tr>
             <?php
           }
           ?>
             
                   </div>
                   </div>
                   </div>
                   
                   
  