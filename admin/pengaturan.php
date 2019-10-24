<div class="col-md-6">
    <h3>Pengaturan</h3>
        <form enctype="multipart/form-data" action="?page=upload" method="post">
									
    <div class="form-group">
        <label>Nama Situs</label>
        <input name="nama" class="form-control" placeholder="Nama Situr" />
    </div>
										
	<div class="form-group">
        <label>Nama Header</label>
        <input name="nisn" class="form-control" placeholder="Nama Header" />
   </div>				
   
   <div class="form-group">
        <label>Fitur Gedung</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Sopir Polinema</option>
                <option value="lt">Sopir Luar</option>  
              </select>
            </div>
										
    <div class="form-group">
        <label>Fitur Kendaraan</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Sopir Polinema</option>
                <option value="lt">Sopir Luar</option>  
              </select>
            </div>

   <div class="form-group">
        <label>Logo</label>
        <input name="nisn" class="form-control" placeholder="Pilih" />
   </div>
										
	<input class="btn btn-success" name="submit" type="button" value="Simpan" />
    <input class="btn btn-warning" name="submit" type="button" value="Batal" />
	</form>
</div>