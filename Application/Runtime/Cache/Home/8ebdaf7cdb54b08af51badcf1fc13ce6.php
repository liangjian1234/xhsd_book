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
<body ontouchstart class="xhsd_order_detail">
	<!-- 头部 -->
	<div class="weui-header bg-green"> 
  		<div class="weui-header-left"> <a class="icon icon-109 f-white" onclick="history.go(-1)">返回</a>  </div>
   		<h1 class="weui-header-title">订单详情</h1>
    	<!-- <div class="weui-header-right"><a class="icon icon-83 f-white">更多</a></div>  -->
    </div>

    <div class="order_detail_list">
        <div class="weui-flex order_detail_list_title">
            <div class="weui-flex-item tleft">新华书店</div>
        </div>
        <div class="weui-flex order_detail_list_body">
            <div class="weui-flex-item">
                <img src="/Public/Home/images/icon.png">
            </div>
            <div class="weui-flex-item">
                <p>我的那些日子</p>
                <p>数量：1</p>
                <p>价格：99.99</p>
            </div>
        </div>
        <div class="weui-flex order_detail_list_body">
            <div class="weui-flex-item">
                <img src="/Public/Home/images/icon.png">
            </div>
            <div class="weui-flex-item">
                <p>我的那些日子</p>
                <p>数量：1</p>
                <p>价格：99.99</p>
            </div>
        </div>
    </div>

    <div class="order_detail_no b_b">
        <div class="weui-flex">
            <div class="weui-flex-item">订单编号：21314654984151351</div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex-item">下单时间：2017/08/09 20:20:20</div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex-item">订单状态：已完成</div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex-item">支付金额：&yen; 199.99</div>
        </div>
    </div>

    <div class="order_detail_code">
        <div class="weui-flex b_b">
            <div class="weui-flex-item tleft">
                扫码消磁
            </div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex-item tcenter">
                <img src="/Public/Home/images/advancina.png" >
            </div>
        </div>
    </div>
</body>
</html>