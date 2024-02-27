<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="Hasil_nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkukl" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkukl" name="matkukl" class="custom-select">
        <option value="ddp">Dasar Dasar komputer</option>
        <option value="basdat">Basis data</option>
        <option value="jarkom">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nuts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nuts" name="nuts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nuas" class="col-4 col-form-label">NIlai UAS</label> 
    <div class="col-8">
      <input id="nuas" name="nuas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nita" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nita" name="nita" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button type="submit" name="proses" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>