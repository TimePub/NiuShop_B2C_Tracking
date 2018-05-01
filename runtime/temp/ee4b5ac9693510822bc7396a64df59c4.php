<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:47:"template/wap\default_new\Goods\goodsDetail.html";i:1522240117;s:34:"template/wap\default_new\base.html";i:1520390541;s:38:"template/wap\default_new\urlModel.html";i:1510824803;s:49:"template/wap\default_new\Goods\controlDetail.html";i:1523587556;s:55:"template/wap\default_new\Goods\controlGoodEvaluate.html";i:1517477406;s:46:"template/wap\default_new\controlCopyRight.html";i:1520480587;s:53:"template/wap\default_new\Goods\controlPhotoSwipe.html";i:1515746189;s:43:"template/wap\default_new\shareContents.html";i:1503047430;s:35:"template/wap\default_new\share.html";i:1503047430;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/mall.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_detail.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/goods_product.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jscommon.js" charset="gb2312"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js" type="text/javascript"></script>
<style>
input{
	-webkit-appearance: checkbox;
}
</style>

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
	
<section class="head goodsDetailHead">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
</section>
<section class="head" id="DataHeadNav">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title">
		<ul class="heav-nav">
			<li class="current"><span>商品</span></li>
			<?php if($evaluates_count['evaluate_count'] > 0): ?>
			<li><span>评价</span></li>
			<?php endif; ?>
			<li><span>详情</span></li>
		</ul>
	</div>
</section>

	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/scroll.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/scroll.js" type="text/javascript"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/touchslider.js"></script>	
<script src="__TEMP__/<?php echo $style; ?>/public/js/countdown.js" type="text/javascript"></script>
<style>
.address-select{width: 30%;float: left;border: 1px solid #e5e5e5;height: 20px;line-height: 20px;margin: 5px 15px;margin-left: 0;}
.give-the-thumbs-up{position: absolute;top: 0px;right: 10px;text-align: center;font-size: 12px;margin-top: 13px;}
.give-the-thumbs-up i{font-size: 21px;}
input{appearance:none;-moz-appearance:none;-webkit-appearance:none;outline: none;-moz-outline: none;-webkit-outline: none;}
.number{border-radius: 0;-webkit-border-radius: 0;}
.favorites,.share{width: 30px;height: 30px;text-align: center;line-height: 30px;background: rgba(0,0,0,0.6);border-radius: 50%;position: absolute;z-index: 1005;right: 8px;top: 10px;}
.share{right: 45px}
.favorites i,.share i{color: #eee;margin-top: 9px;}
.shop_slider .bar{background: none;}
.comment_img{width: 80px;height: 80px;margin:0 5px 5px 0;display: inline-block;float: left;line-height: 80px;text-align: center;}
.comment_img img{max-width: 100%;max-height: 100%;vertical-align: middle;height: auto;}
/* 幻灯片 */
#img-slider{display:none;}
#img-slider ul li{text-align:center;}
#img-slider li a{display:block;width:100%;height:100%;}
#img-slider li img{max-width:100%;max-height:100%;vertical-align: middle;}
#img-slider .img-count{position: fixed;top:5%;left:0;right:0;width:100%;text-align:center;color:#9E9E9E;}
.jiantou{float: right;width: 15px;height: 15px;background:url("__TEMP__/<?php echo $style; ?>/public/images/assistant_right.png") no-repeat center;background-size: auto 15px;margin-top: 3px;}
.user_info .name-box{width: 100%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
.mark_title{background: rgba(0,0,0,0);border: 1px solid #ff0000; color: #ff0000;padding: 1px 5px;border-radius: 3px;font-size: 12px;}
.share_img{position:fixed;top:0;right:0;z-index:99999;display:none;background:#000;opacity:0.8;filter:alpha(opacity=80);width:100%;height:100%;text-align:right;}
.share_img p{color:#fff;line-height:30px;font-size:16px;}
#banner{position:relative;}
.goods-video-box{width:100%;top:0px;display:none;height:320px;line-height:320px;background-color:#000;}
.goods-video-box video{width:100%;height:auto;max-height:100%;vertical-align:middle;}
.goods-alter{padding:4px 0px;position:absolute;left:0px;right:0px;top:13px;text-align:center;z-index:12;font-size:12px;z-index:1005;margin: 0 20%}
.goods-alter span{background-color:rgba(255,255,255,1);padding:2px 10px;border-radius:10px;}
.goods-alter span.on{background:orange;color:#fff;}
.goods-alter-video{margin-right:6px;} 
video::-webkit-media-controls-enclosure {overflow:hidden;}
video::-webkit-media-controls-panel {width: calc(100% + 50px);}
#store_service img{
	width:20px;height:20px;margin-right:5px;
}
#shop_service img{
	width: 22px;
    height: 23px;
    margin-right: 10px;
    padding-left: 1px;
}

#shop_service span{
	color:#051b28;
}
.goods-unit-style{
	    color: #F44;
    font-size: 20px;
    display: inline-block;
    font-weight: normal;
}
</style>
<div data-exp="goods"></div>
<section id="banner">
	<div class="shop_slider shop_slider_auto" data-tag="module-slider" data-height="320px" id="goods-image-box">
		<div class="inner" data-tag="slider-warp" >
			<ul class="pic_list" data-tag="slider-list">
			<?php if(is_array($goods_detail['img_list']) || $goods_detail['img_list'] instanceof \think\Collection || $goods_detail['img_list'] instanceof \think\Paginator): if( count($goods_detail['img_list'])==0 ) : echo "" ;else: foreach($goods_detail['img_list'] as $key=>$img_list): ?>
				<li style="width: 100%;">
					<div>
						<img alt="<?php echo lang('goods_picture'); ?>" class="pp_init_img" src="<?php echo __IMG($img_list['pic_cover_big']); ?>" data-index="<?php echo $key; ?>" <?php if($key > 0): ?>style="display:none;"<?php endif; ?>/>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!-- 收藏商品 -->
			<?php if($is_member_fav_goods == 0): ?>
			<div class="favorites" onclick="collectionGoods(<?php echo $goods_detail['goods_id']; ?>,'goods','<?php echo $goods_detail['goods_name']; ?>',this);" data-log-id="<?php echo $is_member_fav_goods; ?>">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>
			<?php else: ?>
			<div class="favorites" onclick="collectionGoods(<?php echo $goods_detail['goods_id']; ?>,'goods','<?php echo $goods_detail['goods_name']; ?>',this);" data-log-id="<?php echo $is_member_fav_goods; ?>">
				<i class="fa fa-heart" aria-hidden="true"></i>
			</div>
			<?php endif; if($isWeixin == 1): ?>
			<div class="share" onclick="document.getElementById('share_img').style.display='block';">
				<i class="fa fa-share" aria-hidden="true"></i>
			</div>
			<?php endif; ?>
			
		</div>
		<div class="bar_wrap">
			<ul class="bar" data-tag="slider-page">
				<li class="cur"></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	
	<?php if(!empty($goods_detail['goods_video_address'])): ?>
	
		<div class="goods-alter" >
			<span class="goods-alter-video">视频</span>
			<span class="goods-alter-image on">图片</span>
		</div>
		
		<div class="goods-video-box">
			<video loop controls>	
				<source src="<?php echo __IMG($goods_detail['goods_video_address']); ?>" type="video/mp4" />
			</video>
		</div>
	<?php endif; ?>
	
	
</section>
<?php if($goods_detail['promotion_info'] != ''): ?>
<div class="goods-header js-goods-header goods-activity clearfix">
	<input type="hidden" id="end_time"  value="<?php echo getTimeStampTurnTime($goods_detail['promotion_detail']['end_time'] ); ?>"/>
	<div class="goods-price">
		<div class="current-price activity-price">
			<span>￥</span><i class="js-goods-price price"><?php echo $goods_detail['promotion_price']; ?></i>
			<span class="price-title js-price-title "><?php echo lang('goods_discount'); ?></span>
			<span class="goods-unit-style">/<?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?></span>
		</div>
		<?php if($goods_detail['market_price']>0): ?>
		<em class="original-price"><?php echo $goods_detail['market_price']; ?></em>
		<?php endif; ?>
		<div class="font-size-12 overview-countdown js-activity-tips started " data-status="started">
			<div class="countdown-title"><?php echo lang('distance_ends'); ?></div>
			<div class="js-discount-time countdown" data-countdown="3542691">
			<span class="c-red js-day">00</span> <?php echo lang('days'); ?>
			<span class="c-red js-hour">00</span> <?php echo lang('hours'); ?>
			<span class="c-red js-min">00</span> <?php echo lang('minutes'); ?>
			<span class="c-red js-sec">00</span> <?php echo lang('second'); ?></div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="buy_area">
	<div class="fn_wrap" style="position: relative;">
		<h1 class="title" id="itemName" style="width: 85%;">
			<?php if(!(empty($goods_group_list) || (($goods_group_list instanceof \think\Collection || $goods_group_list instanceof \think\Paginator ) && $goods_group_list->isEmpty()))): if(is_array($goods_group_list) || $goods_group_list instanceof \think\Collection || $goods_group_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
					<i class="goods_tab"><?php echo $vo['group_name']; ?></i>
				<?php endforeach; endif; else: echo "" ;endif; endif; ?>
		<?php echo $goods_detail['goods_name']; ?>
		</h1>
		<p class="goods-introduction"><?php echo $goods_detail['introduction']; ?></p>
		<span class="give-the-thumbs-up" onclick="document.getElementById('share_img').style.display='block';">
			<i class="data-icon-share"></i><br/><?php echo lang('share'); ?>
		</span>
		<?php if($goods_detail['point_exchange_type'] == 2): ?>
		<p style="font-size: 12px;">
			本商品可使用积分进行兑换，<a href="<?php echo __URL('APP_MAIN/goods/goodsDetailPointExchange','id='.$goods_detail['goods_id']); ?>" style="color: #f44;border-bottom:1px solid #f44;">前去兑换</a>
		</p>
		<?php endif; ?>
	</div>
	
	<div class="price_wrap">
		<span class="tit" id="priceTitle"></span> 
		<span class="price" price="<?php echo $goods_detail['promotion_price']; ?>">
			<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?>
			<span style="font-size:14px;display: inline-block;vertical-align: middle;">￥<?php echo $goods_detail['promotion_price']; ?></span>
			<?php else: ?>
			<span style="font-size:14px;display: inline-block;vertical-align: middle;">会员价：￥<?php echo $goods_detail['member_price']; ?></span>
			<?php endif; ?>
		</span>
		<?php if($goods_detail['is_open_presell'] == 1): ?>
		<span class="price" style="font-size:14px;" price="<?php echo $goods_detail['promotion_price']; ?>"><?php echo lang('goods_deposit'); ?>
			<span style="font-size:14px;display: inline-block;vertical-align: middle;">￥<?php echo $goods_detail['presell_price']; ?></span>
		</span>
		<?php endif; ?>
		
		<span class="flag" id="priceDis" style="display: none"></span>
	</div>
	
	<?php if($goods_detail['max_buy']>0): ?>
	<hr class="with-margin-l" />
	<hr class="divider-line" />
	<div class="price_postage">
		<span class="price_postage_tit">
		<i style="color: #fff;font-size: 12px;padding: 1px 3px;background: #f44;border-radius: 2px;"><?php echo lang('goods_quantity_purchased'); ?></i>&nbsp;<?php echo $goods_detail['max_buy']; ?><?php echo lang('goods_individual'); ?></span>
	</div>
	<?php endif; ?>
	<hr class="with-margin-l" />
	<div class="stock-detail" >
		<span>销量：<?php echo $goods_detail['sales']; ?>笔</span>
		<span class="js-shipping-fee-name">运费：0.00</span><!-- 运费 -->
		<span>点击：<?php echo $goods_detail['clicks']; ?></span>
	</div>
</div>
<hr class="with-margin-l" />
<hr class="divider-line" />
<?php if($goods_detail['mansong_name'] != ''): ?>
<div class="price_postage">
	<span class="price_postage_tit js-reduced-send single"><i style="color: #fff;font-size: 12px;padding: 1px 3px;background: #f44;border-radius: 2px;"><?php echo lang('member_full'); ?><?php echo lang('member_reduce'); ?></i>&nbsp;<?php echo $goods_detail['mansong_name']; ?></span>
</div>
<hr class="with-margin-l" />
<?php endif; ?>
<!-- 阶梯优惠 -->
<?php if(!(empty($goodsLadderPreferentialList) || (($goodsLadderPreferentialList instanceof \think\Collection || $goodsLadderPreferentialList instanceof \think\Paginator ) && $goodsLadderPreferentialList->isEmpty()))): ?>
<div class="price_postage" id="ladder_preferential">
	<span class="price_postage_tit js-reduced-send single"><i style="color: #fff;font-size: 12px;padding: 1px 3px;background: #f44;border-radius: 2px;"><?php echo lang('ladder_preferential'); ?></i>
			满<b style="color: red;"><?php echo $goodsLadderPreferentialList['0']['quantity']; ?></b><?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?>,每<?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?>降<b style="color: red;"><?php echo $goodsLadderPreferentialList['0']['price']; ?></b>元
		<i class="jiantou"></i>
	</span>
</div>
<hr class="with-margin-l">
<?php endif; if($goods_detail['goods_type'] == 1): ?>
	<!-- 实物商品参加包邮活动 -->
	<?php if($goods_detail['baoyou_name'] != ''): ?>
	<div class="price_postage">
		<span class="price_postage_tit single"><i style="color: #fff;font-size: 12px;padding: 1px 3px;background: #f44;border-radius: 2px;"><?php echo lang('goods_free_shipping'); ?></i>&nbsp;<?php echo $goods_detail['baoyou_name']; ?></span>
	</div>
	<hr class="with-margin-l" />
	<?php endif; endif; ?>

<!-- 领取优惠劵 -->
<?php if(!(empty($goods_coupon_list) || (($goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator ) && $goods_coupon_list->isEmpty()))): ?>
<div class="price_postage" id="receive_coupons">
	<span class="price_postage_tit single"><i style="color: #fff;font-size: 12px;padding: 1px 3px;background: #f44;border-radius: 2px;">领券</i>&nbsp;领取优惠劵<i class="jiantou"></i></span>
</div>
<hr class="with-margin-l" />
<?php endif; ?>

<div class="price_postage" id="theSelected">
	<span style="float: left;">已选择</span>
	<span class="selected"></span>
	<i class="jiantou"></i>
</div>
<hr class="with-margin-l">
<?php if($goods_detail['is_open_presell'] == 1): ?>
<div class="price_postage">
	<span><?php echo lang('goods_delivery_time'); ?></span>
	<span style="padding-left: 5px;">
		<?php if($goods_detail['presell_delivery_type'] == 1): ?>
			<?php echo getTimeStampTurnTime($goods_detail['presell_time']); ?>发货
		<?php else: ?>
			付款<?php echo $goods_detail['presell_day']; ?>后发货
		<?php endif; ?>
	</span>
</div>
<hr class="with-margin-l">
<?php endif; ?>
<div class="price_postage">
	<span>服务</span>
	<span style="padding-left: 5px;">由<a href="javascript:;" style="color:#333;"><?php echo $title; ?></a>发货并提供售后服务</span>
</div>
<hr class="with-margin-l">

<!-- 商家服务 -->
<?php if(count($existingMerchant) > 0): ?>
<div class="price_postage" id="store_service">
	<?php if(is_array($existingMerchant) || $existingMerchant instanceof \think\Collection || $existingMerchant instanceof \think\Paginator): if( count($existingMerchant)==0 ) : echo "" ;else: foreach($existingMerchant as $k=>$vo): if($k < 4): ?>
			<span><?php echo $vo['title']; ?></span>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	<i class="jiantou"></i>
</div>
<hr class="with-margin-l">
<?php endif; if($goods_detail['give_point'] != 0): ?>
<div class="price_postage">
	<span class="price_postage_tit"><i class="fa fa-database" style="color: #F44;margin-right: 5px;"></i><?php echo lang('goods_gift_points'); ?><span style="color:#F44;padding:0;"><?php echo $goods_detail['give_point']; ?></span><?php echo lang('minutes'); ?></span>
</div>
<hr class="with-margin-l" />
<?php endif; ?>

<!-- 积分抵现 -->
<?php if($integral_balance > 0): ?>
<div class="price_postage">
	<span class="price_postage_tit">购买本商品积分可抵<?php echo $integral_balance; ?>元</span>
</div>
<hr class="with-margin-l" />
<?php endif; if($goods_detail['group_info'] != ''): ?>
    <div class="price_postage" style="display: block;">
		<a href="<?php echo __URL('APP_MAIN/goods/grouppurchase','id='.$goods_detail['goods_id']); ?>">
			<span class="selected">&nbsp;去团购</span>
			<i class="jiantou"></i>
		</a>
	</div>
<?php endif; ?>	
<!-- 商品组合套餐 -->
<?php if(!(empty($comboPackageGoodsArray) || (($comboPackageGoodsArray instanceof \think\Collection || $comboPackageGoodsArray instanceof \think\Paginator ) && $comboPackageGoodsArray->isEmpty()))): ?>
<hr class="divider-line" />
<a href="<?php echo __URL('APP_MAIN/goods/comboPackageList','goodsid='.$comboPackageGoodsArray['main_goods']['goods_id']); ?>" >
	<div class="price_postage">
		<span class="price_postage_tit single"><?php echo lang("combo_package"); ?><i class="jiantou"></i></span>
	</div>
</a>
<div class="combo_package">
	<div class="combo_package_goods">
		<div class="goods">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail','id='.$comboPackageGoodsArray['main_goods']['goods_id']); ?>">
				<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load g-img" data-original="<?php echo __IMG($comboPackageGoodsArray['main_goods']['pic_cover_mid']); ?>" alt="">
				<p class="g-price">￥<?php echo $comboPackageGoodsArray['main_goods']['price']; ?></p>
			</a>
		</div>
		<i class="fa fa-plus" aria-hidden="true"></i>
		<?php if(is_array($comboPackageGoodsArray['goods_array']) || $comboPackageGoodsArray['goods_array'] instanceof \think\Collection || $comboPackageGoodsArray['goods_array'] instanceof \think\Paginator): if( count($comboPackageGoodsArray['goods_array'])==0 ) : echo "" ;else: foreach($comboPackageGoodsArray['goods_array'] as $k=>$vo): if($k < 2): ?>
			<div class="goods" style="margin-right: 5%;">
				<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail','id='.$vo['goods_id']); ?>">
					<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load g-img" data-original="<?php echo __IMG($vo['pic_cover_mid']); ?>" alt="">
					<p class="g-price">￥<?php echo $vo['price']; ?></p>
				</a>
			</div>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<?php endif; ?>

<!-- 商品评价 -->
<?php if($evaluates_count['evaluate_count'] > 0): ?>
	<hr class="divider-line" />
	<div data-exp="comment"></div>
	<!-- 功能介绍：商品评价 -->
<?php if($evaluates_count['evaluate_count'] > 0): ?>
	<div class="evaluation-container">
		<div class="evaluation-title">商品评价 (<em><?php echo $evaluates_count['evaluate_count']; ?></em>) </div>

		<ul class="evaluation-type js-product-evaluation">
			<li><?php echo lang('whole'); ?><em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
			<li><?php echo lang('goods_picture'); ?> <em>(<?php echo $evaluates_count['imgs_count']; ?>)</em></li>
			<li><?php echo lang('goods_praise'); ?> <em>(<?php echo $evaluates_count['praise_count']; ?>)</em></li>
			<li><?php echo lang('goods_comments'); ?> <em>(<?php echo $evaluates_count['center_count']; ?>)</em></li>
			<li><?php echo lang('goods_bad'); ?> <em>(<?php echo $evaluates_count['bad_count']; ?>)</em></li>
		</ul>
		
		<div class="evaluation-comments">
			<!-- 评价人信息 -->
			<div class="evaluation-userinfo">
				<?php if(!(empty($goodsEvaluation['user_img']) || (($goodsEvaluation['user_img'] instanceof \think\Collection || $goodsEvaluation['user_img'] instanceof \think\Paginator ) && $goodsEvaluation['user_img']->isEmpty()))): ?>
				<img src="<?php echo __IMG($default_headimg); ?>" alt="" data-origina="<?php echo $goodsEvaluation['user_img']; ?>" class="headimg lazy_load">
				<?php else: ?>
				<img src="<?php echo __IMG($default_headimg); ?>" alt="" class="headimg">
				<?php endif; if($goodsEvaluation['is_anonymous'] == 1): ?>
					<span class="nickname"><?php echo cover_up_username($goodsEvaluation['member_name']); ?></span>
				<?php else: ?>
					<span class="nickname"><?php echo $goodsEvaluation['member_name']; ?></span>
				<?php endif; ?>
				<time class="evaluation-time"><?php echo date("Y-m-d",$goodsEvaluation['addtime']); ?></time>
			</div>
			<!-- 初次评价 -->
			<div class="evaluation-content">
				<?php echo $goodsEvaluation['content']; ?>
			</div>
			<?php if(!(empty($goodsEvaluation['explain_first']) || (($goodsEvaluation['explain_first'] instanceof \think\Collection || $goodsEvaluation['explain_first'] instanceof \think\Paginator ) && $goodsEvaluation['explain_first']->isEmpty()))): ?>
				<div class="evaluation-reply">
					<?php echo lang("goods_shopkeeper_replies"); ?>:<?php echo $goodsEvaluation['explain_first']; ?>
				</div>
			<?php endif; ?>
			<!-- 评价图片 -->
			<?php if(!(empty($goodsEvaluation['image']) || (($goodsEvaluation['image'] instanceof \think\Collection || $goodsEvaluation['image'] instanceof \think\Paginator ) && $goodsEvaluation['image']->isEmpty()))): ?>
			<ul class="evaluation-pics">
				<?php $image = explode(',', $goodsEvaluation['image']); if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): if( count($image)==0 ) : echo "" ;else: foreach($image as $k=>$vo): ?>
					<li><img src="<?php echo __IMG($vo); ?>" class="comment-pic" onclick="showImgSlider(this);" data-index="<?php echo $k; ?>"></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<?php endif; ?>
			<!-- 追评 -->
			<?php if(!(empty($goodsEvaluation['again_content']) || (($goodsEvaluation['again_content'] instanceof \think\Collection || $goodsEvaluation['again_content'] instanceof \think\Paginator ) && $goodsEvaluation['again_content']->isEmpty()))): ?>
				<p class="review-evaluation">追加评价<time class="review-time"><?php echo date("Y-m-d",$goodsEvaluation['again_addtime']); ?></time></p>
				<div class="evaluation-content review">
					<?php echo $goodsEvaluation['again_content']; ?>
				</div>
				<?php if(!(empty($goodsEvaluation['again_explain']) || (($goodsEvaluation['again_explain'] instanceof \think\Collection || $goodsEvaluation['again_explain'] instanceof \think\Paginator ) && $goodsEvaluation['again_explain']->isEmpty()))): ?>
					<div class="evaluation-reply">
						<?php echo lang("goods_shopkeeper_replies"); ?>:<?php echo $goodsEvaluation['again_explain']; ?>
					</div>
				<?php endif; if(!(empty($goodsEvaluation['again_image']) || (($goodsEvaluation['again_image'] instanceof \think\Collection || $goodsEvaluation['again_image'] instanceof \think\Paginator ) && $goodsEvaluation['again_image']->isEmpty()))): ?>
					<ul class="evaluation-pics">
						<?php $again_image = explode(',', $goodsEvaluation['again_image']); if(is_array($again_image) || $again_image instanceof \think\Collection || $again_image instanceof \think\Paginator): if( count($again_image)==0 ) : echo "" ;else: foreach($again_image as $k=>$vo): ?>
						<li><img src="<?php echo __IMG($vo); ?>" class="comment-pic" onclick="showImgSlider(this);" data-index="<?php echo $k; ?>"></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				<?php endif; endif; ?>
		</div>
		<?php if($evaluates_count['evaluate_count'] > 1): ?>
		<div class="check-more">
			<button>查看更多评价</button>
		</div>
		<?php endif; ?>
	</div>
	<hr class="divider-line">	
<?php endif; ?>
<!-- 更多评价遮罩 -->
<div class="evaluation-shade">
	<section class="head">
		<a class="head_back" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title">评价</div>
	</section>

	<div class="body">
		<div class="evaluation-container">
			<ul class="evaluation-type js-mask-layer-evaluation-type">
				<li data-type="0" class="current"><?php echo lang('whole'); ?><em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
				<li data-type="4"><?php echo lang('goods_picture'); ?> <em>(<?php echo $evaluates_count['imgs_count']; ?>)</em></li>
				<li data-type="1"><?php echo lang('goods_praise'); ?> <em>(<?php echo $evaluates_count['praise_count']; ?>)</em></li>
				<li data-type="2"><?php echo lang('goods_comments'); ?> <em>(<?php echo $evaluates_count['center_count']; ?>)</em></li>
				<li data-type="3"><?php echo lang('goods_bad'); ?> <em>(<?php echo $evaluates_count['bad_count']; ?>)</em></li>
			</ul>

			<ul class="evaluation-list"></ul>

		</div>
	</div>
</div>

<script>
// 加载评价列表
function getGoodsCommentsList(){
	var commentsType = $(".evaluation-shade .body .evaluation-type li.current").attr('data-type');
	$.ajax({
		type:"post",
		url:"<?php echo __URL('APP_MAIN/Goods/getGoodsComments'); ?>",
		data:{'comments_type' : commentsType, "goods_id" : $("#goods_id").val() },
		dataType:'json',
		success:function(data){
			var html='';
			if(data['data'].length > 0){
				for(var i = 0; i < data['data'].length; i ++){
					var dataitem = data['data'][i];
					var member_name = dataitem['member_name'];
						member_name = dataitem['is_anonymous'] == 1? member_name.replace(member_name.substring(1,member_name.length),'***')+'(<?php echo lang("anonymous"); ?>)':member_name;
					html += '<li class="item">';
						html += '<div class="evaluation-comments">';
							//评价人信息
							html += '<div class="evaluation-userinfo">';
								if(dataitem["user_img"] != "" && dataitem['user_img'] != undefined && dataitem['user_img'] != 0){
									html += '<img src="<?php echo __IMG($default_headimg); ?>"  class="headimg lazy_load" data-original="'+__IMG(dataitem['user_img'])+'" >';
								}else{
									html += '<img src="<?php echo __IMG($default_headimg); ?>" alt="" class="headimg">';
								}
								html += '<span class="nickname">'+ member_name +'</span>';
								html += '<time class="evaluation-time">'+timeStampTurnTime(dataitem['addtime'])+'</time>';
							html += ' </div>';
							//初次评价
							html += ' <div class="evaluation-content">'+dataitem['content'];
							html += ' </div>';
							//店家回复
							if(dataitem['explain_first']!=''){
								html += ' <div class="evaluation-reply"><?php echo lang("goods_shopkeeper_replies"); ?>:'+dataitem['explain_first'];
								html += ' </div>';
							}
							//评价图片
							if(dataitem['image']!=''){
								var imgs_arr = dataitem['image'].split(',');
								html += '<ul class="evaluation-pics">';
									for(var key in imgs_arr){
										html += '<li><img src="'+__IMG(imgs_arr[key])+'" alt="" class="comment-pic" onclick="showImgSlider(this);" data-index="' + key + '"></li>';
									}
								html += '</ul>';
							}
							//追评
							if(dataitem['again_content']!=''){
								html += '<p class="review-evaluation">追加评价<time class="review-time">'+timeStampTurnTime(dataitem['again_addtime'])+'</time></p>';
								html += '<div class="evaluation-content review">'+dataitem['again_content'];
								html += '</div>';
								if(dataitem['again_explain']!=''){
									html += ' <div class="evaluation-reply"><?php echo lang("goods_shopkeeper_replies"); ?>:'+dataitem['again_explain'];
									html += ' </div>';
								}
								if(dataitem['again_image'] !=''){
									var imgs_arr=dataitem['again_image'].split(',');
									html += '<ul class="evaluation-pics">';
									for(var key in imgs_arr){
										html += '<li><img src="'+__IMG(imgs_arr[key])+'" alt="" onclick="showImgSlider(this);" data-index="' + key + '" class="comment-pic"></li>';
									}
									html += '</ul>';
								}
							}
						html += '</div>';
					html += '</li>';
				}	
			}else{
				html += '<li class="item empty">该商品暂无评论！</li>';
			}
			$(".evaluation-shade .body .evaluation-list").html(html);
			img_lazyload();
		}
	})
}

$(".check-more button,.js-product-evaluation").click(function(){
	getGoodsCommentsList();
	$("body").css({"height":"100%","overflow-y":"hidden"});
	$(".evaluation-shade").animate({"left":"0"},200);
});

$(".evaluation-shade .head .head_back").click(function(){
	$("body").css({"height":"auto","overflow-y":"auto"});
	$(".evaluation-shade").animate({"left":"100%"},200);
});

$(".js-mask-layer-evaluation-type li").click(function(){
	$(".js-mask-layer-evaluation-type li").removeClass("current");
	$(this).addClass("current");
	getGoodsCommentsList();
});
</script>
<?php endif; ?>
	
<!-- 商品属性 -->
<?php if(count($goods_detail['goods_attribute_list']) > 0): ?>
<hr class="divider-line">
<div class="tab-module-title"><?php echo lang('goods_commodity_attribute'); ?></div>
<hr class="with-margin-l">
<div class="detail_info_wrap p-attribute" id="p-attribute">
	<ul class="attribute-ul">
		<?php foreach($goods_detail["goods_attribute_list"] as $vo): if(!(empty($vo['attr_value_name']) || (($vo['attr_value_name'] instanceof \think\Collection || $vo['attr_value_name'] instanceof \think\Paginator ) && $vo['attr_value_name']->isEmpty()))): ?>
			<li>
				<em><?php echo $vo['attr_value']; ?>：</em>
				<span id="goods_attr_" title="<?php echo $vo['attr_value_name']; ?>" class="goods-attr-value"><?php echo $vo['attr_value_name']; ?></span>
			</li>
			<?php endif; endforeach; ?>
	</ul>
</div>
<?php endif; ?>

<hr class="divider-line">
<div data-exp="goodsdetail"></div>
<!-- 商品详情 -->
<div class="tab-module-title"><?php echo lang('goods_commodity_details'); ?></div>
<hr class="with-margin-l">
<div class="detail_info_wrap" id="p-detail">
	<div class="detail_list" id="content"><?php echo $goods_detail['description']; ?></div>
</div>

	
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
<!-- 弹出框 -->
<div class="success-tip-line" id="success_tip_line" style="display: none;"><?php echo lang('successfully_joined_shopping_cart'); ?>！</div>
<div class="mask" id="mask" style="display: none;"></div>
<span id="addcart_way" style="display: none;"><i></i></span>
<section class="s-buy" id="s_buy">
	<div class="popup"  id="popup" style="-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;display: none"></div>
	<ul class="s-buy-ul">
		<li class="s-buy-pro">
			<span class="pro-img">
			
				<!-- 商品SKU图片 -->
				<?php if(!(empty($goods_detail['sku_picture_list']) || (($goods_detail['sku_picture_list'] instanceof \think\Collection || $goods_detail['sku_picture_list'] instanceof \think\Paginator ) && $goods_detail['sku_picture_list']->isEmpty()))): if(is_array($goods_detail['sku_picture_list']) || $goods_detail['sku_picture_list'] instanceof \think\Collection || $goods_detail['sku_picture_list'] instanceof \think\Paginator): if( count($goods_detail['sku_picture_list'])==0 ) : echo "" ;else: foreach($goods_detail['sku_picture_list'] as $key=>$img): if(is_array($img['album_picture_list']) || $img['album_picture_list'] instanceof \think\Collection || $img['album_picture_list'] instanceof \think\Paginator): if( count($img['album_picture_list'])==0 ) : echo "" ;else: foreach($img['album_picture_list'] as $k=>$p): ?>
							<input type="hidden" id="spec_picture_id<?php echo $p['pic_id']; ?>" value="<?php echo __IMG($p['pic_cover_small']); ?>" />
						<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endif; ?>
				
				<input type="hidden" id="default_img" value="<?php echo $goods_detail['img_list'][0]['pic_id']; ?>" />
				<img src="<?php echo __IMG($goods_detail['img_list'][0]['pic_cover_small']); ?>" class="js-thumbnail">
				
			</span>
			<div class="pro-info">
				<p class="name" ><?php echo $goods_detail['goods_name']; ?></p>
				<p class="pro-price" id="price">
					￥<?php if($goods_detail['promotion_price'] < $goods_detail['member_price']): ?><?php echo $goods_detail['promotion_price']; else: ?><?php echo $goods_detail['member_price']; endif; if($goods_detail['point_exchange_type']==1 && $goods_detail['point_exchange']>0): ?>
					<span style="font-size:16px;display: inline-block;vertical-align: middle;">+<?php echo $goods_detail['point_exchange']; ?><?php echo lang('goods_integral'); ?></span>
					<?php endif; ?>
				</p>
			</div>
			<i class="icon-close" id="icon_close"></i>
		</li>
	</ul>
	<hr class="with-margin-l" />
	<ul class="s-buy-ul specification" id="specification" style="z-index: 9000;">
		<?php if(is_array($goods_detail['spec_list']) || $goods_detail['spec_list'] instanceof \think\Collection || $goods_detail['spec_list'] instanceof \think\Paginator): if( count($goods_detail['spec_list'])==0 ) : echo "" ;else: foreach($goods_detail['spec_list'] as $k=>$spec): ?>
		<li class="s-buy-li" >
			<div class="left"><?php echo $spec['spec_name']; ?>：</div>
			<div class="right" name="specvals" >
			<?php if(is_array($spec['value']) || $spec['value'] instanceof \think\Collection || $spec['value'] instanceof \think\Paginator): if( count($spec['value'])==0 ) : echo "" ;else: foreach($spec['value'] as $child_k=>$spec_value): if($spec_value['spec_id'] == $spec['spec_id']): ?>
					<button class="select <?php if($child_k==0): ?>current<?php endif; ?>" name="Span<?php echo $k; ?>" id="<?php echo $spec_value['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>" onclick="change(this);" data-picture-id="<?php echo $spec_value['picture']; ?>"><?php echo $spec_value['spec_value_name']; ?></button>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</li>
		<hr class="with-margin-l" />
		<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_detail['sku_list']) || $goods_detail['sku_list'] instanceof \think\Collection || $goods_detail['sku_list'] instanceof \think\Paginator): if( count($goods_detail['sku_list'])==0 ) : echo "" ;else: foreach($goods_detail['sku_list'] as $k=>$pro_skus): ?>
		<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" class="sku-array">
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<input type="hidden" id="goods_sku_num" value="100">
		<li class="s-buy-li">
			<div class="left" style="float:left;"><?php echo lang('member_quantity_purchased'); ?>：</div>
			<div class="right">
				<span class="reduce quantity-minus-disabled">-</span>
				<input class="number" name="quantity" autocomplete="off" value="<?php if($goods_detail['min_buy'] !=0): ?><?php echo $goods_detail['min_buy']; else: ?>1<?php endif; ?>" min="<?php if($goods_detail['min_buy'] !=0): ?><?php echo $goods_detail['min_buy']; else: ?>1<?php endif; ?>" max="<?php echo $goods_detail['stock']; ?>" id="num" />
				<span class="add">+</span>
			</div>
			<?php if($goods_detail['is_stock_visible'] == 1): ?>
			<span style="display: inline-block;margin-top:5px;color:#333;" id="Stock"><?php echo lang('left'); ?><?php echo $goods_detail['stock']; if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?></span>
			<?php endif; if($goods_detail['max_buy'] != '0' AND $goods_detail['max_buy'] != -1): ?>
			<span style="display: inline-block;margin-top:5px;color:#333;"><?php echo lang('homebuying_restrictions'); ?><?php echo $goods_detail['max_buy']; if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?></span>
			<?php endif; ?>
		</li>
		
	</ul>
	<ul class="s-buy-ul">
		<li class="s-buy-btn">
			<?php if($goods_detail['is_open_presell'] == 0): ?>
			<a class="btn" id="submit_ok" tag="buyBtn1"><?php echo lang('goods_determine'); ?></a>
			<?php else: ?>
			<a class="btn" id="submit_ok" tag="goods_presell"><?php echo lang('goods_immediate_reservation'); ?></a>
			<?php endif; if($order_tag == 'presell_buy'): ?>
			<input type="hidden" id="hidden_presell_money" value="<?php echo $presell_money; ?>">
			<?php endif; ?>
			<input id="hiddPDetailID" type="hidden" value="<?php echo $goods_detail['goods_id']; ?>"/>
			<input id="hiddSkuId" type="hidden" />
			<input id="hiddSkuName" type="hidden" />
			<input id="hiddSkuprice" type="hidden" />
			<input id="hiddStock" type="hidden" value="<?php echo $goods_detail['stock']; ?>"/>
			<input type="hidden" id="hidden_shop_name" value="<?php echo $shopname; ?>"/>
			<input type="hidden" id="hidden_shop_id" value="<?php echo $goods_detail['shop_id']; ?>"/>
			<input type="hidden" id="is_sale" value="<?php echo $goods_detail['state']; ?>" />
			<input type="hidden" id="goods_id" value="<?php echo $goods_detail['goods_id']; ?>" />
			<input type="hidden" id="code" value="<?php echo $goods_detail['code']; ?>" />
			<input type="hidden" id="max_buy" value="<?php echo $goods_detail['max_buy']; ?>" />
			<input type="hidden" id="min_buy" value="<?php echo $goods_detail['min_buy']; ?>" />
			<input type="hidden" id="hidden_current_num" value="<?php echo $num; ?>" />
			<input type="hidden" id="hidden_uid" value="<?php echo $uid; ?>">
			<input type="hidden" id="ms_time" value="<?php echo $ms_time; ?>"/>
			<input type="hidden" id="hidden_presell" value="<?php echo $goods_detail['presell_price']; ?>"/>
		</li>
	</ul>
</section>
<div id="img-slider">
	<ul></ul>
	<div class="img-count">
		<b class="curr">1</b>/<b class="sum"></b>
	</div>
</div>

<!-- 领取优惠劵弹出框 -->
<div class="bottom_popup"  data-popup-type="receive_coupons">
	<div class="bottom_popup_title">
		领取优惠劵
	</div>
	<ul class="coupon_list">
		<?php if(!(empty($goods_coupon_list) || (($goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator ) && $goods_coupon_list->isEmpty()))): if(is_array($goods_coupon_list) || $goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li>
				<div class="js-coupon" data-max-fetch="<?php echo $vo['max_fetch']; ?>" data-receive-quantity="<?php echo $vo['receive_quantity']; ?>" data-coupon-id="<?php echo $vo['coupon_type_id']; ?>">
					<div class="coupon-price">
						<p class="price">￥<?php echo $vo['money']; ?></p>
						<p class="desc">立即领取</p>
					</div>
					<div class="coupon-lose">
						<p class="condition"><?php echo $vo['money']; ?>元优惠券，满<?php echo $vo['at_least']; ?>可用</p>
						<p class="time">
							<span><?php echo date("Y-m-d",$vo['start_time']); ?></span>至<span><?php echo date("Y-m-d",$vo['end_time']); ?></span>
						</p>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</ul>
	<div class="bottom_popup_button" id="complete"> 
		<span>完成</span>
	</div>
</div>

<!-- 阶梯优惠信息弹出框 -->
<div class="bottom_popup"  data-popup-type="ladder_preferential">
	<div class="bottom_popup_title">
		<?php echo lang("ladder_preferential"); ?>
	</div>
	<ul class="coupon_list">
		<mark class="mark_title"><?php echo lang("ladder_preferential"); ?></mark>
		<?php if(is_array($goodsLadderPreferentialList) || $goodsLadderPreferentialList instanceof \think\Collection || $goodsLadderPreferentialList instanceof \think\Paginator): if( count($goodsLadderPreferentialList)==0 ) : echo "" ;else: foreach($goodsLadderPreferentialList as $key=>$vo): ?>
			满<b style="color: red;"><?php echo $vo['quantity']; ?></b><?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?>,每<?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?>降<b style="color: red;"><?php echo $vo['price']; ?></b>元&nbsp;&nbsp;
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="bottom_popup_button" id="complete"> 
		<span>完成</span>
	</div>
</div>

<!-- 分享弹框 -->
<div id="share_img" class="share_img" onclick="document.getElementById('share_img').style.display='none';">
    <p><img class="arrow" src="__TEMP__/<?php echo $style; ?>/public/images/goods_share.png"></p>
    <p style="margin-top:30px; margin-right:50px;">点击右上角</p>
    <p style="margin-right:50px;">将此商品分享给好友</p>
</div>

<!-- 商家服务 -->
<div class="bottom_popup"  data-popup-type="store_service">
	<div class="bottom_popup_title">
		<?php echo lang('merchant_service'); ?>
	</div>
	<ul class="coupon_list" id="shop_service">
		<?php if(!(empty($existingMerchant) || (($existingMerchant instanceof \think\Collection || $existingMerchant instanceof \think\Paginator ) && $existingMerchant->isEmpty()))): if(is_array($existingMerchant) || $existingMerchant instanceof \think\Collection || $existingMerchant instanceof \think\Paginator): if( count($existingMerchant)==0 ) : echo "" ;else: foreach($existingMerchant as $key=>$vo): ?>
			<li>
				<?php if($vo['pic'] == ''): ?>
				<p class="service_title"><?php echo $vo['title']; ?></p>
				<?php else: ?>
				<img src="<?php echo $vo['pic']; ?>"/><span><?php echo $vo['title']; ?></span>
				<?php endif; ?>
				<p class="service_desc"><?php echo $vo['describe']; ?></p>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</ul>
	<div class="bottom_popup_button" id="complete"> 
		<span>完成</span>
	</div>
</div>
<!-- 图片放大 -->
<!-- 功能说明：手机端图片放大 -->
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/js/photoSwipe/photoswipe.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/js/photoSwipe/default-skin/default-skin.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/photoSwipe/photoswipe.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/photoSwipe/photoswipe-ui-default.js"></script>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <!--关闭窗口-->
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <!--分享-->
                <!-- <button class="pswp__button pswp__button--share" title="Share"></button> -->

                <!--全屏-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <!--放大缩小-->
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script type="text/javascript">
var goods_unit = "<?php if(empty($goods_detail['goods_unit'])): ?>件<?php else: ?><?php echo $goods_detail['goods_unit']; endif; ?>";
$(function () {
	var openPhotoSwipe = function(index) {
	    var pswpElement = document.querySelectorAll('.pswp')[0];

	    var items = new Array();
		$("ul.pic_list li div img.pp_init_img").each(function(i,e){
			var theImage = new Image();
			theImage.src = $(e).attr("src");
			var info = {"src" : $(e).attr("src"), "w" : theImage.width, "h" : theImage.height};
			items.push(info);
		})


	    var options = {     
	        history: false,
	        focus: false,
	        showAnimationDuration: 0,
	        hideAnimationDuration: 0,
	        index : index
	    };

	    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
	    gallery.init();
	};	

	$("ul.pic_list li div img.pp_init_img").bind("click",function(){
		var index = $(this).data("index");
		openPhotoSwipe(index);
	})

	countDown();//计时器
	
	//分享
	$.ajax({
		type:"post",
		data : {"shop_id" : "<?php echo $shop_id; ?>" , "flag" : "goods" , "goods_id" : "<?php echo $goods_id; ?>"},
		url : "<?php echo __URL('APP_MAIN/goods/getShareContents'); ?>",
		success : function(data){
			wx.config({
	debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	appId: $("#appId").val(), // 必填，公众号的唯一标识
	timestamp: $("#jsTimesTamp").val(), // 必填，生成签名的时间戳
	nonceStr:  $("#jsNonceStr").val(), // 必填，生成签名的随机串
	signature: $("#jsSignature").val(),// 必填，签名，见附录1
	jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

wx.ready(function() {

	var title = data['share_title'];
	var share_contents = data['share_contents']+'\r\n';
	var share_nick_name = data['share_nick_name']+'\r\n';
	var desc2 = share_contents+ share_nick_name + "收藏热度：★★★★★";
	var share_url = data['share_url'];
	var img_url = data['share_img'];
	wx.onMenuShareAppMessage({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击发送给朋友');
		},
		success: function (res) {
			//alert('已分享213');
			
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareTimeline({
		title: title,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			// alert('用户点击分享到朋友圈');
		},
		success: function (res) {
		//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			// alert(JSON.stringify(res));
		}
	});
	
	// 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareQQ({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到QQ');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareWeibo({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到微博');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
});
		}
	});
	
	<?php if($goods_detail['goods_type'] == 1): ?>
	
	//定位查询运费
	$.ajax({
		type : "post",
		data :{"goods_id" : "<?php echo $goods_id; ?>"},
		url : "<?php echo __URL('APP_MAIN/Goods/getShippingFeeNameByLocation'); ?>",
		success : function(data){
			if(data != ""){
				if(typeof data == "string"){
					$(".js-shipping-fee-name").text("运费：" + data);
				}else if(typeof data == "object"){
					$(".js-shipping-fee-name").text("运费：" + data[0].express_fee);
				}
			}
		}
	});
	<?php endif; ?>

	$(window).scroll(function(){
		var scroll_top = $(window).scrollTop();
		if(scroll_top > 50){
			$("#DataHeadNav").css("opacity",1);
		}else{
			$("#DataHeadNav").css("opacity",0);
		}
		$("[data-exp]").each(function(i,e){
			var _postTop = $(this).offset().top;
			if(scroll_top > _postTop - 55){
				$("#DataHeadNav .heav-nav li").removeClass("current");
				$("#DataHeadNav .heav-nav li").eq(i).addClass("current");
			}
		})
	})

	$("#DataHeadNav .heav-nav li").click(function(){
		var _index = $(this).index();
		var _scroll = $("[data-exp]").eq(_index).offset().top - 50;
		$("body").animate({ scrollTop: _scroll }, 100);
	})
});


//点赞
var flag = false;
function clickPoint(){
	var uid = $("#hidden_uid").val();
	if (uid != null && uid != "") {
		if(flag) return;
		flag = true;
		$.ajax({
			type:"post",
			data : {"goods_id" : "<?php echo $goods_id; ?>"},
			url : "<?php echo __URL('APP_MAIN/Goods/getClickPoint'); ?>",
			success : function(data){
				if(data['code']>0) {
					$(".fa-thumbs-up").css("color","#FF8855");
				}else{
					showBox(data["message"],"error");
				};
				flag = false;
			}
		});
	}else{
		location.href = "<?php echo __URL('APP_MAIN/Login'); ?>";
	}
}

function showProperty(sobj,type){
	$("#detailTab span").removeClass("cur");
	$(sobj).addClass("cur");
	if(type==1){
		$("#productproperty").hide();
		$("#p-detail").show(); 
		$("#p-attribute").hide();
	}else if(type == 2){
		$("#productproperty").hide();
		$("#p-detail").hide();
		$("#p-attribute").show();
	}else{
		$("#productproperty").show();
		$("#p-detail").hide(); 
		$("#p-attribute").hide();
	}
}


var img_slider = null;
//点击显示评论大图
function showImgSlider(event){
	var parent = $(event).parent().parent();
	var html = '';
	var curr = parseInt($(event).attr("data-index"));
	parent.children("li").each(function(i){
		html += '<li style="width: ' + $(window).outerWidth() + 'px; height: ' + $(window).outerHeight() + 'px; display: table-cell; padding: 0; margin: 0; float: left;">';
			html += '<a href="javascript:;" style="display: -webkit-box;-webkit-box-align: center;-webkit-box-pack: center;">';
				html += '<img src="' + $(this).children("img").attr("src") + '">';
			html += '</a>';
		html += '</li>';
	});
	$("#img-slider ul").html(html);
	var num = parent.children("li").size();
	$('#img-slider .img-count .sum').text(num);
	$('#img-slider .img-count .curr').text(curr+1);
	if(img_slider == null){
		img_slider = new TouchSlider({id:'img-slider','auto':'-1',fx:'ease-out',direction:'left',speed:600,timeout:5000,'before':function(index){
			$('#img-slider .img-count .curr').text($("#img-slider li:eq(" + index + ")").index()+1);
		}});
	}else{
		img_slider.length = num;//对象已存在，修改图片数量即可
		$("#img-slider ul").css("width",($(window).outerWidth()*num) + "px");
	}
	$("#img-slider").show().removeAttr("data-flag");
	img_slider.specified(curr);
}

//关闭遮罩层，并给予标识
$("#img-slider").click(function(){
	$(this).hide().attr("data-flag",1);
});

/*
 * 收藏商品 
 */
var is_click = false;
function collectionGoods(fav_id, fav_type, log_msg,obj) {
	var uid = $("#hidden_uid").val();
	if (uid != null && uid != "") {
		var logid = $(obj).attr("data-log-id");
		if(is_click){
			return false;
		}
		is_click = true;
		//未收藏添加收藏
		if (logid == 0) {
			$.ajax({
				url : "<?php echo __URL('APP_MAIN/Member/FavoritesGoodsorshop'); ?>",
				type : "post",
				async : false,
				data : {
					"fav_id" : fav_id,
					"fav_type" : fav_type,
					"log_msg" : log_msg
				},
				success : function(data) {
					if (data.code > 0) {
						$(obj).find("i").attr("class","fa fa-heart");
						$(obj).attr("data-log-id",1);
						showBox("收藏成功","success");
					}
					is_click = false;
				}
			});
		} else {
			//已收藏取消收藏
			$.ajax({
				url : "<?php echo __URL('APP_MAIN/Member/cancelFavorites'); ?>",
				type : "post",
				async : false,
				data : {
					"fav_id" : fav_id,
					"fav_type" : fav_type
				},
				success : function(data) {
					if (data.code > 0) {
						$(obj).find("i").attr("class","fa fa-heart-o");
						$(obj).attr("data-log-id",0);
						showBox("取消收藏成功","success");
					}
					is_click = false;
				}
			});
		}
	} else {
		location.href = "<?php echo __URL('APP_MAIN/Login'); ?>";
	}
}

$(".goods-alter span").each(function(i){
	$(this).click(function(){
		$(this).addClass('on').siblings().removeClass('on');
		if(i == 0){
			var html = '';
			
			html += '<video autoplay loop controls>';
			  html += '<source src="<?php echo __IMG($goods_detail['goods_video_address']); ?>" type="video/mp4" />';
			html += '</video>';
			
			$(".goods-video-box").html(html);
			
			$("#goods-image-box").hide();
			$(".goods-video-box").show();
			
		}else{
			
			$(".goods-video-box").hide();
			$(".goods-video-box video").remove();
			$("#goods-image-box").show();
		}
	})
})

window.onload = function(){
	$("ul.pic_list li div img.pp_init_img").css("display","block");
}
</script>
	<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
<div style="height: 50px;"></div>
<div class="js-bottom-opts bottom-fix">
	<div class="responsive-wrapper">
		<a href="<?php echo __URL('APP_MAIN'); ?>" class="new-btn buy-cart">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/go_home.png" style="height:20px;margin-top: 4px;"/>
			<span class="desc"><?php echo lang("home_page"); ?></span>
		</a>
		<a href="<?php echo $customservice_config['value']['service_addr']; ?>" class="new-btn buy-cart" target="_blank">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/kefux.png" style="width:20px;height:20px;margin-top: 4px;"/>
			<span class="desc"><?php echo lang('united_states_customer_service'); ?></span>
		</a>
		<a id="global-cart" href="<?php echo __URL('APP_MAIN/goods/cart?shop_id='.$shop_id); ?>" class="new-btn buy-cart <?php if($carcount>0): ?>buy-cart-msg<?php endif; ?> ">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/goods_cart.png" style="width:20px;height:20px;margin-top: 4px;"/>
			<span class="desc"><?php echo lang('goods_cart'); ?></span>
		</a>
		<div class="big-btn-2-1">
		<?php if($goods_detail['is_open_presell'] == 0): if($goods_detail['goods_type'] == 1): ?>
			<a href="javascript:;" class="big-btn orange-btn" id="addCart"><?php echo lang('goods_add_cart'); ?></a>
			<a href="javascript:;" class="big-btn red-btn" id="buyBtn1"><?php echo lang('goods_buy_now'); ?></a>
		<?php else: ?>
			<a href="javascript:;" class="big-btn red-btn" id="buyBtn1" style="width: 100%;"><?php echo lang('goods_buy_now'); ?></a>
		<?php endif; else: ?>
		<a href="javascript:;" class="big-btn red-btn" id="goods_presell" style="width: 100%;"><?php echo lang('goods_immediate_reservation'); ?></a>
		<?php endif; ?>
		<input type="hidden" id="hidden_goods_type" value="<?php echo $goods_detail['goods_type']; ?>" />
		</div>
	</div>
</div>
<div class="btn_wrap btn_wrap_static btn_wrap_nocart no-server js-shelves">
	<div class="product-status"><?php echo lang('goods_laid_off'); ?></div>
</div>

	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>