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
date_default_timezone_set('Asia/Jakarta');
$date = date("l, d-m-Y, H:i T");
echo $date;
echo '<br />';
//////////////////////////////////// PROSE PEMBUATAN FILE JSON ////////////////////////////////////
//array multi-dimensi
//echo '<br />';
//daftar mama domain client
$array_aktif = Array (
    "0" => Array (
        "deadline_web" => "2022-10-24 23:59:59",
        "anggo.local" => "2022-12-24 23:59:59",
        "aank.my.id" => "2022-03-23 23:59:59",
        "ancientjava.com" => "2021-11-09 23:59:59",
        "baterailaptopku.com" => "2022-03-14 23:59:59",
        "ecolloquium.or.id" => "2021-08-17 23:59:59",
        "isc-tl.com" => "2022-05-01 23:59:59",
        "griyabukupelangi.com" => "2021-12-14 23:59:59",
        "hasanuddinwajak.sch.id" => "2021-07-14 23:59:59",
        "husgendam.com" => "2022-03-20 23:59:59",
        "kampungcempluk.com" => "2021-07-19 23:59:59",
        "kanal24.co.id" => "2021-04-12 23:59:59",
        "leokristi.com" => "2022-01-27 23:59:59",
        "omahkitir.com" => "2021-08-09 23:59:59",
        "pelangisastramalang.org" => "2022-03-25 23:59:59",
        "revolmerch.id" => "2022-04-03 23:59:59"
    )
);
//custom array dev
$array_dev = Array (
    "0" => Array (
        "anggo.local" => "Tidak ada pengembangan saat ini",
        "baterailaptopku.com" => "2022-03-14 23:59:59",
        "ecolloquium.or.id" => "2021-08-17 23:59:59",
        "isc-tl.com" => "2022-05-01 23:59:59",
        "griyabukupelangi.com" => "2021-12-14 23:59:59",
        "hasanuddinwajak.sch.id" => "2021-07-14 23:59:59",
        "husgendam.com" => "2022-03-20 23:59:59",
        "kampungcempluk.com" => "2021-07-19 23:59:59",
        "kanal24.co.id" => "2021-04-12 23:59:59",
        "leokristi.com" => "2022-01-27 23:59:59",
        "omahkitir.com" => "2021-08-09 23:59:59",
        "pelangisastramalang.org" => "2022-03-25 23:59:59",
        "revolmerch.id" => "2022-04-03 23:59:59"
    )
);

//custom array naintenance
$array_maintenance = Array (
    "0" => Array (
        "anggo.local" => "Tidak ada perawatan saat ini",
        "baterailaptopku.com" => "2022-03-14 23:59:59",
        "ecolloquium.or.id" => "2021-08-17 23:59:59",
        "isc-tl.com" => "2022-05-01 23:59:59",
        "griyabukupelangi.com" => "2021-12-14 23:59:59",
        "hasanuddinwajak.sch.id" => "2021-07-14 23:59:59",
        "husgendam.com" => "2022-03-20 23:59:59",
        "kampungcempluk.com" => "2021-07-19 23:59:59",
        "kanal24.co.id" => "2021-04-12 23:59:59",
        "leokristi.com" => "2022-01-27 23:59:59",
        "omahkitir.com" => "2021-08-09 23:59:59",
        "pelangisastramalang.org" => "2022-03-25 23:59:59",
        "revolmerch.id" => "2022-04-03 23:59:59"
    )
);

//custom array naintenance
$array_backup = Array (
    "0" => Array (
        "anggo.local" => "Selasa, 01-06-2021, 15:27 WIB",
        "baterailaptopku.com" => "2022-03-14 23:59:59",
        "ecolloquium.or.id" => "2021-08-17 23:59:59",
        "isc-tl.com" => "2022-05-01 23:59:59",
        "griyabukupelangi.com" => "2021-12-14 23:59:59",
        "hasanuddinwajak.sch.id" => "2021-07-14 23:59:59",
        "husgendam.com" => "2022-03-20 23:59:59",
        "kampungcempluk.com" => "2021-07-19 23:59:59",
        "kanal24.co.id" => "2021-04-12 23:59:59",
        "leokristi.com" => "2022-01-27 23:59:59",
        "omahkitir.com" => "2021-08-09 23:59:59",
        "pelangisastramalang.org" => "2022-03-25 23:59:59",
        "revolmerch.id" => "2022-04-03 23:59:59"
    )
);

// encode array to json
$json = json_encode(array('aktifweb' => $array_aktif, 'dev_web' => $array_dev, 'maintenance_web' => $array_maintenance, 'backup_web' => $array_backup));
//$json = json_encode(array('aktifweb' => $array_aktif));

// write json to file
if (file_put_contents("api.json", $json)){
    echo "File JSON sukses dibuat...";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}
?>