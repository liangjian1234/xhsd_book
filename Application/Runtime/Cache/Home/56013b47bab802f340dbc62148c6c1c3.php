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
<body ontouchstart class="xhsd_order_complete">
	<!-- 头部 -->
	<div class="weui-header bg-green"> 
  		<div class="weui-header-left"> <a class="icon icon-109 f-white" onclick="history.go(-1)">返回</a>  </div>
   		<h1 class="weui-header-title">已完成订单</h1>
    	<!-- <div class="weui-header-right"><a class="icon icon-83 f-white">更多</a></div>  -->
    </div>

    <div class="order_complete_list">
        <div class="weui-flex">
            <div class="weui-flex-item tleft">
                新华书店
            </div>
            <div class="weui-flex-item tright">
                删除
            </div>
        </div>
        <div class="weui-flex tcenter" onclick="location.href='<?php echo U('order_detail');?>'">
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
        </div>
        <div class="weui-flex" onclick="location.href='<?php echo U('order_detail');?>'">
            <div class="weui-flex-item tright">共5件商品 实付款：&yen;999.99</div>
        </div>
    </div>

    <div class="order_complete_list">
        <div class="weui-flex">
            <div class="weui-flex-item tleft">
                新华书店
            </div>
            <div class="weui-flex-item tright">
                删除
            </div>
        </div>
        <div class="weui-flex tcenter" onclick="location.href='<?php echo U('order_detail');?>'">
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
            <div class="weui-flex-item"><img src="/Public/Home/images/icon.png"></div>
        </div>
        <div class="weui-flex" onclick="location.href='<?php echo U('order_detail');?>'">
            <div class="weui-flex-item tright">共5件商品 实付款：&yen;999.99</div>
        </div>
    </div>

</body>
</html>