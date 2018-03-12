<!DOCTYPE html>
    <html>
    <head>
    <title>地图首页</title>
    <meta charset="utf-8">
        <style type="text/css">
		#container
    {
        width: 100%;
        height:1500px;
        border: 2px solid black;
        background-color: rgb(255,255,255);
        padding: 0 px;
    }
		#nav
    {

        list-style-type:none;
        height: 70px;
        background-color:  rgb(150,185,125);
        margin:  0px;
        padding: 0px;
    }

		#nav li
    {
        display: block;
        width:105px;
        height:70px;
        float: right ;
        text-align:center;
    }
		#nav span
    {
        color: #6d7755;
        font-size: 32px;
        display: block;
        padding-top: 20px;

    }
		#nav li:hover
    {
        background-color: rgb(228,228,228);
    }
		#nav li:active
    {
        background-color: rgb(245,245,245);
    }

		#leftnav,#rightside
    {
        
        float: left;
    }
     
   #rightside{
   	width: 200px;
   	height: 200px;
   	background-color: black;
   }

		#dituContent
    {
        float: right;

    }
		#nav1
    {
        list-style-type: none;
        height: 50px;
        margin-top: 200px;
        padding: 0px;
    }

		#nav1 li
    {
        display: block;
        width: 80px;
        height: 40px;
        margin-top: 10px;
        background-color: rgb(150,185,125);
    }
		#nav1 li:hover
    {
        background-color: rgb(228,228,228);
    }
		#nav1 li:active
    {
        background-color: rgb(245,245,245);
    }
		#nav1 span
    {
        color: #6d7755;
        font-size: 32px;
    }

    </style>

    <style type="text/css">
        html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http:/api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
<body>

<div id="container">


	<ul id="nav">

		<a href="#"><li><span>zhuy</span></li></a>
		<a href="#"><li><span>zhuy</span></li></a>
		<a href="#"><li><span>zhuy</span></li></a>
		<a href="#"><li><span>zhuy</span></li></a>
		<a href="#"><li><span>zhuy</span></li></a>
	</ul>

	<div id="main">
		<div id="leftnav">
			<ul id="nav1">
				<a href="#"><li><span>设备1</span></li></a>
				<a href="#"><li><span>设备2</span></li></a>
				<a href="#"><li><span>设备3</span></li></a>
				<a href="#"><li><span>设备4</span></li></a>
				<a href="#"><li><span>设备5</span></li></a>
			</ul>
			<div style="width:697px;height:387px;border:#ccc solid 1px;" id="dituContent">
			</div>
		<div id="rightside"></div>

		</div>
	</div>


	<div id="footer">
	</div>
</div>
</body>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.339485,23.15968);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }


    initMap();//创建和初始化地图
</script>
</html>