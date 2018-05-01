<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"template/wap\default_new\Order\orderDetail.html";i:1520494443;s:34:"template/wap\default_new\base.html";i:1520390541;s:38:"template/wap\default_new\urlModel.html";i:1510824803;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/order.js" type="text/javascript"></script>

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
		<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
		<div class="head-title"></div>
	</section>
	
	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="main myorder">
	<section class="head">
		<a class="head_back" href="<?php echo __URL('APP_MAIN/order/myorderlist'); ?>"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('member_order_details'); ?></div>
	</section>
</div>
<div class="order-detail mt-45">
	<section class="order-detail-infor">
		<div class="order-detail-sum clear">
			<div class="sum-r order-detail-r">
				<ul class="sum-r-ul">
					<li><span class="status"><?php echo $order['status_name']; ?></span></li>
					<li><span class="label"><?php echo lang('order_number'); ?>：</span><span class="value"><?php echo $order['order_no']; ?></span></li>
					<li><span class="label"><?php echo lang('member_order_status'); ?>：</span><span class="value"><?php echo $order['status_name']; ?></span></li>
					<li><span class="label"><?php echo lang('order_time'); ?>：</span><span class="value"><?php echo getTimeStampTurnTime($order['create_time'] ); ?></span></li>
					<li><span class="label"><?php echo lang('member_payment_method'); ?>：</span><span class="value"><?php echo $order['payment_type_name']; ?></span></li>
					<li><span class="label"><?php echo lang('member_payment_status'); ?>：</span><span class="value"><?php echo $order['pay_status_name']; ?></span></li>
					<li><span class="label"><?php echo lang('member_delivery_mode'); ?>：</span><span class="value"><?php echo $order['shipping_type_name']; ?></span></li>
					<li><span class="label"><?php echo lang('delivery_time'); ?>：</span><span class="value"><?php if($order['shipping_time']>0): ?><?php echo getTimeStampTurnTimeByYmd($order['shipping_time']); else: ?><?php echo lang('days_and_holidays_can_be_delivered'); endif; ?></span></li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="order-detail-address">
		<div class="address-out clear">
			<div class="address-l order-detail-l">
				<i class="icon-address-small"></i>
			</div>
			<div class="address-r order-detail-r">
				<ul class="address-r-ul">
					<?php switch($order['shipping_type']): case "1":case "3": ?>
						<li class="name">
							<span class="label"><?php echo lang('member_delivery_address'); ?>：</span>
							<span class="value" style="line-height: 150%;"><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php if(!(empty($order['fixed_telephone']) || (($order['fixed_telephone'] instanceof \think\Collection || $order['fixed_telephone'] instanceof \think\Paginator ) && $order['fixed_telephone']->isEmpty()))): ?><?php echo $order['fixed_telephone']; ?>，<?php endif; ?> <?php echo $order['address']; ?>&nbsp;<?php if($order['receiver_zip']!=''): ?>&nbsp;，<?php echo $order['receiver_zip']; endif; ?></span>
						</li>
						<?php break; case "2": ?>
						<li class="name">
							<span class="label"><?php echo lang('member_self_addressed_address'); ?>：</span>
							<span class="value"><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['dictrict_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></span>
						</li>
						<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): if(!empty($order['buyer_invoice_info'][0]) && $order['buyer_invoice_info'][0] != ''): ?>
						<li class="name">
							<span class="label"><?php echo lang('member_invoice_header'); ?>：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][0]; ?></span>
						</li>
						<?php endif; if(!empty($order['buyer_invoice_info'][2]) && $order['buyer_invoice_info'][2] != ''): ?>
						<li class="name">
							<span class="label"><?php echo lang('member_taxpayer_identification_number'); ?>：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][2]; ?></span>
						</li>
						<?php endif; if(!empty($order['buyer_invoice_info'][1]) && $order['buyer_invoice_info'][1] != ''): ?>
						<li class="name">
							<span class="label"><?php echo lang('member_invoice_content'); ?>：</span>
							<span class="value"><?php echo $order['buyer_invoice_info'][1]; ?></span>
						</li>
						<?php endif; endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php if($order['shipping_type'] != 3): if($express_count > 0): ?>
		<section class="order-detail-remark">
			<div class="remark-out clear">
	<!-- 			<div class="remark-l order-detail-l"> -->
	<!-- 				<i class="icon-talks-smalls"></i> -->
	<!-- 			</div> -->
				<div class="remark-r order-detail-r">
					<ul class="remark-r-ul">
						<li class="name">
							<a href="<?php echo __URL('APP_MAIN/order/orderexpress?orderId='.$order['order_id']); ?>">
								<span class="label" style="color: rgb(245, 183, 8);"><?php echo lang('goods_total'); ?><?php echo $express_count; ?><?php echo lang('of_parcels'); ?></span>
								<span class="label" style="color: rgb(245, 183, 8);"><?php echo $express_name; ?></span>
								<?php if($is_show_express_code): ?>
								<span class="label" style="color: rgb(245, 183, 8);"><?php echo lang('member_waybill_number'); ?>:<?php echo $express_code; ?></span>
								<?php endif; ?>
								<span style="float:right;width:7px;"><img src="__TEMP__/<?php echo $style; ?>/public/images/goods_right.png"/></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<?php endif; else: if($order['shipping_type'] == 3 && $order['shipping_status'] == 1): ?>
		<section class="order-detail-remark">
			<div class="remark-out clear">
				<div class="remark-r order-detail-r distribution-info">
					<p>配送单号：<?php echo $order['distribution_info']['express_no']; ?></p>
					<p>配送人：<?php echo $order['distribution_info']['order_delivery_user_name']; ?></p>  
					<p>配送人手机号：<?php echo $order['distribution_info']['order_delivery_user_mobile']; ?></p>
					<p>备注：<?php echo $order['distribution_info']['remark']; ?> </p>
				</div>
			</div>
		</section>
		<?php endif; endif; ?>

	<section class="order-detail-remark">
		<div class="remark-out clear">
			<div class="remark-l order-detail-l">
				<i class="icon-talks-small"></i>
			</div>
			<div class="remark-r order-detail-r">
				<ul class="remark-r-ul">
					<li class="name">
						<span class="label"><?php echo lang('member_buyer_message'); ?></span>
					</li>
					<li>
						<?php if($order['buyer_message'] !=''): ?>
						<span class="label"><?php echo $order['buyer_message']; ?></span>
						<?php else: ?>
						<span class="label"><?php echo lang('member_no_messages'); ?></span>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	<div class="list-myorder">
		<ul class="ul-product">
			<?php if(is_array($order['order_goods']) || $order['order_goods'] instanceof \think\Collection || $order['order_goods'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsData): $mod = ($i % 2 );++$i;?>
			<li onclick="location.href='<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goodsData['goods_id']); ?>'">
				<span class="pic"><img src="<?php echo __IMG($goodsData['picture_info']['pic_cover_micro']); ?>" /></span>
				<div class="text">
					<span class="pro-name">
						<span style="color:#333333;"><?php echo $goodsData['goods_name']; ?></span>
						<?php if($goodsData['sku_name'] != ''): ?>
						<span style="color:#333333;"><?php echo $goodsData['sku_name']; ?></span>
						<?php endif; ?>
					</span>
					<br/>
					<div class="pro-pric">
						<span><?php echo lang('goods_price'); ?>:</span>
						<span style="color:#333333;">￥<?php echo $goodsData['price']; ?></span>
						<?php if($goodsData['gift_flag'] > 0): ?>
						<i style="font-size:12px;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#de533c;height:16px;line-height: 16px;overflow:hidden;font-style:normal;margin-left:5px;position:relative;top:3px;">赠品</i>
						<?php endif; ?>
					</div>
					<div class="pro-pric">
						<span class="color"></span>
						<span><?php echo lang('goods_number'); ?>:</span>
						<span style="color:#333333;"><?php echo $goodsData['num']; ?></span>
					</div>
					<div class="pro-pric">
						<span><?php echo lang('adjust_price'); ?>:</span>
						<span style="color:#333333;"><?php echo $goodsData['adjust_money']; ?></span>
					</div>
<!-- 					<div class="pro-return"></div> -->
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="money-content">
			<div class="money-row">
				<div>
					<span><?php echo lang('member_total_commodity_value'); ?>：</span>
					<span class="price">￥<?php echo $order['goods_money']; ?></span>
				</div>
				
				<div>
					<span><?php echo lang('goods_freight'); ?></span>
					<span class="price">￥<?php echo $order['shipping_money']; ?></span>
				</div>
				
				<?php if($order['user_platform_money']>0): ?>
				<div>
					<span><?php echo lang('member_balance_payment'); ?>：</span>
					<span class="price">￥<?php echo $order['user_platform_money']; ?></span>
				</div>
				<?php endif; if($order['coupon_money']>0): ?>
				<div>
					<span><?php echo lang('member_coupons'); ?>：</span>
					<span class="price">￥<?php echo $order['coupon_money']; ?></span>
				</div>
				<?php endif; if($order['tax_money']>0): ?>
				<div>
					<span><?php echo lang('member_invoice_tax'); ?>：</span>
					<span class="price">￥<?php echo $order['tax_money']; ?></span>
				</div>
				<?php endif; if($order['promotion_money']>0): ?>
				<div>
					<?php switch($order['promotion_type']): case "MANJIAN": ?><span><?php echo lang('member_full_discount'); ?>：</span><?php break; case "ZUHETAOCAN": ?><span><?php echo lang('member_taocan_discount'); ?>：</span><?php break; endswitch; ?>
					<span class="price">￥<?php echo $order['promotion_money']; ?></span>
				</div>
				<?php endif; if($order['point']>0): ?>
				<div>
					<span><?php echo lang('member_use_integral'); ?>：</span>
					<span class="price"><?php echo $order['point']; ?></span>
				</div>
				<?php endif; ?>
				
				<div>
					<span><?php echo lang('member_actual_payment'); ?>：</span>
					<span class="price"><b style="color:#f44;">￥<?php echo $order['pay_money']; ?></b></span>
				</div>
			</div>
		</div>
		
	</div>

	<div class="order-tablink">
		<div class="tablink-box">
			<div class="tablink">
				<a href="<?php echo $list['value']['service_addr']; ?>"><span class="kefu">联系客服</span></a>
			</div>
			<div class="tablink">
				<a href="tel:<?php echo $list['value']['web_phone']; ?>"><span class="call">拨打电话</span></a>
			</div>
		</div>
	</div>
</div>


<?php if(count($order['member_operation']) > 0): ?>
<div style="height: 55px;"></div>
<div class="order-opcation">
	<div class="content">
		<?php if(is_array($order['member_operation']) || $order['member_operation'] instanceof \think\Collection || $order['member_operation'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['member_operation'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<a href="javascript:;" onclick="operation('<?php echo $vo['no']; ?>',<?php echo $order['order_id']; ?>)" style="background: <?php echo $vo['color']; ?>;border-color: <?php echo $vo['color']; ?>"><?php echo $vo['name']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<?php endif; ?>
<!-- <div class="bottom-btn-row clear"></div> -->

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>