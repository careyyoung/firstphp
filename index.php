<?php

// 第一种直接读取文件夹结构返回
function get_sysstat_datas_filename($dir){
    $files = [];
    if(is_dir($dir)){
        if($files = scandir($dir)) {
            #去掉 '.'、'..' 两个目录
            $files = array_slice($files,2);
//            print_r($files) ;
//            echo '</br>';
            foreach ($files as $key=>$v){
                if ( strrchr($v,'json'))
                    unset($files[$key]);
            }
//            print_r($files) ;
        }
    }
    return $files;
}

// 第二种，将存入数据库的内容读取出来：
$link = mysqli_connect(
    'localhost', /* The host to connect to 连接MySQL地址 */
    'root',   /* The user to connect as 连接MySQL用户名 */
    '', /* The password to use 连接MySQL密码 */
    '',
    '3306');  /* The default database to query 连接数据库名称*/

if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}
$results = mysqli_query( $link,  'select * from performance_test_logs a order by a.time_suffix desc');
//print_r($results).'<br>';
//echo "<br>";
//echo "<br>";
//echo "<br>";

?>
<?php include "common_upper.html" ?>

    <!-- BEGIN ROW  -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="panel-body">

                    <div class="task-thumb-details">
                        <h1>
                            <a href="#">
                                Work Progress
                            </a>
                        </h1>
                        <p>
                            tester lalala
                        </p>
                    </div>
                </div>
                <table class="table table-hover personal-task">

                    <tbody>

                    <?php
                    while ($row=mysqli_fetch_array($results)){
                        ?>
                        <tr>
                            <td>
                                <?php
                                echo $row['time_suffix'];
                                ?>
                            </td>
                            <td>
                                <a href="sysstat_index.php?sarXX=<?php
                                echo $row['sar_239'];
                                ?>&time_suffix=<?php
                                echo $row['time_suffix'];
                                ?>" target="_blank" >sar_239
                                </a>
                            </td>
                            <td>
                                <a href="sysstat_index.php?sarXX=<?php
                                echo $row['sar_240'];
                                ?>&time_suffix=<?php
                                echo $row['time_suffix'];
                                ?>" target="_blank" >sar_240
                                </a>
                            </td>
                            <td>
                                <a href="sysstat_index.php?sarXX=<?php
                                echo $row['sar_241'];
                                ?>&time_suffix=<?php
                                echo $row['time_suffix'];
                                ?>" target="_blank" >sar_241
                                </a>
                            </td>
                            <td>
                                <a href="gatling_logs/<?php
                                echo $row['gatling_result'];
                                ?>/index.html" class="" target="_blank" >
                                    gatling_result
                                </a>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    100%
                                </span>
                            </td>
                            <td>

                                <a class="btn btn-primary btn-xs" href="sysstat_index.php?sarXX=<?php
//                                echo $value;
                                ?>">View details &raquo;</a>

                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </section>
        </div>

    </div>
    <!-- END ROW  -->




<?php include "common_bottom.html" ?>