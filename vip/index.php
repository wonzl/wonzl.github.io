<!DOCTYPE html>
<HTML>
<HEAD>
<META content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<TITLE>犀利播-VIP视频在线解析/免费播放</TITLE>
<meta name="keywords" content="vip视频解析,腾讯视频vip解析,优酷视频VIP解析,爱奇艺VIP视频解析,芒果VIP视频解析,VIP视频免费观看">
<meta name="description" content="本站免费提供vip视频解析服务,腾讯视频vip解析,优酷视频VIP解析,爱奇艺VIP视频解析,芒果VIP视频解析,VIP视频免费在线观看">
<link rel="shortcut icon" href="/vip/ui/favicon.ico" />
<link href="/vip/ui/style.css" rel="stylesheet" />
</HEAD>
<body>
<div class="top">
	<div class="container">
	    <h1 title="犀利播vip视频在线解析"><a href="https://vip.xilibo.com">犀利播</a></h1>
		<form action="">
			<div class="form">
			<input type="text" name="url" lay-verify="required" value="" placeholder="请输入视频地址" autocomplete="off" class="input">
			<button class="btn">开始播放</button>
			</div>
		</form>
	</div>
</div>
	<div class="container">
		<div class="playbox">
		<?php
			$url=$_GET['url'];
			$date=date("Y-m-d");
			if(empty($url)){ 
				echo '<div id="play"><div id="timebox"><div class="clock"><span id="time"></span><br /><span class="date">'.$date.'</span></div></div></div>';
			}else{
				echo '<iframe id="play" name="play" frameBorder=no width=100% scrolling=no height=100% src="vip/jiexi.php?v=&url='.$url.'"></iframe>
				<div class="spare"><a>切换信号</a><a target="play" href="vip/jiexi.php?v=1&url='.$url.'">1</a><a target="play" href="vip/jiexi.php?v=2&url='.$url.'">2</a><a target="play" href="vip/jiexi.php?v=3&url='.$url.'">3</a><a target="play" href="vip/jiexi.php?v=4&url='.$url.'">4</a><a target="_blank" href="https://quan.taozee.com/">5</a></div>';
				}
		?>
		</div>
	</div>
<div class="footer">
    本站支持腾讯视频、爱奇艺、优酷视频、芒果视频等VIP视频在线播放，但不存储任何视频和链接，仅供个人学习交流。<br>
	<a href="https://beian.miit.gov.cn/" target="_blank" style="color:#fff;">辽ICP备15009678号</a>
</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5813dc9cf1dd73f67011a1e76a7ce391";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

function changetime(){
var Timehtml = document.getElementById('time');
var date = new Date();
var h = date.getHours();
h = h < 10 ? '0' + h : h;
var m = date.getMinutes();
m = m < 10 ? '0' + m : m;
var s =date.getSeconds();
s = s < 10 ? '0' + s : s;
Timehtml.innerHTML = ''+h+':'+m+':'+s+'';
}
window.onload = function(){
changetime();
setInterval(changetime,1000);
}
</script>
</body>
</html>