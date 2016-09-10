<?php include "common_upper.html" ?>

<?php
// sysstat_index.php: 传入不同的sar文件所在的文件夹名称，得到不同的图表内容。
// sar文件夹要跟sar文件一样的名称

$sarXX = $_GET['sarXX']; //$_POST['wuziling'];
echo $sarXX.'</br>';



define('SYSSTATDATAPATH','sysstat_datas/'.$sarXX);
echo SYSSTATDATAPATH;
define('JSONSTRUCTUREFILENAME','sysstat_datas/'.$sarXX.'/'.$sarXX.'.json');
define('NETWORKINTERFACELIST',serialize(array('lo','eth0')));


require('sysstat/generatestatdata.php');
require('sysstat/importstatfiledata.php');
require('sysstat/buildjsonstructure.php');



$generatestatdata = new generatestatdata();
$generatestatdata->execute();
?>


	<h1>SysStat Graph</h1>

	<div id="content"></div>

	<p>Generated by <a href="http://magnetikonline.com/sysstatgraph/">SysStat Graph Version 0.4</a></p>

	<script type="text/javascript">
	sysstatgraph.statdata = <?php echo((is_file(JSONSTRUCTUREFILENAME)) ? file_get_contents(JSONSTRUCTUREFILENAME) : '{}'); ?>;
	sysstatgraph.init();
	</script>



<?php include "common_bottom.html" ?>