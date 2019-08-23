<?php

    if (isset($_POST['kirim'])) {
        $bin = $_POST['jumlah'];

        // for ($i=$bin; $i > 1; $i--) { 
        //     for ($j=1; $j <= $i+1; $j++) { 
        //         echo "_";
        //     }
        //     for ($k=$bin; $k > $i ; $k--) { 
        //         echo "*";
        //     }
        //     for ($l=$bin; $l > $i; $l--) { 
        //         echo "*";
        //     }
        //     echo "<br>";
        // }

        for ($i = 0; $i < $bin; $i++) {
            for ($j = $bin; $j > $i; $j--) {
                echo '&nbsp;';
            }
            for ($k = 0; $k <= $i; $k++) {
                echo '*';
            }
        echo '<br/>';
        }

        echo "Jumlah Bintang = <b>$bin</b>";
    }


?>