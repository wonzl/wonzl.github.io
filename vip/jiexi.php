<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
	<title>犀利播</title>
	<style>
        body, html,#XILIBO{background-color: #000;padding: 0;margin: 0;color: transparent;height: 100%;width: 100%;}
		#player{width:100%;height:100%;text-align:center;color:#f12;font-size:2em;}
	</style>
<script language="javascript" type="text/javascript">
var url = document.referrer;
if(url.indexOf('/')>0) url=url.split('/')[2];

var arydomain = new Array(
	"wangtongxue.cn",
	"vip.xilibo.com"
	);
var b=false;
for(var i=0;i<arydomain.length;i++ ){
	if(url==arydomain[i]){
		b=true;
		break;
	}
}
if(!b){
	top.location.href = "https://vip.xilibo.com/";
}
</script>
</head>
<body>
<div id="player">
<?php
	$url=$_GET['url'];
	$v = $_GET['v']; 
	switch ($v)
	{
	case "1":
	    $jx = "//jx.xmflv.com/?url=";
		break;
	case "2":
	    $jx = "//www.yemu.xyz/?url=";
		break;
	case "3":
		$jx = "//jx.77flv.cc/?url=";
		break;
	case "4":
		$jx = "//z1.m1907.top/?jx=";
		break;
	default:
		$jx='//jx.xmflv.com/?url=';
	}
	if(empty($url)){ 
		echo 'url为空';
	}else{
		echo '<iframe id="XILIBO" scrolling="no" allowtransparency="true" allowfullscreen="true" frameborder="0" src="'.$jx.''.$url.'" width="100%" height="100%"></iframe>';
		}
?>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5813dc9cf1dd73f67011a1e76a7ce391";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
