<?php 

//buat function
function nilaiTerbesar($angka)  
{ 
   $n = count($angka);  
   $terbesar = $angka[0];    
   for ($i = 1; $i < $n; $i++)  
       if ($terbesar < $angka[$i])
       {
           $terbesar = $angka[$i]; 
       }
    return $terbesar;        
}

// deklarasikan angka
$angka = array(30, 10, 70, 15, 25);

//jalankan fungsi nilaiTerbesar
echo "Nilai Terbesar : ".nilaiTerbesar($angka); 
?> 