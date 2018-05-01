<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"template/wap\default_new\Pay\getPayValue.html";i:1523179936;s:34:"template/wap\default_new\base.html";i:1520390541;s:38:"template/wap\default_new\urlModel.html";i:1510824803;s:46:"template/wap\default_new\controlCopyRight.html";i:1520480587;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var UPLOADCOMMENT = '<?php echo UPLOAD_COMMENT; ?>';// 存放评论
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	img_lazyload();
});

//页面底部选中
function bottomActive(event){
	clearButton();
	if(event == "#bottom_home"){
		$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#bottom_classify"){
		$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#bottom_stroe"){
		$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//图片懒加载
function img_lazyload(){
	$("img.lazy_load").lazyload({
		threshold : 0,
		effect : "fadeIn", //淡入效果
		skip_invisible : false
	})
}
</script>
<style>
body{max-width: 640px;}
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:25%;font-size:14px;}
</style>

<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/get_pay_value.css"/>

</head>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
/**
 * 处理图片路径
 */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray" style="margin:auto;">
	
<section class="head">
	<a class="head_back" href="<?php echo $unpaid_goback; ?>"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo lang('order_payments'); ?></div>
</section>

	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="head-info">
	<div class="head-pay">支付金额</div>
	<div class="head-pay-value">￥<?php echo $pay_value['pay_money']; ?></div>
</div>
<div class="pay-type-item">
	<div class="codes">

		<?php if($pay_config['ali_pay_config']['is_use'] == 0 && $pay_config['wchat_pay_config']['is_use'] == 0 && $pay_config['union_pay_config']['is_use'] == 0): ?>
			<div class="not-pay-type">
				商家未配置支付方式
			</div>
		<?php else: if($pay_config['wchat_pay_config']['is_use']==1): ?>
				<div class="wchat-weixin">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/weifu.png" class="wchat-photo">
					<span class="wchat-title"><?php echo lang('wechat_payment'); ?></span>
					<span id="wchatpay"><img src="__TEMP__/<?php echo $style; ?>/public/images/hgou.png"></span>
				</div>
			<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?>
				<div class="ali-pay">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/zhifu.png" class="ali-photo">
					<span class="ali-item"><?php echo lang('alipay'); ?></span>
					<span id="alipay"><img src="__TEMP__/<?php echo $style; ?>/public/images/hgou.png"></span>
				</div>
			<?php endif; if($pay_config['union_pay_config']['is_use']==1): ?>
				<div class="union-pay">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/yinfu.png" class="ali-photo">
					<span class="ali-item">银联卡支付</span>
					<span class="ali-desc">使用银联卡支付</span>
					<span id="unionpay"><img src="__TEMP__/<?php echo $style; ?>/public/images/hgou.png"></span>
				</div>
			<?php endif; endif; if($pay_config['wchat_pay_config']['is_use']==1): ?> 
		<input type="hidden" id="pay_type" value="0"> 
		<?php elseif($pay_config['ali_pay_config']['is_use']==1): ?>
		<input type="hidden" id="pay_type" value="1"> 
		<?php elseif($pay_config['union_pay_config']['is_use']==1): ?>
		<input type="hidden" id="pay_type" value="2"> 
		<?php else: ?>
		<input type="hidden" id="pay_type" value="-1">
		<?php endif; ?>
		<input type="hidden" id="out_trade_no" value="<?php echo $pay_value['out_trade_no']; ?>">
	</div>
</div>

<?php if($pay_config['ali_pay_config']['is_use'] == 1 || $pay_config['wchat_pay_config']['is_use'] == 1 || $pay_config['union_pay_config']['is_use'] == 1): ?>
	<section class="s-btn">
		<a class="alipay" type="button" onclick="calculate()"><?php echo lang('confirm_payment'); ?></a>
	</section>
<?php endif; ?>

<style>
.footer {
	margin: 0;
	padding: 0;
	min-height: 1px;
	text-align: center;
	line-height: 16px;
	/*background-color: #f8f8f8;*/
}
.ft-copyright {
	padding: 10px 0 10px;
	margin: 0 15px;
	font-size: 12px;
}

.ft-copyright img {
	width: 110px;
	display: block;
	margin: 0 auto;
}
.ft-copyright a{
	color: #ccc;
}
</style>
<div class="footer">
	<div class="copyright" id="bottom_copyright">
		<div class="ft-copyright">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" id="copyright_logo_wap">
			<a href="javascript:;" target="_blank" id="copyright_companyname"></a>
		</div>
		<?php echo $web_info['third_count']; ?>
	</div>
</div>
<script>
var __IMG__ = '__TEMP__/<?php echo $style; ?>/public/images';
$(function(){
	
	$(".pay-type-item .codes>div>span[id]").html("<img src='" + __IMG__ + "/hgou.png'>");
	$(".pay-type-item .codes>div:eq(0)>span[id]").html("<img src='" + __IMG__ + "/segou.png'>");
});
function calculate() {
	var pay_type = $("#pay_type").val();
	var out_trade_no = $("#out_trade_no").val();
	if (pay_type == 0) {
		//微信支付
		window.location.href = __URL("APP_MAIN/pay/wchatpay?no=" + out_trade_no);
	} else if (pay_type == 1) {
		//支付宝支付
		window.location.href = __URL("APP_MAIN/pay/alipay?no=" + out_trade_no);
	}else if (pay_type == 2) {
		//银联卡支付
		window.location.href = __URL("APP_MAIN/pay/unionpay?no=" + out_trade_no);
	}else if(pay_type == -1){
		showBox("<?php echo lang('choose_payment_method'); ?>","warning");
	}
}
$(".alipay").click(function(){
	window.webkit.messageHandlers.calculate.postMessage(null);
})

$(".ali-pay").click(function() {
	$("#pay_type").val(1);
	$("#alipay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#unionpay").html("<img src='" + __IMG__ + "/hgou.png'>");
})

$(".wchat-weixin").click(function() {
	$("#pay_type").val(0);
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#unionpay").html("<img src='" + __IMG__ + "/hgou.png'>");
})

$(".union-pay").click(function() {
	$("#pay_type").val(2);
	$("#unionpay").html("<img src='" + __IMG__ + "/segou.png'>");
	$("#alipay").html("<img src='" + __IMG__ + "/hgou.png'>");
	$("#wchatpay").html("<img src='" + __IMG__ + "/hgou.png'>");
})

</script>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>