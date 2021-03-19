<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<?php 
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=>$nama_siswa = $_GET['nama'],'uts'=> $nilai_uts = $_GET['nilai_uts'],'uas'=>$nilai_uas = $_GET['nilai_uas'],'tugas'=>$nilai_tugas = $_GET['nilai_tugas']];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
?>
    <div class="container">
        <div class="row">
            <div class="col-sm" style="overflow-x:auto;">
            <h3>Daftar Nilai Siswa</h3>
            <table border="1" class="table table-striped table-dark" style="max-width: 100em;">
                <thead>
                    <tr>
                        <th>No</th><th>NIM</th><th>UTS</th>
                        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php
                    error_reporting(0);
                    $nomor = 1; 
                    foreach($ar_nilai as $ns){
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                    }
                    ?>
                </tbody> 
            </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<body>
    
</body>
</html>