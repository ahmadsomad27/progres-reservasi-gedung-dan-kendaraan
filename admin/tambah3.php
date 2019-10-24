
<div class="col-md-6">
    <h3>Tambah Reservasi Gedung</h3>
        <form enctype="multipart/form-data" action="?page=upload" method="post">

    <div class="form-group">
        <label>Tanggal Reservasi</label>
            <input type="date" name="tanggal" class="form-control" required/>
          </div>
										
	<div class="form-group">
        <label>Acara</label>
        <input name="nisn" class="form-control" placeholder="Acara" />
   </div>
    
   
   <div class="form-group">
        <label>Waktu Mulai</label>
            <input type="time" name="jam" class="form-control" required/>
          </div>

    <div class="form-group">
        <label>Waktu Selesai</label>
            <input type="time" name="tanggal" class="form-control" required/>
          </div>
                            
    <div class="form-group">
        <label>Tanggal Loading / Check in Barang</label>
            <input type="date" name="tanggal" class="form-control" required/>
          </div>

    <div class="form-group">
        <label>Jam Loading / Check in Barang</label>
            <input type="time" name="tanggal" class="form-control" required/>
          </div>

    <div class="form-group">
        <label>Tanggal Bongkar / Check out Barang</label>
            <input type="date" name="tanggal" class="form-control" required/>
    </div>

    <div class="form-group">
        <label>Jam Bongkar / Check out Barang</label>
            <input type="time" name="tanggal" class="form-control" required/>
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
        <label>Nama Gedung</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Graha Polinema</option>
                <option value="lt">Graha Theater</option>
                <option value="ukm">Auditorium Gd. Kimia Lt.3</option>
                <option value="hmj">Auditorium Gd. AH Lt.2</option>
                <option value="lt">Kantin Lt. 3</option>
                <option value="ukm">Auditorium Gd. AB Lt.2</option> 
                <option value="hmj">Auditorium Gd. AC Lt.2</option>
                <option value="lt">Aula Pertamina</option>
                <option value="ukm">Aula Sekber</option>      
                <option value="ukm">Auditorium Sipil Lt.8</option>      
              </select>
            </div>
										
	<div class="form-group">
        <label>Nama Peminjam</label>
        <input name="password" class="form-control" placeholder="Nama Peminjam" />
    </div>

    <div class="form-group">
        <label>Klasifikasi</label>
              <select name="level" class="form-control" id="tipe" >
                <option value="hmj">Berbayar</option>
                <option value="lt">Tidak Berbayar</option>     
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

        


