<!DOCTYPE html>
<html lang="zh">

<head>
    <?php include "common/meta.php" ?>
    <link rel="stylesheet" href="../css/contact.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=qYAMhxz46T2ZAvZVAhlUsCEq3V7yxxNs"></script>
</head>

<body>
    <!-- 公用头部导航 -->
    <?php include "common/header.php" ?>
    <main id="main">
        <div id="contact">
            <div class="img"><img src="../img/contact.png" alt=""></div>
            <div class="logo"><img src="../img/logo.png" alt=""></div>
            <p class="address hidden1"><i class="iconfont">&#xe617;</i>北京市通州区东六环西侧路宋庄镇世佳别墅东区G6号楼</p>
            <p class="call hidden1"><i class="iconfont">&#xe680;</i>400-006-7676</p>
            <p class="email hidden1"><i class="iconfont">&#xe632;</i>bj@sampan.com</p>
        </div>
        <div id="map"></div>

    </main>
    <script>
        // 百度地图API功能
	var map = new BMap.Map("map");
	var point = new BMap.Point(116.708652,39.949847);
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);              // 将标注添加到地图中
	map.centerAndZoom(point, 15);
	var opts = {
	  width : 250,     // 信息窗口宽度
	  height: 48,     // 信息窗口高度
	  title : "北京水米田教育集团" , // 信息窗口标题
	}
	var infoWindow = new BMap.InfoWindow("地址：北京市通州区东六环西侧路宋庄镇世佳别墅东区G6号楼", opts);  // 创建信息窗口对象 
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});
    </script>
    <!-- 公用返回顶部 -->
    <?php include "common/backtop.php" ?>
    <!-- 公用登录 -->
    <?php include "common/login.php" ?>
    <!-- 公用底部 -->
    <?php include "common/footer.php" ?>
</body>

</html> 