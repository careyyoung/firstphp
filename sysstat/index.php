<?php
/**
 * Created by PhpStorm.
 * User: ye
 * Date: 2016/9/10
 * Time: 14:12
 */

function get_allfiles($path,&$files) {
    if(is_dir($path)){
        $dp = dir($path);
        while ($file = $dp ->read()){
            if($file !="." && $file !=".."){
                get_allfiles($path."/".$file, $files);
            }
        }
        $dp ->close();
    }
    if(is_file($path)){
        $files[] =  $path;
    }
}

function get_filenamesbydir($dir){
    $files =  array();
    get_allfiles($dir,$files);
    return $files;
}

$filenames = get_filenamesbydir("../sysstat_datas");
//打印所有文件名，包括路径
//print_r($filenames);
foreach ($filenames as $value) {
    if ( !strrchr($value,'json'))
//        print_r(end(explode('/',$value)));
//        echo $value.'</br>';
        echo '';
}

function get_sysstat_datas_subdirname($dir){
    if(is_dir($dir)){
//        echo $dir.'</br>';
        if($files = scandir($dir)) {
            #去掉 '.'、'..' 两个目录
            $files = array_slice($files,2);
//            print_r($files) ;
//            echo '</br>';
            foreach ($files as $b){
                echo $b.'</br>';
            }
        }
    }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>index</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<h1>Index</h1>

<div id="content"></div>

<p></p>
<?php
get_sysstat_datas_subdirname("../sysstat_datas");
?>

<li><a href="../sysstat_index.php?sarXX=sar24"> lala </a>

</body>
</html>
