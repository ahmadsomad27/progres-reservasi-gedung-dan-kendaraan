<div class="col-md-6">
    <h3>Tambah User</h3>
        <form enctype="multipart/form-data" action="?page=tambahdata" method="post">
				
    <div class="form-group">
        <label>Id</label>
        <input name="id" class="form-control" placeholder="Id User" />
    </div>

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input name="nama" class="form-control" placeholder="Nama anda" />
    </div>
										
	<div class="form-group">
        <label>Jurusan</label>
        <input name="jurusan" class="form-control" placeholder="Jurusan" />
   </div>
										
	<div class="form-group">
        <label>Username</label>
        <input name="username" class="form-control" placeholder="Username" />
    </div>
										
	<div class="form-group">
        <label>Password</label>
        <input type ="password" name="password" class="form-control" placeholder="Password" />
    </div>
										
										
	<div class="form-group">
        <label>Email</label>
        <input name="email" class="form-control" placeholder="Email" />
    </div>
										
	<div class="form-group">
        <label>No Telepon</label>
        <input name="telp" class="form-control" placeholder="No Telepon" />
    </div>

    <div class="form-group">
        <label>Level User</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Himpunan Mahasiswa Jurusan</option>
                <option value="lt">Lembaga Tinggi</option>
                <option value="ukm">Unit Kegiatan Mahasiswa</option>       
              </select>
            </div>

										
										
	<input class="btn btn-success" name="simpan" type="submit" value="Simpan" />
    <input class="btn btn-warning" name="reset" type="reset" value="Batal" />
	</form>
</div>
</div>
        


