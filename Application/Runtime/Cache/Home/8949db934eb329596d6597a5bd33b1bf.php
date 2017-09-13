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
<body ontouchstart class="xhsd_order">
	<!-- 头部 -->
	<div class="weui-header bg-green"> 
  		<div class="weui-header-left"> <a class="icon icon-109 f-white" onclick="history.go(-1)">返回</a>  </div>
   		<h1 class="weui-header-title">确认订单</h1>
    	<!-- <div class="weui-header-right"><a class="icon icon-83 f-white">更多</a></div>  -->
    </div>

    <!-- 订单列表 -->
    <div class="weui_cells order_lists">         
        <div class="weui_cells_title">订单详情</div>
        <div class="weui_cell">
            <div class="weui_cell_hd">
            	<img src="/Public/Home/images/icon.png" alt="" style="">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <div class="weui-flex tcenter">
                	<div class="weui-flex-item order_lists_title">我的那些日子</div>
                	<div class="weui-flex-item f-red">&times; <span class="">2</span></div>
                	<div class="weui-flex-item f-red">&yen; <span class="">2000.00</span></div>
                </div>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd">
            	<img src="/Public/Home/images/icon.png" alt="" style="">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <div class="weui-flex tcenter">
                	<div class="weui-flex-item order_lists_title">我的那些日子</div>
                	<div class="weui-flex-item f-red">&times; <span class="">2</span></div>
                	<div class="weui-flex-item f-red">&yen; <span class="">2000.00</span></div>
                </div>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd">
            	<img src="/Public/Home/images/icon.png" alt="" style="">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <div class="weui-flex tcenter">
                	<div class="weui-flex-item order_lists_title">我的那些日子</div>
                	<div class="weui-flex-item f-red">&times; <span class="">2</span></div>
                	<div class="weui-flex-item f-red">&yen; <span class="">2000.00</span></div>
                </div>
            </div>
        </div>
    </div>

	<!-- 底部 -->
	<div class="bot_height"></div>
	<div class="xhsd_order_bottom tcenter">
		<div class="weui-flex">
			<div class="weui-flex-item">
				共计：<span class="f-red">2</span>件
			</div>
			<div class="weui-flex-item">
				<span class="f-red">&yen; </span><span class="f-red">1000.99</span>
			</div>
			<div class="weui-flex-item">
				<div class="bg-red f-white" onclick="location.href='pay_success.html'">立即支付</div>
			</div>
		</div>
	</div>
</body>
</html>