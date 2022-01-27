<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <br>
    <center><h3>FORM UNGGAH FILE</h3></center>
    <div class="container" style="margin-top:10px;">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="file" name="berkas" class="form-control" >
                    </div>
            </div>
            <br>
            <center>        
                <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary" name="upload" value="upload"></button>
                    </div>
                </div>
            </center>
            <?php

                if(isset($_POST["upload"])) {
                    $namaFile = $_FILES['berkas']['name'];
                    $namaSementara = $_FILES['berkas']['tmp_name'];
                    $ukuranfile = $_FILES['berkas']['size'];
                    $type = $_FILES['berkas']['type'];
                    $dirUpload = "files/";
                    
                    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

                    if ($terupload) {
                        echo "<img src='files/$namaFile'>";
                        echo 'Nama File Ini :'.$namaFile.'<br>' ;
                        echo 'Ukuran File Ini :'.$ukuranfile.'<br>';
                        echo 'Type File Ini :'.$type.'<br>' ;
                    } else {
                        echo "Upload Gagal!";
                    }

                  }

               

            ?>
        </form>
    </div>
</body>
</html>
