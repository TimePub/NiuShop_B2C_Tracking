<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"template/wap\default_new\Order\paymentOrder.html";i:1523428015;s:34:"template/wap\default_new\base.html";i:1520390541;s:38:"template/wap\default_new\urlModel.html";i:1510824803;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/order.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_new.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/payment_order_popup.css">

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
	<a class="head_back" href="<?php echo __URL('APP_MAIN'); ?>"><i class="icon-back"></i></a>
	<div class="head-title"><?php echo lang('order_settlement'); ?></div>
</section>

	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="h50"></div>
<!-- 创建订单：选择收货地址 虚拟商品不需要选择 -->
<?php if($order_goods_type == 1): if($address_default['id'] != ''): ?>
	<div id="addressok">
		<input type="hidden" id="addressid" value="<?php echo $address_default['id']; ?>" />
		<div class="js-order-address express-panel js-edit-address express-panel-edit">
			<ul class="express-detail">
				<?php if($order_tag == 'pintuan'): ?>
				<a href="<?php echo __URL('APP_MAIN/member/memberaddress?url=cart&flag=4'); ?>">
				<?php else: ?>
				<a href="<?php echo __URL('APP_MAIN/member/memberaddress?url=cart'); ?>">
				<?php endif; ?>
					<li class="clearfix">
						<span class="name"><?php echo lang('member_consignee'); ?>：<?php echo $address_default['consigner']; ?></span>
						<span class="tel"><?php echo $address_default['mobile']; ?></span>
					</li>
					<li class="address-detail"><?php echo lang('member_delivery_address'); ?>：<?php echo $address_default['address_info']; ?>-<?php echo $address_default['address']; ?></li>
				</a>
			</ul>
		</div>
	</div>
	<?php else: ?>
	<div class="empty-address-tip">
		<div id="noaddress">
			<?php if($order_tag == 'pintuan'): ?>
				<a href="<?php echo __URL('APP_MAIN/member/memberaddress?url=cart&flag=4'); ?>">
			<?php else: ?>
				<a href="<?php echo __URL('APP_MAIN/member/memberaddress?url=cart'); ?>">
			<?php endif; ?>
			<?php echo lang('member_new_delivery_address'); ?></a></div>
	</div>
	<?php endif; ?>
	<div class="block-item express" style="padding: 0;"></div>
<?php endif; ?>

<section class="order">
	<!-- 创建订单：商品信息  立即购买和购物车商品信息一致 只有这两种方式有赠品 -->
	<?php if(in_array(($order_tag), explode(',',"buy_now,cart,groupbuy,virtual_goods,combination_packages,pintuan,js_point_exchange,goods_presell"))): if(in_array(($order_tag), explode(',',"buy_now,cart,groupbuy,virtual_goods,combination_packages,pintuan,goods_presell"))): if(is_array($itemlist) || $itemlist instanceof \think\Collection || $itemlist instanceof \think\Paginator): if( count($itemlist)==0 ) : echo "" ;else: foreach($itemlist as $key=>$list): ?>
				<div class="order-goods-item clearfix" data-subtotal="<?php echo $list['subtotal']; ?>">
					<div class="name-card block-item">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>" class="thumb">
							<img src="<?php echo __IMG($list['picture_info']['pic_cover_small']); ?>" alt="<?php echo $list['goods_name']; ?>" />
						</a>
						<div class="detail">
							<div class="clearfix detail-row">
								<div class="right-col">
									<input type="hidden" name="goods_skuid" value="<?php echo $list['sku_id']; ?>" />
									<input type="hidden" name="goods_point_exchange"/>
									￥<span><?php echo $list['price']; if($list['point_exchange_type']==1): if($list['point_exchange']>0): ?>
											+<?php echo $list['point_exchange']; ?><?php echo lang('goods_integral'); endif; endif; ?>
									</span>
								</div>
								<div class="left-col">
									<h3 style="font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;">
										<a href="javascript:;"><?php echo $list['goods_name']; ?></a>
									</h3>
								</div>
							</div>
							<div class="clearfix detail-row">
								<div class="right-col">
									<div class=" c-gray-darker">
										×<span><?php echo $list['num']; ?></span>
									</div>
								</div>
								<div class="left-col">
									<p class="c-gray-darker" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;"><?php if($list['sku_name'] != '0'): ?><?php echo $list['sku_name']; endif; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>

		<!-- 积分兑换 -->
		<?php if($order_tag == "js_point_exchange"): if(is_array($itemlist) || $itemlist instanceof \think\Collection || $itemlist instanceof \think\Paginator): if( count($itemlist)==0 ) : echo "" ;else: foreach($itemlist as $key=>$list): ?>
			<div class="order-goods-item clearfix" data-subtotal="<?php echo $list['subtotal']; ?>">
				<div class="name-card block-item">
					<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>" class="thumb">
						<img src="<?php echo __IMG($list['picture_info']['pic_cover_small']); ?>" alt="<?php echo $list['goods_name']; ?>" />
					</a>
					<div class="detail">
						<div class="clearfix detail-row">
							<div class="right-col">
								<input type="hidden" name="goods_skuid" value="<?php echo $list['sku_id']; ?>" />
								<input type="hidden" name="goods_point_exchange"/>
								<?php if($point_exchange_type == 1): ?>
								￥<span><?php echo $list['price']; if($list['point_exchange_type']==1): if($list['point_exchange']>0): ?>
										+<?php echo $list['point_exchange']; ?><?php echo lang('goods_integral'); endif; endif; ?>
								</span>
								<?php else: ?>
								<span><?php echo $list['point_exchange']; ?><?php echo lang('goods_integral'); ?></span>
								<?php endif; ?>
							</div>
							<div class="left-col">
								<h3 style="font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;">
									<a href="javascript:;"><?php echo $list['goods_name']; ?></a>
								</h3>
							</div>
						</div>
						<div class="clearfix detail-row">
							<div class="right-col">
								<div class=" c-gray-darker">
									×<span><?php echo $list['num']; ?></span>
								</div>
							</div>
							<div class="left-col">
								<p class="c-gray-darker" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;"><?php if($list['sku_name'] != '0'): ?><?php echo $list['sku_name']; endif; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>

		<!-- 赠品 -->
		<?php if(in_array(($order_tag), explode(',',"buy_now,cart"))): if(count($goods_mansong_gifts) > 0): if(is_array($goods_mansong_gifts) || $goods_mansong_gifts instanceof \think\Collection || $goods_mansong_gifts instanceof \think\Paginator): if( count($goods_mansong_gifts)==0 ) : echo "" ;else: foreach($goods_mansong_gifts as $k=>$gift_info): ?>
				<div class="order-goods-item clearfix">
					<div class="name-card block-item">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/gift.png" alt="" class="gift">
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$gift_info['gift_goods']['goods_id']); ?>" class="thumb">
							<img src="<?php echo __IMG($gift_info['gift_goods']['picture_info']['pic_cover_small']); ?>" alt="<?php echo $gift_info['gift_goods']['goods_name']; ?>" />
						</a>
						<div class="detail">
							<div class="clearfix detail-row">
								<div class="right-col">
									<input type="hidden" name="goods_point_exchange"/>
									￥<s><?php echo $gift_info['gift_goods']['price']; ?></s>
								</div>
								<div class="left-col">
									<h3 style="font-weight: normal;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;">
										<a href="javascript:;"><?php echo $gift_info['gift_goods']['goods_name']; ?></a>
									</h3>
								</div>
							</div>
							<div class="clearfix detail-row">
								<div class="right-col">
									<div class=" c-gray-darker">
										×<span><?php echo $gift_info['count']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; endif; endif; endif; ?>

	<!-- 创建订单：账号信息 只有虚拟订单需要 -->
	<?php if($order_goods_type == 0): ?>
		<div class="item-options" style="line-height: 30px;">
			<label><span style="font-size:12px;color:#FF9800;font-weight:bold;"><?php echo lang('order_user_phone_tip'); ?></span></label>
		</div>
		
		<div class="item-options">
			<label><?php echo lang('member_phone_number'); ?></label>
			<input type="text" id="user_telephone" value="<?php echo $user_telephone; ?>" placeholder="手机号码" style="border:none;"/>
		</div>
		<div class="dividing-line"><!-- 分隔行 --></div>
	<?php endif; ?>

	<!-- 创建订单：支付方式 -->
	<?php if($order_goods_type == 1): ?>
	<div class="item-options" data-flag="pay" data-select="0">
		<label><?php echo lang('member_payment_method'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('member_online_payment'); ?></span>
	</div>
	<?php else: ?>
	<div class="item-options">
		<label><?php echo lang('member_payment_method'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('member_online_payment'); ?></span>
	</div>
	<?php endif; ?>
	
	<!-- 创建订单：配送方式 -->
	<?php if($order_goods_type == 1): ?>
		<div class="dividing-line"><!-- 分隔行 --></div>
		<div class="item-options" data-flag="distribution" data-select="0">
			<label><?php echo lang('member_delivery_mode'); ?></label>
			<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting']): ?>
			<span class="color-gray"><?php echo lang('member_not_configure_distribution'); ?></span>
			<?php else: if($shop_config['seller_dispatching']): ?>
				<span class="arrow-right color-gray"><?php echo lang('member_merchant_distribution'); ?></span>
				<?php elseif($shop_config['buyer_self_lifting']): ?>
				<span class="arrow-right color-gray"><?php echo lang('member_stores_from_mentioning'); ?></span>
				<?php endif; endif; ?>
		</div>
		<!-- 开启商家配送并且有物流公司显示 -->
		<?php if($shop_config['seller_dispatching']): if($address_is_have == 1): if($express_company_count == 0): ?>
				<div class="item-options" data-flag="express_company" data-select="-1">
					<label><?php echo lang('member_logistics_company'); ?></label>
					<span class="arrow-right color-gray"><?php echo lang('member_not_set_up'); ?></span>
				</div>
				<?php elseif(count($express_company_list)): if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): if($k==0): ?>
				<div class="item-options" data-flag="express_company" data-select="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
					<label><?php echo lang('member_logistics_company'); ?></label>
					<span class="arrow-right color-gray"><?php echo $company['company_name']; ?></span>
				</div>
				<?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
				<div class="item-options" data-flag="express_company" data-select="-2">
					<label><?php echo lang('member_logistics_company'); ?></label>
					<span class="arrow-right color-gray"><?php echo lang('member_not_freight_template'); ?></span>
				</div>
				<?php endif; else: ?>
				<div class="item-options" data-flag="express_company" data-select="-2">
					<label><?php echo lang('member_logistics_company'); ?></label>
					<span class="arrow-right color-gray"><?php echo lang('please_fill_in_or_select_the_delivery_address_first'); ?></span>
				</div>
			<?php endif; endif; ?>
		
		<!-- 选择自提地址 -->
		<div class="item-options" data-flag="pickup_address" data-id="0" data-count="<?php echo $pickup_point_list['total_count']; ?>" style="display:none;">
			<label><?php echo lang('member_self_addressed_address'); ?></label>
			<span class="arrow-right color-gray"></span>
		</div>
		
		<!-- 配送时间 -->
		<?php if($shop_config['order_designated_delivery_time']): ?>
		<div class="item-options" data-flag="shipping_time" style="display:none;">
			<label><?php echo lang('delivery_time'); ?></label>
			<div id="shipping_time">
				<input type="hidden" class="item-options" data-flag="shipping_time"/>
				<span class="time" data-default="<?php echo lang('days_and_holidays_can_be_delivered'); ?>"><?php echo lang('days_and_holidays_can_be_delivered'); ?></span>
				<span class="update"><?php echo lang('modify'); ?></span>
				<span class="delete"><?php echo lang('delete'); ?></span>
			</div>
		</div>
		<?php endif; ?>
		
		<!-- 本地配送时间 -->
		<?php if($shop_config['is_open_o2o'] == 1 && $distribution_time != ''): ?>
		<div class="item-options" id="distribution_time" style="display:none;">
			<label><?php echo lang('delivery_time'); ?></label>
			<div >
				<?php echo $distribution_time; ?>
			</div>
		</div>
		<?php endif; endif; ?>

	<div class="dividing-line"><!-- 分隔行 --></div>
	<!-- 优惠券 -->
	<?php if(in_array(($order_tag), explode(',',"buy_now,cart,virtual_goods"))): if(count($coupon_list) >0): ?>
		<div class="item-options" data-flag="use-coupon">
			<label class="float_left"><?php echo lang('member_coupons'); ?></label>
			<span class="arrow-right color-gray"><?php echo lang('member_no_coupons'); ?></span>
		</div>
		<?php endif; endif; ?>
	<!-- 余额支付 -->
	<?php if($shop_config['order_balance_pay'] == 1): ?>
	<div class="item-options">
		<label><?php echo lang('member_use_balance'); ?><b class="account_balance">￥<?php echo $member_account['balance']; ?></b></label>
		<span>
			<?php echo lang('use'); ?><input type="text" id="account_balance" data-max="<?php echo $member_account['balance']; ?>" placeholder="0.00"/><?php echo lang('element'); ?>
		</span>
	</div>
	<?php endif; ?>
	<!-- 使用积分 -->
	<?php if($point_config["is_open"] == 1): ?>
	<div class="item-options">
		<label><?php echo lang('existing_integral'); ?><b class="account_point"><?php echo $member_account['point']; ?></b></label>
		<span>
			<?php echo lang('use'); ?><input type="number" id="use_point" value="<?php echo $default_use_point; ?>"/>个
		</span>
	</div>
	<?php endif; ?>
	<div class="dividing-line"><!-- 分隔行 --></div>
	
	<!-- 发票信息 -->
	<?php if(count($shop_config['order_invoice_content_list'])): ?>
	<div class="item-options" data-flag="invoice" data-select="0">
		<label><?php echo lang('member_invoice_information'); ?><span style="font-size:12px;color:#FF9800;font-weight:bold;"></span></label>
		<span class="arrow-right color-gray"><?php echo lang('member_no_invoice_required'); ?></span>
	</div>
	
	<div class="item-options invoice">
		<label><span style="font-size:12px;color:#FF9800;font-weight:bold;"><?php echo lang('will_collect'); ?><?php echo $shop_config['order_invoice_tax']; ?>%<?php echo lang('member_invoice_tax_rate'); ?></span></label>
	</div>
	
	<div class="item-options invoice">
		<label><?php echo lang('member_invoice_header'); ?></label>
		<textarea id="invoice-title" maxlength="50" placeholder="<?php echo lang('member_personal_or_company_invoice'); ?>"></textarea>
	</div>
	
	<div class="item-options invoice">
		<label><?php echo lang('member_taxpayer_identification_number'); ?></label>
		<textarea id="taxpayer-identification-number" maxlength="50" placeholder="<?php echo lang('member_taxpayer_identification_number'); ?>"></textarea>
	</div>
	
	
	<div class="item-options invoice" data-flag="invoice-content">
		<label><?php echo lang('member_invoice_content'); ?></label>
		<span class="arrow-right color-gray"><?php echo lang('select_invoice_content'); ?></span>
	</div>
	<?php endif; ?>
	
	<!-- 买家留言 -->
	<div class="item-options">
		<label><?php echo lang('member_buyer_message'); ?></label>
		<textarea id="leavemessage" placeholder="<?php echo lang('leave_a_message_for_the_seller'); ?>" maxlength="100"></textarea>
	</div>
	
	<!-- 结算信息 -->
	<div class="dividing-line"><!-- 分隔行 --></div>
	<h3 class="order-settlement"><?php echo lang('member_settlement_information'); ?></h3>	
	<div class="order-list">
		<!-- 总计 -->
		<?php if($order_tag == 'combination_packages'): ?>
		<p>
			<label><?php echo lang('member_total'); ?></label>
			<span>￥<b><?php echo $combo_package_price; ?></b></span>
		</p>
		<?php else: ?>
		<p>
			<label><?php echo lang('goods_total'); ?><b class="orange-bold js-goods-num">1</b><?php echo lang('member_kinds_of_goods'); ?>&nbsp;<?php echo lang('member_total'); ?></label>
			<span>￥<b class="js-total-money">0.00</b></span>
		</p>
		<?php endif; ?>
		<!-- 运费 -->
		<?php if($order_tag != 'virtual_goods'): ?>	
		<p>
			<label><?php echo lang('goods_freight'); ?>：</label>
			<span>￥<b id="express">0.00</b></span>
		</p>
		<?php endif; ?>
		
		<!-- 总优惠 -->
		<p>
			<label><?php echo lang('member_total_discount'); ?>：</label>
			<span>￥<b id="discount_money">0.00</b></span>
		</p>
		<!-- 积分抵现 -->
		<?php if($point_config["is_open"] == 1): ?>
		<p>
			<label>积分抵现：</label>
			<span>￥<b id="point_money">0.00</b></span>
		</p>
		<?php endif; ?>
		<!-- 税额 -->
		<?php if(count($shop_config['order_invoice_content_list'])>0): ?>
		<p>
			<label><?php echo lang('member_invoice_tax'); ?>：</label>
			<span>￥<b id="invoice_tax_money">0.00</b></span>
		</p>
		<?php endif; ?>
		<!-- 使用余额 -->
		<?php if($shop_config['order_balance_pay'] == 1): ?>
		<p>
			<label><?php echo lang('member_use_balance'); ?>：</label>
			<span>￥<b id="use_balance">0.00</b></span>
		</p>
		<?php endif; ?>

	</div>
	
	<!-- 预售-->
	<?php if($order_tag == 'goods_presell'): ?>	
	<div class="dividing-line"><!-- 分隔行 --></div>
	<h3 class="order-settlement">预售信息</h3>
	<div class="order-list">
		
		<p>
			<label><?php echo lang('goods_presell'); ?>：</label>
			<span class="txtmoney">￥<b id="presell_money">0.00</b></span>
		</p>
		<p>
			<div class="presell_radio">
				<label for="is_full_payment_0">
					<i class="radio-common select"><input type="radio" id="is_full_payment_0" name="is_full_payment" value="0" checked="checked"/></i>
					<span><?php echo lang('reservations_money'); ?></span>
				</label>
				<label for="is_full_payment_1">
					<i class="radio-common"><input type="radio" id="is_full_payment_1" name="is_full_payment" value="1"/></i>
					<span><?php echo lang('whether_to_pay_the_full_money'); ?></span>
				</label>
			</div>
		</p>
	</div>
	<?php endif; ?>
</section>

<div class="footer" style="min-height: 86px;" id="bottom_copyright">
	<div class="copyright">
		<div class="ft-copyright">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" id="copyright_logo_wap">
			<a href="<?php echo __URL('APP_MAIN'); ?>" target="_blank" id="copyright_companyname"></a>
		</div>
	</div>
</div>


<div style="height: 50px"></div>
<div class="order-total-pay bottom-fix">
	<div class="pay-container clearfix">
		<span class="c-gray-darker font-size-12"><?php echo lang('member_amount_payable'); ?>：</span>
		<span class="font-size-16 theme-price-color">￥<span id="realprice">0.00</span></span>
		<?php if($order_tag == 'js_point_exchange'): ?>
		<span class="font-size-16 theme-price-color" id="and" style="display: none;">+</span>
		<span class="font-size-16 theme-price-color" id="count-point"><?php echo $count_point_exchange; ?><?php echo lang('goods_integral'); ?></span>
		<?php endif; ?>
		<button class="commit-bill-btn" onclick="submitOrder()"><?php echo lang('member_place_order'); ?></button>
		<input type="hidden" id="hidden_count_point_exchange" value="<?php echo $count_point_exchange; ?>" />
		<input type="hidden" id="hidden_goods_sku_list" value="<?php echo $goods_sku_list; ?>"/>
		<input type="hidden" id="hidden_discount_money" value="<?php echo $discount_money; ?>" />
		<input type="hidden" id="hidden_express" value="<?php echo $express; ?>" />
		<input type="hidden" id="hidden_count_money" value="<?php echo $count_money; ?>" />
		<input type="hidden" id="count_point_exchange" value="<?php echo $count_point_exchange; ?>"/>
		<input type="hidden" id="hidden_full_mail_money" value="<?php echo $promotion_full_mail['full_mail_money']; ?>"/>
		<input type="hidden" id="hidden_full_mail_is_open" value="<?php echo $promotion_full_mail['is_open']; ?>"/>
		<input type="hidden" id="goods_sku_list" value="<?php echo $goods_sku_list; ?>" />
		<input type="hidden" id="hidden_order_invoice_tax" value="<?php echo $shop_config['order_invoice_tax']; ?>"/>
		<input type="hidden" id="hidden_pick_up_money" value="<?php echo $pick_up_money; ?>"/>
		<input type="hidden" id="hidden_shipping_time" value="0" />
		<!-- 组合套餐 -->
		<?php if($order_tag == 'combination_packages'): ?>
		<input type="hidden" id="hidden_combo_package_id" value="<?php echo $combo_detail[id]; ?>">
		<input type="hidden" id="hidden_buy_num" value="<?php echo $combo_buy_num; ?>">
		<input type="hidden" id="hidden_combo_package_price" value="<?php echo $combo_package_price; ?>">
		<?php endif; if($order_tag == 'pintuan'): ?>
		<input type="hidden" id="hidden_order_tuangou_group_id" value="<?php echo $order_tuangou_group_id; ?>" />
		<?php endif; ?>
		<input type="hidden" id="hidden_o2o_distribution" value="<?php echo $o2o_distribution; ?>"/>
		<!-- 积分抵现 -->
		<input type="hidden" id="integral_balance_is_open" value="<?php echo $point_config['is_open']; ?>">
		<?php if($point_config["is_open"] == 1): ?>
		<!-- 积分抵现比率 -->
		<input type="hidden" id="point_convert_rate" value="<?php echo $point_config['convert_rate']; ?>">
		<!-- 最大可用积分 -->
		<input type="hidden" id="max_use_point" value="<?php echo $max_use_point; ?>">
		<?php endif; if($order_tag == 'goods_presell'): ?>
		<input type="hidden" id="hidden_presell_money" value="<?php echo $presell_money; ?>">
		<?php endif; ?>
		<input type="hidden" id="point_exchange_type" value="<?php echo $point_exchange_type; ?>">
		<input type="hidden" id="order_goods_type" value="<?php echo $order_goods_type; ?>">
	</div>
</div>

<!-- 弹出层 -->
<div class="mask-layer"></div>

<?php if(count($coupon_list)): ?>
<!-- 选择优惠券弹出框 -->
<div class="mask-layer-control" data-flag="use-coupon">
	<div class="header"><?php echo lang('choose_coupons'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_no_coupons'); ?></div>
			</li>
			<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $k = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coupon): $mod = ($k % 2 );++$k;?>
			<li class="item <?php if($k==1): ?>active<?php endif; ?>" data-id="<?php echo $coupon['coupon_id']; ?>" data-code="<?php echo $coupon['coupon_code']; ?>" data-money="<?php echo $coupon['money']; ?>">
				<div class="check-img"></div>
				<div>
					<p class="font-size-12"><?php echo $coupon['coupon_name']; ?><em class="pull-right"><?php echo $coupon['money']; ?><?php echo lang('element'); ?></em></p>
					<p class="font-size-12 c-gray-darker"><?php echo lang('member_full'); ?><?php echo $coupon['at_least']; ?><?php echo lang('element'); ?><?php echo lang('member_reduce'); ?><?php echo $coupon['money']; ?><?php echo lang('element'); ?></p>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择优惠券弹出框 -->
<?php endif; ?>

<!-- 选择支付方式弹出框 -->
<div class="mask-layer-control" data-flag="pay">
	<div class="header"><?php echo lang('choose_payment_method'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_online_payment'); ?></div>
			</li>
			<!-- 为了用户更好的体验和理解，只要开启了货到付款就显示，不再考虑配送方式是否开启，是否有物流公司等 -->
<!-- 		if condition="$shop_config.order_delivery_pay && $shop_config.seller_dispatching && count($express_company_list)"	 -->
			<?php if($shop_config['order_delivery_pay']): ?>
			<li class="item" data-flag="4">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_cash_on_delivery'); ?></div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择支付方式弹出框 -->

<!-- 选择配送方式弹出框 -->
<div class="mask-layer-control" data-flag="distribution" data-is-logistics="<?php echo $shop_config['is_logistics']; ?>">
	<div class="header"><?php echo lang('choose_delivery_address'); ?><span class="close"></span></div>
	<?php if(!$shop_config['seller_dispatching'] && !$shop_config['buyer_self_lifting'] && $is_open_o2o_distribution == 0): ?>
		<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_configure_distribution'); ?></p>
	<?php else: ?>
	<div class="list">
		<ul>
			<!-- 为了用户更好的体验和理解，只要开启了商家配送，就显示。不考虑是否有物流公司 -->
<!-- 			if condition="$shop_config.seller_dispatching && count($express_company_list)" -->
			<?php if($shop_config['seller_dispatching']): ?>
			<li class="item active" data-flag="1">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_merchant_distribution'); ?></div>
			</li>
			<?php endif; if($shop_config['buyer_self_lifting']): ?>
			<li class="item" data-flag="2">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_stores_from_mentioning'); ?></div>
			</li>
			<?php endif; ?>
			<!-- 本地配送 -->
			<?php if($is_open_o2o_distribution): ?>
			<li class="item" data-flag="3">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('local_distribution'); ?></div>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
	<?php endif; ?>
</div>
<!-- 选择配送方式弹出框 -->

<!-- 选择送货时间弹出框 -->
<div class="mask-layer-control" data-flag="shipping_time">
	<div class="header"><?php echo lang('specify_delivery_time'); ?><span class="close"></span></div>
	<div class="date-list"></div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择送货时间弹出框 -->

<!-- 选择物流公司弹出框 -->
<?php if($shop_config['seller_dispatching']): ?>
<div class="mask-layer-control" data-flag="express_company">
	<div class="header"><?php echo lang('the_choice_of_logistics_company'); ?><span class="close"></span></div>
	<?php if($express_company_count == 0): ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_set_up'); ?></p>
	<?php elseif(count($express_company_list)): ?>
		<div class="list">
			<ul>
				<?php if(is_array($express_company_list) || $express_company_list instanceof \think\Collection || $express_company_list instanceof \think\Paginator): if( count($express_company_list)==0 ) : echo "" ;else: foreach($express_company_list as $k=>$company): ?>
				<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-coid="<?php echo $company['co_id']; ?>" data-express-fee="<?php echo $company['express_fee']; ?>">
					<div class="check-img"></div>
					<div class="single"><?php echo $company['company_name']; ?></div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="footer">
			<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
		</div>
	<?php else: ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_freight_template'); ?></p>
	<?php endif; ?>
</div>
<?php endif; ?>
<!-- 选择物流公司弹出框 -->

<?php if($shop_config['buyer_self_lifting']): ?>
<!-- 选择自提地址弹出框 -->
<div class="mask-layer-control" data-flag="pickup_address">
	<div class="header"><?php echo lang('member_select_own_address'); ?><span class="close"></span></div>
	<?php if($pickup_point_list['total_count']): ?>
	<div class="list">
		<ul>
			<?php if(is_array($pickup_point_list['data']) || $pickup_point_list['data'] instanceof \think\Collection || $pickup_point_list['data'] instanceof \think\Paginator): if( count($pickup_point_list['data'])==0 ) : echo "" ;else: foreach($pickup_point_list['data'] as $k=>$pickup): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>" data-id="<?php echo $pickup['id']; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $pickup['province_name']; ?>&nbsp;<?php echo $pickup['city_name']; ?>&nbsp;<?php echo $pickup['dictrict_name']; ?>&nbsp;<?php echo $pickup['address']; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
	<?php else: ?>
	<p style="padding: 30px;text-align: center;"><?php echo lang('member_not_configured'); ?></p>
	<?php endif; ?>
</div>
<!-- 选择自提地址弹出框 -->
<?php endif; ?>

<!-- 选择发票信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice">
	<div class="header"><?php echo lang('select_invoice'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<li class="item active" data-flag="0">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_no_invoice_required'); ?></div>
			</li>
			<li class="item" data-flag="1">
				<div class="check-img"></div>
				<div class="single"><?php echo lang('member_invoice_required'); ?></div>
			</li>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择发票信息弹出框 -->

<?php if(count($shop_config['order_invoice_content_list'])): ?>
<!-- 选择发票内容信息弹出框 -->
<div class="mask-layer-control" data-flag="invoice-content">
	<div class="header"><?php echo lang('select_invoice_content'); ?><span class="close"></span></div>
	<div class="list">
		<ul>
			<?php if(is_array($shop_config['order_invoice_content_list']) || $shop_config['order_invoice_content_list'] instanceof \think\Collection || $shop_config['order_invoice_content_list'] instanceof \think\Paginator): if( count($shop_config['order_invoice_content_list'])==0 ) : echo "" ;else: foreach($shop_config['order_invoice_content_list'] as $k=>$invoice): ?>
			<li class="item <?php if($k==0): ?>active<?php endif; ?>">
				<div class="check-img"></div>
				<div class="single"><?php echo $invoice; ?></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div class="footer">
		<button class="btn-green" style="margin: 0px;"><?php echo lang('goods_determine'); ?></button>
	</div>
</div>
<!-- 选择发票内容信息弹出框 -->
<?php endif; ?>
<!-- 弹出层 -->

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<?php switch($order_tag): case "buy_now":case "cart": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_order.js"></script><?php break; case "virtual_goods": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_virtual_order.js"></script><?php break; case "combination_packages": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_combo_package_order.js"></script><?php break; case "groupbuy": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_group_buy_order.js"></script><?php break; case "pintuan": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_pintuan_order.js"></script><?php break; case "goods_presell": ?><script src="__TEMP__/<?php echo $style; ?>/public/js/payment_presell_order.js"></script><?php break; case "js_point_exchange": if($order_goods_type == 0): ?>
			<script src="__TEMP__/<?php echo $style; ?>/public/js/payment_virtual_order_point_exchange.js"></script>
		<?php else: ?>
			<script src="__TEMP__/<?php echo $style; ?>/public/js/payment_order_point_exchange.js"></script>
		<?php endif; break; endswitch; ?>
<script>
//解决 在IOS手机中，点击左上角返回按钮不会刷新当前页面的问题 2018年1月27日17:45:40
var isPageHide = false;
window.addEventListener('pageshow', function () {
	if (isPageHide) location.href= __URL("APP_MAIN/order/paymentorder");
});
window.addEventListener('pagehide', function () {
	isPageHide = true;
});
</script>

</body>
</html>