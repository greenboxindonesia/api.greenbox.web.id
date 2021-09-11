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
        "anggo.local" => "2022-12-24 23:59:59",
        "aank.my.id" => "2022-03-23 23:59:59",
        "ancientjava.com" => "2021-11-09 23:59:59",
        "baterailaptopku.com" => "2022-03-14 23:59:59",
        "ecolloquium.or.id" => "2021-08-17 23:59:59",
        "isc-tl.com" => "2022-05-01 23:59:59",
        "griyabukupelangi.com" => "2021-12-14 23:59:59",
        "hasanuddinwajak.sch.id" => "2022-07-14 23:59:59",
        "husgendam.com" => "2022-03-20 23:59:59",
        "kampungcempluk.com" => "2021-07-19 23:59:59",
        "kanal24.co.id" => "2021-04-12 23:59:59",
        "leokristi.com" => "2022-01-27 23:59:59",
        "omahkitir.com" => "2021-08-09 23:59:59",
        "pelangisastramalang.org" => "2022-03-25 23:59:59",
        "revolmerch.id" => "2022-04-03 23:59:59",
        "mrblinkz.com" => "2022-07-07 23:59:59"
    )
);
//custom array dev
$array_dev = Array (
    "0" => Array (
        "anggo.local" => "https://api.greenbox.web.id/clients/alpha/changelog.txt",
        "aank.my.id" => "https://api.greenbox.web.id/clients/aank.my.id/changelog.txt",
        "baterailaptopku.com" => "https://api.greenbox.web.id/clients/baterailaptopku.com/changelog.txt",
        "ecolloquium.or.id" => "https://api.greenbox.web.id/clients/ecolloquium.or.id/changelog.txt",
        "isc-tl.com" => "https://api.greenbox.web.id/clients/isc-tl.com/changelog.txt",
        "griyabukupelangi.com" => "https://api.greenbox.web.id/clients/griyabukupelangi.com/changelog.txt",
        "hasanuddinwajak.sch.id" => "https://api.greenbox.web.id/clients/hasanuddinwajak.sch.id/changelog.txt",
        "husgendam.com" => "https://api.greenbox.web.id/clients/husgendam.com/changelog.txt",
        "kampungcempluk.com" => "https://api.greenbox.web.id/clients/kampungcempluk.com/changelog.txt",
        "kanal24.co.id" => "https://api.greenbox.web.id/clients/kanal24.co.id/changelog.txt",
        "leokristi.com" => "https://api.greenbox.web.id/clients/leokristi.com/changelog.txt",
        "omahkitir.com" => "https://api.greenbox.web.id/clients/omahkitir.com/changelog.txt",
        "pelangisastramalang.org" => "https://api.greenbox.web.id/pelangisastramalang.org/alpha/changelog.txt",
        "revolmerch.id" => "https://api.greenbox.web.id/clients/revolmerch.id/changelog.txt",
        "mrblinkz.com" => "https://api.greenbox.web.id/clients/mrblinkz.com/changelog.txt"
    )
);

//custom array naintenance
$array_maintenance = Array (
    "0" => Array (
        "anggo.local" => "Tidak ada perawatan saat ini",
        "aank.my.id" => "Tidak ada perawatan saat ini",
        "baterailaptopku.com" => "Update Modul & Plugin 11/09/21 Done",
        "ecolloquium.or.id" => "Tidak ada perawatan saat ini",
        "isc-tl.com" => "Tidak ada perawatan saat ini",
        "griyabukupelangi.com" => "Tidak ada perawatan saat ini",
        "hasanuddinwajak.sch.id" => "Tidak ada perawatan saat ini",
        "husgendam.com" => "Tidak ada perawatan saat ini",
        "kampungcempluk.com" => "Tidak ada perawatan saat ini",
        "kanal24.co.id" => "Tidak ada perawatan saat ini",
        "leokristi.com" => "Tidak ada perawatan saat ini",
        "omahkitir.com" => "Tidak ada perawatan saat ini",
        "pelangisastramalang.org" => "Tidak ada perawatan saat ini",
        "revolmerch.id" => "Tidak ada perawatan saat ini",
        "mrblinkz.com" => "Pemasangan Google Analytic"
    )
);

//custom array naintenance
$array_backup = Array (
    "0" => Array (
        "anggo.local" => "Selasa, 01-06-2021, 15:27 WIB",
        "aank.my.id" => "Selasa, 03-06-2021, 15:27 WIB",
        "baterailaptopku.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "ecolloquium.or.id" => "Selasa, 01-06-2021, 15:27 WIB",
        "isc-tl.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "griyabukupelangi.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "hasanuddinwajak.sch.id" => "Selasa, 21-07-2021, 15:27 WIB",
        "husgendam.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "kampungcempluk.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "kanal24.co.id" => "Selasa, 01-06-2021, 15:27 WIB",
        "leokristi.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "omahkitir.com" => "Selasa, 01-06-2021, 15:27 WIB",
        "pelangisastramalang.org" => "Selasa, 01-06-2021, 15:27 WIB",
        "revolmerch.id" => "Selasa, 01-06-2021, 15:27 WIB",
        "mrblinkz.com" => "Kamis, 29-07-2021, 14:00 WIB"
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