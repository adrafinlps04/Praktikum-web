<?php
$data = array();

for ($i=0; $i <= 100; $i++) { 
    // rand(1,1000)
    array_push($data,rand(1,1000));
}

echo " <h3>Menampilkan Nilai Variabel Genap Dari Data Array</h3> <br>" ;
    foreach ($data as $key=> $value) 
    {
        if($value % 2 == 0){
            echo $value. ", ";
        };
    };

?>