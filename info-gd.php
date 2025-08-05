<?php
if (extension_loaded('gd')) {
    $gd_info = gd_info();
    echo '<pre>';
    print_r($gd_info);
    echo '</pre>';
} else {
    echo 'La extensión GD no está cargada.';
}
?>
