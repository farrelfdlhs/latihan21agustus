<?php
    if (isset($_POST['pilih'])) {
        $filem = $_POST['film'];
        echo "Film Favorit anda adalah : <font color=blue><b>$filem</b></font>";
    }

?>