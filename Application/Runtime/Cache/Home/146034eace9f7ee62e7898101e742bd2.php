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
</head>
<body ontouchstart class="xhsd_profile">
	<!-- 手机信息 -->
	<div class="profile_phone bg-blue">
		<div class="weui-flex">
			<div class="weui-flex-item">
				手机号码：18761669363
			</div>
		</div>
		<div class="weui-flex">
			<div class="weui-flex-item">
				会员卡号：18761669363
			</div>
		</div>
	</div>

	<h4>我的</h4>
   	<div class="weui_grids grids-small"  >
        <a href="car.html" class="grid"  >
            <div class="weui_grid_icon">
                <img src="/Public/Home/images/icon_nav_button.png" alt="">
            </div>
            <p class="weui_grid_label">
                购物车
            </p>
        </a>
        <a href="wait_pay.html" class="grid"  >
            <div class="weui_grid_icon">
                <img src="/Public/Home/images/icon_nav_button.png" alt="">
            </div>
            <p class="weui_grid_label">
                待支付
            </p>
        </a>
        <a href="order_complete.html" class="grid"  >
            <div class="weui_grid_icon">
                <img src="/Public/Home/images/icon_nav_button.png" alt="">
            </div>
            <p class="weui_grid_label">
                已完成
            </p>
        </a>
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
        $('.tab-bottom .weui_tabbar_item:last').addClass('weui_bar_item_on');
    </script>
</body>
</html>