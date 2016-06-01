<?php 
ini_set('memory_limit', '512M');
$dir =  dirname(__FILE__);
require( $dir . '/class_zip.php' );
$folder      = 'zip_this_folder';
$filename = $folder  . '.zip';
$zip = new ZipFile();

/*******************************************************************/
//Create
echo '[Add]'. PHP_EOL;
if( !$zip->add($dir, $folder) ) {
	die("Failed adding item ($dir)!");
}
echo '[Save]'. PHP_EOL;
if( !$zip->save($filename) ) {
	die("Failed saving zip file ($filename)!");
}
echo '[DONE]<hr>'. PHP_EOL;
/*******************************************************************/

?>