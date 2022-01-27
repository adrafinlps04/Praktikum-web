<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adravin Tugas_02_03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="form" style="padding-left:25% ; padding-right:25% ; padding-top:25px">
        <center>
            <h2>Operator Aritmetika</h2>
            <p>20182205112 Adravin</p>
            <p>
                <?php
                    function tanggal_indo($tanggal, $cetak_hari = false)
                    {
                        $hari = array ( 1 =>    'Senin',
                                    'Selasa',
                                    'Rabu',
                                    'Kamis',
                                    'Jumat',
                                    'Sabtu',
                                    'Minggu'
                                );
                                
                        $bulan = array (1 =>   'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                );
                        $split 	  = explode('-', $tanggal);
                        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
                        
                        if ($cetak_hari) {
                            $num = date('N', strtotime($tanggal));
                            return $hari[$num] . ', ' . $tgl_indo;
                        }
                        return $tgl_indo;
                    }

                    echo tanggal_indo(date('Y-m-d'),true)." ".date('h:i:s');
                ?>
            </p>
        </center>
        <form method="POST" >
                <div class="form-group">
                    <label for="angka1">Angka Pertama</label>
                    <input type="number" name="angka1" class="form-control" id="angka1"  placeholder="Masukkan angka pertama" value="<?php echo $_POST["angka1"] ?>">
                </div>
                <div class="form-group">
                    <label for="angka2">Angka Kedua</label>
                    <input type="number" name="angka2" class="form-control" id="angka2" placeholder="Masukkan angka kedua" value="<?php echo $_POST["angka2"] ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="simpan">Hitung</button>
                <hr>
                <?php

                    $angka1= isset($_POST["angka1"]) ? $_POST["angka1"] : "";
                    $angka2= isset($_POST["angka2"]) ? $_POST["angka2"] : "";
                    
                    if(isset($_POST['simpan'])){
                        if(empty($angka1)){
                        echo '<div class="alert alert-danger" role="alert">
                                         Angka Pertama Tidak boleh DiKosongkan
                            </div>';
                        }
                                            
                        elseif ($angka1 < $angka2) {
                            echo " <div class='alert alert-danger' role='alert'>
                                        Angka Pertama Harus Lebih Besar Dari Angka Kedua
                                </div>";
                        }
                        elseif (empty($angka2)) {
                            echo " <div class='alert alert-danger' role='alert'>
                                         Angka kedua Tidak boleh DiKosongkan
                                </div>";
                        }
                        else {
                            echo " <h3> Hasil Aritmatika </h3>" ;       
                            echo "# Hasil Perkalian : " .$angka1 * $angka2 .'<br>';
                            echo "# Hasil Pembagian : " .$angka1 / $angka2.'<br>';
                            echo "# Hasil Penjumlahan : " .($angka1 + $angka2).'<br>' ;
                            echo "# Hasil Pengurangan : " .($angka1 - $angka2).'<br>' ;
                        }
                    }

                ?>
        </form>
        
    </div>
</body>
</html>