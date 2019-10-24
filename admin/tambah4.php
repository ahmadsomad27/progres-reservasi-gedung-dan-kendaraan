<div class="col-md-6">
    <h3>Tambah Reservasi Kendaraan</h3>
        <form enctype="multipart/form-data" action="?page=upload" method="post">
	
    <div class="form-group">
        <label>Tanggal Mulai</label>
            <input type="date" name="tanggal" class="form-control" required/>
          </div>

    <div class="form-group">
        <label>Tanggal Selesai</label>
            <input type="date" name="tanggal" class="form-control" required/>
          </div>
                
    <div class="form-group">
        <label>Jam Penjemputan</label>
            <input type="time" name="jam" class="form-control" required/>
          </div>
										
	<div class="form-group">
        <label>Tempat Tujuan</label>
        <input name="alamat" class="form-control" placeholder="Tempat Tujuan" />
    </div>
										
										
	<div class="form-group">
        <label>Kegiatan</label>
        <input name="username" class="form-control" placeholder="kegiatan" />
    </div>
										
	<div class="form-group">
        <label>Tujuan</label>
        <input name="password" class="form-control" placeholder="Tujuan" />
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input name="password" class="form-control" placeholder="Keterangan" />
    </div>

    <div class="form-group">
        <label>No. Telepon</label>
        <input name="alamat" class="form-control" placeholder="No. Telepon" />
    </div>
										
										
	<div class="form-group">
        <label>Kendaraan</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Bus</option>
                <option value="lt">Ambulan</option>
                <option value="ukm">Mobil</option>   
              </select>
            </div>
										
	<div class="form-group">
        <label>Nama User</label>
        <input name="password" class="form-control" placeholder="Nama User" />
    </div>

    <div class="form-group">
        <label>Sopir</label>
        <input name="password" class="form-control" placeholder="Nama Sopir" />
    </div>

    <div class="form-group">
        <label>Klasifikasi</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Berbayar</option>
                <option value="lt">Gratis</option>  
              </select>
            </div>

    <div class="form-group">
        <label>Disposisi</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Belum</option>
                <option value="lt">Sudah</option>  
              </select>
            </div>

    <div class="form-group">
        <label>Persetujuan</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Disetujui</option>
                <option value="lt">Belum Disetujui</option>  
              </select>
            </div>
							
										
	<input class="btn btn-success" name="submit" type="button" value="Simpan" />
    <input class="btn btn-warning" name="submit" type="button" value="Batal" />
	</form>
</div>

        


