<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body style="margin:20px 100px 20px 100px;">

  <form name="myform" class="form-horizontal" method="GET" action="form_nilai2.php" autocomplete="off">
  <fieldset>

  <!-- Form Name -->
  <legend>Form Nilai Mahasiswa</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
    <div class="col-md-5">
    <input id="nama" name="nama" type="text" placeholder="Masukan Nama Anda" class="form-control input-md">
      
    </div>
  </div>

  <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
    <div class="col-md-5">
        <select id="matkul" name="matkul" class="form-control">
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
        <option value="Matematika Komputer">Matematika Komputer</option>
        </select>
    </div>
    </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
    <div class="col-md-5">
    <input id="nilai_uts" name="nilai_uts" type="number" placeholder="Masukan Nilai UTS" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
    <div class="col-md-5">
    <input id="nilai_uas" name="nilai_uas" type="number" placeholder="Masukan Nilai UAS" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas/Praktikum</label>  
    <div class="col-md-5">
    <input id="nilai_tugas" name="nilai_tugas" type="number" placeholder="Masukan Nilai Tugas/Praktikum" class="form-control input-md">
      
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="proses"></label>
    <div class="col-md-4">
      <button id="proses" name="proses" class="btn btn-success" onclick="validateForm()">Simpan</button>
    </div>
  </div>

  </fieldset>
  </form>

<?php
error_reporting(0);
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>


  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</body>
</html>