<?php

    if (isset($_POST['kirim'])) {
        $bin = $_POST['jumlah'];


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