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
<body ontouchstart class="xhsd_search">
	<!-- 搜索 -->
	<div class="weui_search_bar">
		<input type="search" class="search-input" id='search' placeholder='关键字' style="box-sizing:content-box"/>
		<button  class="weui_btn weui_btn_mini weui_btn_primary"><i class="icon icon-4"></i></button>    
	</div>

	<!-- 搜索结果 -->
	<div class="book-lists">
		<a class="book-list-l" href="<?php echo U('book');?>">
			<div class="weui-flex">
				<div class="weui-flex-item tcenter">
					<img src="/Public/Home/images/icon.png" style="height:100px;width:80px;margin:10px auto">
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-title">
					我的那些日子dasdasdasdasdasdasdasd
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-price" >
					<font color="red">&yen; 800</font>
				</div>
				<div class="weui-flex-item book-read" >
					浏览 190
				</div>
			</div>
		</a>
		<a class="book-list-r" href="<?php echo U('book');?>">
			<div class="weui-flex">
				<div class="weui-flex-item tcenter">
					<img src="/Public/Home/images/icon.png" style="height:100px;width:80px;margin:10px auto">
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-title">
					我的那些日子dasdasdasdasdasdasdasd
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-price" >
					<font color="red">&yen; 800</font>
				</div>
				<div class="weui-flex-item book-read" >
					浏览 190
				</div>
			</div>
		</a>
		<a class="book-list-l" href="<?php echo U('book');?>">
			<div class="weui-flex">
				<div class="weui-flex-item tcenter">
					<img src="/Public/Home/images/icon.png" style="height:100px;width:80px;margin:10px auto">
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-title">
					我的那些日子dasdasdasdasdasdasdasd
				</div>
			</div>
			<div class="weui-flex">
				<div class="weui-flex-item book-price" >
					<font color="red">&yen; 800</font>
				</div>
				<div class="weui-flex-item book-read" >
					浏览 190
				</div>
			</div>
		</a>
		<div class="clearfix"></div>
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
	</script>
</body>
</html>