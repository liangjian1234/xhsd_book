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
<body ontouchstart class="xhsd_wait_pay">
	<!-- 头部 -->
	<div class="weui-header bg-green"> 
  		<div class="weui-header-left"> <a class="icon icon-109 f-white" onclick="history.go(-1)">返回</a>  </div>
   		<h1 class="weui-header-title">待支付订单</h1>
    	<!-- <div class="weui-header-right"><a class="icon icon-83 f-white">更多</a></div>  -->
    </div>

    <div class="wait_pay_list">
        <div class="weui-form-preview">
            <div class="weui-form-preview-hd">
                <label class="weui-form-preview-label">待付金额</label>
                <em class="weui-form-preview-value">¥2400.00</em>
            </div>
            <div class="weui-form-preview-bd">
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">我的那些日子</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
            </div>
            <div class="weui-form-preview-ft">
                <a class="weui-form-preview-btn weui-form-preview-btn-default f-red" href="javascript:" onclick="order_cancel()">取消订单</a>
                <a class="weui-form-preview-btn weui-form-preview-btn-primary" href="<?php echo U('order');?>">前往支付</a>
            </div>
        </div>
    </div>

    <div class="wait_pay_list">
        <div class="weui-form-preview">
            <div class="weui-form-preview-hd">
                <label class="weui-form-preview-label">待付金额</label>
                <em class="weui-form-preview-value">¥2400.00</em>
            </div>
            <div class="weui-form-preview-bd">
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">我的那些日子</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
                <div class="weui-flex tcenter">
                    <div class="weui-flex-item">陪你走过那些日子啊</div>
                    <div class="weui-flex-item">1件</div>
                    <div class="weui-flex-item">&yen;99.99</div>
                </div>
            </div>
            <div class="weui-form-preview-ft">
                <a class="weui-form-preview-btn weui-form-preview-btn-default f-red" href="javascript:" onclick="order_cancel()">取消订单</a>
                <a class="weui-form-preview-btn weui-form-preview-btn-primary" href="<?php echo U('order');?>">前往支付</a>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function order_cancel(){
            $.confirm("您确定要取消订单吗?", "确认取消订单?", function() {
                $.toast("订单取消成功");
            }, function() {
                //取消操作
            });
        }
    </script>

</body>
</html>