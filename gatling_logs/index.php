<?php
/**
 * Created by PhpStorm.
 * User: ye
 * Date: 2016/9/10
 * Time: 14:12
 */

//返回gatling_logs目录下所有的result文件夹的index.html
function get_gatling_result_index_origin($path,&$files){
    if(is_dir($path)){
        $dp = dir($path);
        while ($file = $dp ->read()){
            if($file !="." && $file !=".."){
                get_gatling_result_index_origin($path."/".$file, $files);
            }
        }
        $dp ->close();
    }
    if(is_file($path) && strpos($path,'index.html')){
        $files[] =  $path;
//        echo $path.'</br>';
    }
    return $files;
}

function get_gatling_result_index(){
    $files =  array();
    $all_index = get_gatling_result_index_origin('.',$files);
    return $all_index;
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
$all_index = get_gatling_result_index();
print_r($all_index);
?>
<a href="<?php echo $all_index[0]; ?>"> log</a>

</body>
</html>
