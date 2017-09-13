<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title></title>
	<link rel="stylesheet" href="/Public/Home/css/weui.css"/>
	<link rel="stylesheet" href="/Public/Home/css/weui2.css"/>
	<link rel="stylesheet" href="/Public/Home/css/weui3.css"/>
	<script src="/Public/Home/js/zepto.min.js"></script>
	<script src="/Public/Home/js/swipe.js"></script>
</head>
<body ontouchstart class="xhsd_index" >
	<div class="slide" id="slide2" >
		<ul>
			<li>
				<a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="http://7xr193.com1.z0.glb.clouddn.com/1.jpg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="http://7xr193.com1.z0.glb.clouddn.com/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="http://7xr193.com1.z0.glb.clouddn.com/3.jpg" alt="">
				</a>
			</li>
		</ul>
		<div class="dot">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="weui_grids">
            <a href="<?php echo U('search');?>" class="weui_grid js_grid"  >
                <div class="weui_grid_icon">
                    <img src="/Public/Home/images/icon_nav_search_bar.png" alt="">
                </div>
                <p class="weui_grid_label">
                    查书
                </p>
            </a>
            <a href="javascript:;" class="weui_grid js_grid" >
                <div class="weui_grid_icon">
                    <img src="/Public/Home/images/icon_nav_dialog.png" alt="">
                </div>
                <p class="weui_grid_label">
                    扫码购书
                </p>
            </a>
            <!-- <a href="javascript:;" class="weui_grid js_grid" >
                <div class="weui_grid_icon">
                    <img src="./images/icon_nav_toast.png" alt="">
                </div>
                <p class="weui_grid_label">
                    门店导航
                </p>
            </a>
            <a href="javascript:;" class="weui_grid js_grid" >
                <div class="weui_grid_icon">
                    <img src="./images/icon_nav_article.png" alt="">
                </div>
                <p class="weui_grid_label">
                    预定位置
                </p>
            </a> -->
    </div>

    <!-- 底部导航 -->
	<div class="weui_cells_title bot_height" >&nbsp;</div>
	<div class="weui_tab tab-bottom bot_height" >
        <div class="weui_tabbar">
            <a href="index.html" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/Public/Home/images/icon_nav_msg.png" alt="">
                </div>
                <p class="weui_tabbar_label">首页</p>
            </a>
            <a href="profile.html" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/Public/Home/images/icon_nav_msg.png" alt="">
                </div>
                <p class="weui_tabbar_label">个人中心</p>
            </a>             
        </div>
    </div>

	<script type="text/javascript">
        $('.tab-bottom .weui_tabbar_item:first').addClass('weui_bar_item_on');

		$().ready(function(){
			//图片的自动轮播
			$('#slide2').swipeSlide({
				autoSwipe:true,//自动切换默认是
				speed:3000,//速度默认4000
				continuousScroll:true,//默认否
				transitionType:'cubic-bezier(0.22, 0.69, 0.72, 0.88)',//过渡动画linear/ease/ease-in/ease-out/ease-in-out/cubic-bezier
				lazyLoad:true,//懒加载默认否
				firstCallback : function(i,sum,me){
					me.find('.dot').children().first().addClass('cur');
				},
				callback : function(i,sum,me){
					me.find('.dot').children().eq(i).addClass('cur').siblings().removeClass('cur');
				}
			})
		})
	</script>
</body>
</html>