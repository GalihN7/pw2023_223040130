<html>
    <body>
<?php
    for($angkaf=1; $angka<=100; $angka++) {
    if($angka % 3 == 0 && $angka % 5 == 0) {
      echo "Galih Nurhuda\n <br>";
       echo "Galih\n <br>";
    } else if($angka % 5 == 0) {
      echo "Nurhuda\n <br>";
    } else {
      echo $angka . "\n <br>";
    }
    }
?>
    </body>
</html>