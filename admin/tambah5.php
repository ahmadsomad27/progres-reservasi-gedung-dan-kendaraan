<div class="col-md-6">
    <h3>Tambah Data Sopir</h3>
        <form enctype="multipart/form-data" action="?page=upload" method="post">
									
    <div class="form-group">
        <label>Nama Sopir</label>
        <input name="nama" class="form-control" placeholder="Nama Sopir" />
    </div>
										
    <div class="form-group">
        <label>Kategori</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Sopir Polinema</option>
                <option value="lt">Sopir Luar</option>  
              </select>
            </div>								
										
	<input class="btn btn-success" name="submit" type="button" value="Simpan" />
    <input class="btn btn-warning" name="submit" type="button" value="Batal" />
	</form>
</div>

        


