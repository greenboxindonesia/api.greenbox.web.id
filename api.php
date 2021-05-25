<?php
 /** 
 * 
 * Generate file json
 * 
 **/
///////////////////////////////////////////////////////////////////////
// SCRIPT UNTUK MENHITUNG JUMLAH FILE DAN FOLDER PADA WEBSITE
///////////////////////////////////////////////////////////////////////
/*
$source = getcwd();
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
foreach($files as $file) {

    $result[] = $file.'<br />';
}
//menampilkam hasil
echo count($result).'<br />';
    function listFolders($dir) {
    if($dh = opendir($dir)) {
        $files = Array();
        $inner_files = Array();
        while($file = readdir($dh)) {
            if($file != "." && $file != "..") {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = listFolders($dir . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files); 
                } else {
                    array_push($files, $dir . "/" . $file);
                }
            }
        }
        closedir($dh);
        return $files;
    }
}
foreach (listFolders($source) as $key=>$file){
    $result2[] = $file ."<br />";
}
//menampilkan hasil
echo count($result2).'<br />';
//pembuatan rumusan
$jumlah_inode = count($result);
$jumlah_folder_file = count($result2);
*/
///////////////////////////////////////////////////////////////////////
// SCRIPT UNTUK MENHITUNG JUMLAH FILE DAN FOLDER PADA WEBSITE
///////////////////////////////////////////////////////////////////////
//$besar_file = passthru('du -h -s ' . $DIRECTORY_PATH);
/*
$f = getcwd();
$io = popen ( '/usr/bin/du -sk ' . $f, 'r' );
$size = fgets ( $io, 4096);
$size = substr ( $size, 0, strpos ( $size, "\t" ) );
pclose ( $io );
echo $size;
*/
//////////////////////////////////// PROSE PEMBUATAN FILE JSON ////////////////////////////////////
//array multi-dimensi
//echo '<br />';
//daftar mama domain client
$array_aktif = Array (
    "0" => Array (
        "deadline_web" => "2022-10-24 23:59:59",
        "anggo.local" => "2022-12-24 23:59:59"
    )
);
//custom array
/*
$array_node = Array (
    "0" => Array (
        "jumlah_inode" => "$jumlah_inode",
        "jumlah_folder_file" => "$jumlah_folder_file",
        "besar_file" => "$size"
    )
);
*/
// encode array to json
//$json = json_encode(array('aktifweb' => $array_aktif, 'node' => $array_node));
$json = json_encode(array('aktifweb' => $array_aktif));

// write json to file
if (file_put_contents("api.json", $json)){
    echo "File JSON sukses dibuat...";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}
?>