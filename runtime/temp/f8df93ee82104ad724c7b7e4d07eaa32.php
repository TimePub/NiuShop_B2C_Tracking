<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:41:"template/adminblue\Order\orderDetail.html";i:1521270818;s:28:"template/adminblue\base.html";i:1522831681;s:45:"template/adminblue\controlCommonVariable.html";i:1522486340;s:32:"template/adminblue\urlModel.html";i:1510819828;s:41:"template/adminblue\Order\orderAction.html";i:1524017044;s:34:"template/adminblue\pageCommon.html";i:1512444925;s:34:"template/adminblue\openDialog.html";i:1522669943;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="shortcut icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<link rel="stylesheet" type="text/css" href="ADMIN_CSS/selectric.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #126AE4;border-color: #126AE4;}
	#copyright_meta a{color:#333;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/layer/layer.js"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<script src="ADMIN_JS/jquery.selectric.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
	
	<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰 
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var ADDONS = "__ADDONS__";
	var STATIC = "__STATIC__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
	var UPLOADGOODSVIDEO = "<?php echo constant('GOODS_VIDEO_PATH'); ?>";//存放商品视频
	var UPLOADFILE = "<?php echo constant('UPLOAD_FILE'); ?>";//存放文件
	var UPLOADWATERMARK = "<?php echo constant('UPLOAD_WATERMARK'); ?>";//存放水印图片
</script>
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/order.css">
<style>
.silider-express{padding-left: 10px;background: #fff;font-size: 12px;}
.logistics-tracking{padding-left:5px;}
.popover-content{width:700px;}
.popover{max-width:900px;}
.order_spec span{
	padding:8px 15px;
	margin-left:10px;
	float:right;
	border:1px solid #ccc;
	cursor: pointer;
}
.order_spec span:hover{
	border:1px solid #0689e1;
}
.order_spec{
	overflow:hidden;
	margin-top: 15px;
    margin-right: 20px;
}
</style>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<article class="ns-base-article">

	<header class="ns-base-header">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-search">
			<div class="nav-menu js-nav">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" />
			</div>
			<div class="ns-navigation-management">
				<div class="ns-navigation-title">
					<h4>导航管理</h4>
					<span>x</span>
				</div>
				<div style="height:40px;"></div>
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
				<dl>
					<dt><?php echo $nav['data']['module_name']; ?></dt>
					<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
					<dd>
						<a href="<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>"><?php echo $nav_sub['module_name']; ?></a>
					</dd>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="ns-search-block">
				<i class="fa fa-search" title="搜索"></i>
				<span>搜索</span>
				<div class="mask-layer-search">
					<input type="text" id="search_goods" placeholder="搜索" />
					<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
				</div>
			</div>
		</div>
		<nav>
			<ul>
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div class="ns-base-tool">
			<i class="i-home"  title="前台首页"><a href="<?php echo __URL('SHOP_MAIN'); ?>" target="_blank"></a></i>
			<i class="i-close" title="退出登录"><a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>"></a></i>
			<i class="ns-vertical-bar"></i>
			<div class="ns-help">
				<div class="logo">
				<?php if($user_headimg != ''): ?>
				<img src="<?php echo __IMG($user_headimg); ?>"/>
				<?php else: ?>
				<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
				<?php endif; ?>
				</div>
				<span><?php echo $user_name; ?></span>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li>
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
					</li>
					<li title="清理缓存" onclick="delcache()">
						<img src="__STATIC__/blue/img/clear_the_cache.png"/>
						<a href="javascript:;">清理缓存</a>
					</li>
					<li title="加入收藏" onclick="addFavorite()">
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="javascript:;">加入收藏</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<aside class="ns-base-aside">
		<div class="ns-main-block">
			
			<h3 style="margin-top:50px;">
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<span class="<?php echo $per['module_name']; ?>"><?php echo $per['module_name']; ?></span>
					<i class="fa fa-caret-down"></i>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</h3>
			
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- 快捷菜单列表 -->
					<?php if($is_show_shortcut_menu == 1): if(is_array($shortcut_menu_list) || $shortcut_menu_list instanceof \think\Collection || $shortcut_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shortcut_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$menu['url']); ?>';" title="<?php echo $menu['module_name']; ?>"><?php echo $menu['module_name']; ?></li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
				<!-- 快捷菜单设置按钮 -->
				<?php if($is_show_shortcut_menu == 1): ?>
				<div class="shortcut-menu" onclick="show_shortcut_menu()">
					<span></span>
					常用功能
				</div>
				<?php endif; ?>
			</nav>
			
			<div style="height:50px;"></div>
			
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
<!-- 					<p> -->
<!-- 						<span id="copyright_desc"></span> -->
<!-- 						<br/> -->
<!-- 						<a id="copyright_companyname" style="color: #333" target="_blank"></a> -->
<!-- 						<br/> -->
<!-- 						<span id="copyright_meta"></span> -->
<!-- 					</p> -->
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		
		
		
		<div style="position:relative;margin:0;">
			<!-- 面包屑导航 -->
			<?php if(!isset($is_index)): ?>
			<div class="breadcrumb-nav">
				<a href="<?php echo __URL('ADMIN_MAIN'); ?>"><?php echo $title_name; ?></a>
				<?php if($frist_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<a href="<?php echo __URL('ADMIN_MAIN/'.$frist_menu['url']); ?>"><?php echo $frist_menu['module_name']; ?></a>
				<?php endif; if($secend_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
					<a href="javascript:;" style="color:#999;"><?php echo $secend_menu['module_name']; ?></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- 三级导航菜单 -->
			
				<?php if(count($child_menu_list) > 1): ?>
				<nav class="ns-third-menu">
					<ul>
					<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
							<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php else: ?>
							<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</nav>
				<?php endif; ?>
			
			<div class="right-side-operation">
				<ul>
					
					
<!-- 					<?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?> style="display:block;" -->
					<li>
						<a class="js-open-warmp-prompt" href="javascript:;" data-menu-desc=''><i class="fa fa-question-circle"></i>&nbsp;提示</a>
						<div class="popover">
							<div class="arrow"></div>
							<div class="popover-content">
								<div>
									<?php if($secend_menu['desc']): ?>
									<h4>操作提示</h4>
									<p><?php echo $secend_menu['desc']; ?></p>
									<hr/>
									<?php endif; ?>
									<h4>功能提示</h4>
									<p class="function-prompts"></p>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		
		<!-- 操作提示 -->
		
<!-- 		<?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?> -->
		<div class="ns-warm-prompt" style="display:none;">
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
<!-- 					{1block name="alert_info"} -->
<!-- 					<i class="fa fa-info-circle"></i> -->
<!-- 					<span class="operating-hints">操作提示</span> -->
<!-- 						<?php if($secend_menu['desc']): ?> -->
<!-- 						<span><?php echo $secend_menu['desc']; ?></span> -->
<!-- 						<?php endif; ?> -->
<!-- 					{1/block} -->
				</h4>
			</div>
		</div>
		
		
		<div class="ns-main">
			
<div class="space-10"></div>
<div class="mod-table">
<?php if($order['order_status'] < 5 && $order['order_status'] > 0): ?>
<div class="step-region">
	<ul class="ui-step ui-step-4">
		<li class="ui-step-done"><div class="ui-step-title">买家下单</div><div class="ui-step-number">1</div><div class="ui-step-meta"><?php echo getTimeStampTurnTime($order['create_time'] ); ?></div></li>
		<li class="<?php if($order["order_status"] > 0): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">买家付款</div><div class="ui-step-number">2</div><div class="ui-step-meta"><?php if($order["order_status"] > 0): ?><?php echo getTimeStampTurnTime($order['pay_time'] ); endif; ?></div></li>
		<li class="<?php if($order["order_status"] > 1): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">商家发货</div><div class="ui-step-number">3</div><div class="ui-step-meta"><?php if($order["order_status"] > 1): ?><?php echo getTimeStampTurnTime($order['consign_time'] ); endif; ?></div></li>
		<li class="<?php if($order["order_status"] == 4): ?>ui-step-done<?php endif; ?>"><div class="ui-step-title">交易完成</div><div class="ui-step-number">4</div><div class="ui-step-meta"><?php if($order["order_status"] == 4): ?><?php echo getTimeStampTurnTime($order['finish_time'] ); endif; ?></div></li>
	</ul>
</div>
<?php endif; ?>
<div class="step-region clearfix">
	<div class="info-region">
		<div class="info-div">订单信息<span class="secured-title">担保交易</span></div>
		<table class="info-table">
		<tbody>
			<tr><th>订单编号：</th><td><?php echo $order['order_no']; ?></td></tr>
			<tr style="display: table-row;"><th>订单类型：</th><td>普通订单</td></tr>
			<tr><th>付款方式：</th><td><?php echo $order['payment_type_name']; ?></td></tr>
			<tr><th>买家：</th><td><span><?php echo $order['user_name']; ?></span></td></tr>
		</tbody>
		</table>
		<div class="dashed-line"></div>
		<table class="info-table">
			<tbody>
					<tr><th>配送方式：</th><td><?php echo $order['shipping_type_name']; ?>&nbsp;&nbsp;<?php echo $order['shipping_company_name']; ?></td></tr>
					<?php if($order['shipping_type'] == 1): ?>
						<!-- 只有物流配送才有配送时间 -->
					<tr>
						<th>配送时间：</th>
						<?php if($order['shipping_time']>0): ?>
						<td><?php echo getTimeStampTurnTimeByYmd($order['shipping_time']); ?></td>
						<?php else: ?>
						<td>工作日、双休日与节假日均可送货</td>
						<?php endif; ?>
					</tr>
					<?php elseif($order['shipping_type'] == 3 && $order['shipping_status'] == 1): ?>
						<!-- 本地配送 -->
						<tr>
							<th>配送信息：</th>
							<td>
								<p>配送单号：<?php echo $order['distribution_info']['express_no']; ?></p>
								<p>配送人：<?php echo $order['distribution_info']['order_delivery_user_name']; ?></p>  
								<p>配送人手机号：<?php echo $order['distribution_info']['order_delivery_user_mobile']; ?></p>
								<p>备注：<?php echo $order['distribution_info']['remark']; ?> </p>
							</td>
					</tr>
					<?php endif; switch($order['shipping_type']): case "1": ?>
					<!-- 物流 -->
					<tr>
						<th>收货信息：</th>
						<td>
							<p><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php if(!(empty($order['fixed_telephone']) || (($order['fixed_telephone'] instanceof \think\Collection || $order['fixed_telephone'] instanceof \think\Paginator ) && $order['fixed_telephone']->isEmpty()))): ?><?php echo $order['fixed_telephone']; ?>，<?php endif; ?> <?php echo $order['address']; ?>&nbsp;<?php if($order['receiver_zip']!=''): ?>&nbsp;，<?php echo $order['receiver_zip']; endif; ?></p>
						</td>
					</tr>
					<?php break; case "2": ?>
					<!-- 自提 -->
					<tr>
						<th>自提地址：</th>
						<td>
							<p><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['dictrict_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></p>
						</td>
					</tr>
					<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): ?>
				<tr>
					<th>发票抬头：</th>
					<td>
						<?php if(!empty($order['buyer_invoice_info'][0])): ?>
						<?php echo $order['buyer_invoice_info'][0]; endif; ?>
					</td>
				</tr>
				<tr>
					<th>纳税人识别号：</th>
					<td>
						<?php if(!empty($order['buyer_invoice_info'][2])): ?>
						<?php echo $order['buyer_invoice_info'][2]; else: ?>
						-
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<th>发票内容：</th>
					<td>
						<?php if(!empty($order['buyer_invoice_info'][1])): ?>
						<?php echo $order['buyer_invoice_info'][1]; endif; ?>
					</td>
				</tr>
				<?php endif; ?>
				<tr>
					<th>买家留言：</th>
					<?php if($order['buyer_message'] !=''): ?>
					<td><?php echo $order['buyer_message']; ?></td>
					<?php else: ?>
					<td>此订单没有留言</td>
					<?php endif; ?>
				</tr>
				<?php if($order['seller_memo'] != ''): ?>
				<tr>
					<th>卖家备注：</th>
					<td><?php echo $order['seller_memo']; ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
	<div class="state-region">
		<div style="padding: 0px 0px 30px 40px;">
			<div class="state-title"><span class="icon info">!</span>订单状态：<?php echo $order['status_name']; ?></div>
			<div class="state-action">
			<?php if(is_array($order['operation']) || $order['operation'] instanceof \think\Collection || $order['operation'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['operation'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<button class="zent-btn zent-btn-primary test-send-goods" onclick="operation('<?php echo $v['no']; ?>',<?php echo $order['order_id']; ?>)"><?php echo $v['name']; ?></button>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="state-remind-region">
			<div class="dashed-line"></div>
			<div class="state-remind"><div class="tixing"><?php echo $title_name; ?>提醒：</div>
				<ul><li>如果无法发货，请及时与买家联系并说明情况后进行退款；</li>
				<li>买家申请退款后，须征得买家同意后再发货，否则买家有权拒收货物；</li>
				<li>买家付款后超过7天仍未发货，将有权申请客服介入发起退款维权；</li></ul>
			</div>
		</div>
	</div>
</div>
<table class="ui-table ui-table-simple goods-table order-detail-goods-table">
	<thead>
		<tr>
			<th style="width:8%;">商品图</th>
			<th class="cell-10" style="width:40%;">商品</th>
			<th style="width:10%;">价格(元)</th>
			<th style="width:10%;">数量</th>
			<th style="width:10%;">调整金额(元)</th>
			<th class="cell-13" style="width:10%;">小计(元)</th>
			<th style="width:15%;">配送状态</th>
		</tr>
	</thead>
	<tbody>
	<!-- 待发货商品 -->
	<?php if($order['order_goods_no_delive']): if(is_array($order['order_goods_no_delive']) || $order['order_goods_no_delive'] instanceof \think\Collection || $order['order_goods_no_delive'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods_no_delive'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="test-item">
				<td class="td-goods-image" rowspan="1">
					<div class="ui-centered-image" style="width: 48px; height: 48px;">
						<img src="<?php echo __IMG($vo['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px; max-height: 48px;">
					</div>
				</td>
				<td class="cell-10" style="width:200px;">
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>" target="_blank"><?php echo $vo['goods_name']; ?></a>
					<p class="c-gray"><?php echo $vo['sku_name']; ?></p>
					<?php if($vo['gift_flag'] > 0): ?>
					<i style="font-size:12px;margin:0 5px 0 0;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#de533c;height:16px;line-height: 16px;overflow:hidden;font-style:normal;">赠品</i>
					<?php endif; ?>
				</td>
				<td><?php echo $vo['price']; ?></td>
				<td><?php echo $vo['num']; ?></td>
				<td><?php echo $vo['adjust_money']; ?></td>
				<td><p><?php echo $vo['goods_money']; ?></p></td>
				<td>
					<p><?php echo $vo['shipping_status_name']; ?></p>
					<?php if($vo['refund_status'] != 0): ?>
						<p><a href="<?php echo __URL('ADMIN_MAIN/order/orderrefunddetail','itemid='.$vo['order_goods_id']); ?>"><?php echo $vo['status_name']; ?></a></p>
					<?php endif; ?>
				</td>
			</tr>
			<tr><td colspan="9"></td></tr>
		<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	<!-- 已发货 -->
	<?php if($order['goods_packet_list']): if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['goods_packet_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<tr style="background-color:#f2f2f2;color:#999;font-weight:bold;">
		<td colspan="7"><a href="javascript:;" style="color:rgba(34, 34, 34, 0.71);font-size:14px;"><?php echo $v['packet_name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php if($v['is_express'] == 1): ?>
			<?php echo $v['express_name']; ?>&nbsp;&nbsp;运单号:<?php echo $v['express_code']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" data-html="true" class="logistics-tracking" data-container="body" data_express="<?php echo $v['express_name']; ?>" data-placement="top" data-trigger="manual" goods_id="<?php echo $v['express_id']; ?>" data-show="1">物流跟踪</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="operation('update_express',<?php echo $order['order_id']; ?>)" >修改运单号 </a>
		<?php endif; ?>
		</td>
		</tr>
		<?php if(is_array($v['order_goods_list']) || $v['order_goods_list'] instanceof \think\Collection || $v['order_goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['order_goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr class="test-item">
			<td class="td-goods-image" rowspan="1">
				<div class="ui-centered-image" style="width: 48px; height: 48px;">
					<img src="<?php echo __IMG($vo['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px; max-height: 48px;">
				</div>
			</td>
			<td class="cell-10" style="width:200px;">
				<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>" target="_blank"><?php echo $vo['goods_name']; ?></a>
				<p class="c-gray"><?php echo $vo['sku_name']; ?></p>
				<?php if($vo['gift_flag'] > 0): ?>
					<i style="font-size:12px;margin:0 5px 0 0;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#de533c;height:16px;line-height: 16px;overflow:hidden;font-style:normal;">赠品</i>
				<?php endif; ?>
			</td>
			<td><?php echo $vo['price']; ?></td>
			<td><?php echo $vo['num']; ?></td>
			<td><?php echo $vo['adjust_money']; ?></td>
			<td><p><?php echo $vo['goods_money']; ?></p></td>
			<td>
				<p>
					<?php echo $vo['shipping_status_name']; if($vo['refund_status'] != 0): ?>
						<p><a href="<?php echo __URL('ADMIN_MAIN/order/orderrefunddetail','itemid='.$vo['order_goods_id']); ?>"><?php echo $vo['status_name']; ?></a></p>
					<?php endif; ?>
				</p>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endif; ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="9" class="text-right">
				<span>商品总金额：￥<?php echo $order['goods_money']; ?>，</span>
				
				<?php if($order['user_platform_money']>0): ?>
				<span>余额支付：￥<?php echo $order['user_platform_money']; ?>，</span>
				<?php endif; if($order['coupon_money']>0): ?>
				<span>优惠券：￥<?php echo $order['coupon_money']; ?>，</span>
				<?php endif; if($order['tax_money']>0): ?>
				<span>发票税额：￥<?php echo $order['tax_money']; ?>，</span>
				<?php endif; if($order['promotion_money']>0): switch($order['promotion_type']): case "MANJIAN": ?><span>满减优惠：￥<?php echo $order['promotion_money']; ?>，</span><?php break; case "ZUHETAOCAN": ?><span>套餐优惠：￥<?php echo $order['promotion_money']; ?>，</span><?php break; endswitch; endif; if($order['point']>0): ?>
				<span>使用积分：<?php echo $order['point']; ?>，</span>
				<?php endif; ?>
				
				<span> 实际需支付：<b class="real-pay c-red">￥<?php echo $order['pay_money']; ?></b></span>
				<span>（含运费 ￥<?php echo $order['shipping_money']; ?>）</span>
			</td>
		</tr>
	</tfoot>
</table>

<table class="ui-table ui-table-simple goods-table order-detail-goods-table" style="border-top:none;">
	<thead>
		<tr>
			<th>订单日志</th>
		</tr>
	</thead>
	<tbody>
	<?php if(is_array($order['order_action']) || $order['order_action'] instanceof \think\Collection || $order['order_action'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_action'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
		<tr class="test-item">
			<td class="td-goods-image" colspan="9">
			 操作备注：&nbsp;&nbsp; <?php echo $v1['user_name']; ?>&nbsp;&nbsp;&nbsp;于&nbsp;&nbsp;&nbsp;<?php echo getTimeStampTurnTime($v1['action_time'] ); ?>&nbsp;&nbsp;&nbsp;【<?php echo $v1['action']; ?>】
			</td>
		</tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>

<div class="order_spec">
	<a href="<?php echo __URL('ADMIN_MAIN/order/orderdetail','order_id='.$next_order[0]['order_id']); ?>"><span>下一单</span></a><a href="<?php echo __URL('ADMIN_MAIN/order/orderdetail','order_id='.$prev_order[0]['order_id']); ?>"><span>上一单</span></a>
</div>


</div>
<input type="hidden" id="order_id" value="<?php echo $order['order_id']; ?>" />
<script type="text/javascript">
$(function(){
	//查询物流
	$(".logistics-tracking").mouseover(function(){
		$(".logistics-tracking").removeAttr("data-show");
		$(this).attr("data-show",1);
	});
	var html = '';
	$(".logistics-tracking").hover(function(){
		
		var curr = $(this);
		var order_goods_id = curr.attr('goods_id');
		var express_name = curr.attr('data_express');
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/order/getexpressinfo'); ?>",
			data : {"order_goods_id":order_goods_id},
			beforeSend : function(){
				html = '<div class="silider-express">';
				html += '<div class="mask-layer-loading" style="text-align:center;">';
				html += '<img src="ADMIN_IMG/mask_load.gif"/>';
				html += '<div style="text-align:center;margin-top:10px;">努力加载中...</div>';
				html += '</div>';
				html += '</div>';
				$(".logistics-tracking").popover({content : html});
				curr.popover("show");
			},
			success : function(data) {
				if(data["Success"]){
					html = '<div class="silider-express">';
					html += '<div class="express_names">快递公司:'+express_name+'</div>';
					html += '<div>';
					html += '<div>物流跟踪：</div>';
					if (data["Traces"].length > 0) {
						for (var i = 0; i < data["Traces"].length; i++){
								html += '<p style="width:76%;float:left;">'+ data["Traces"][i]["AcceptStation"]+'</p>';
								html += '<p style="width:24%;float:right;">'+ data["Traces"][i]["AcceptTime"]+'</p>';
						}
					} 
					html += '</div>';
			 		html += '</div>';
				}else{
					html = '<div class="silider-express">'+ data["Reason"] +'</div>';
				}
		 		curr.popover("destroy");
				curr.popover({content : html});
				curr.popover("show");
			}
		});
	},function(){
		$(this).popover("hide");
	});
	
})
</script>
<style>
.modal-body{max-height:none;overflow-y: visible;}
.editprice-input{width:100px;}
.pick_title{float: left;line-height: 32px; width: 140px;text-align:right;}
.pick_title .required{color:red;margin-right:10px;}
textarea{width: 350px;}  
#pickup_name,#pickup_mobile{width: 350px;}
.address_choice select{width:118px}
.modal-backdrop{background-color: #000000;}
.form-group:after{content:"";display:block;clear:both;}
</style>

<!-- 模态框（Modal） -->
<div id="edit-price" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px;overflow: overlay;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 10px;">×</button>
		<h3 id="H1">修改价格</h3>
	</div>
	<div class="modal-body">
		<table class="table table-striped table-main table-order-header">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">	
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody>
				<tr>
					<td>商品信息</td>
					<td>商品清单</td>
					<td>
						<div class="editprice-tiptxt">涨价或减价<i class="icon-tip"></i>
							<p class="text-tip">-表示减价<i class="icon-down-pic"></i></p>
						</div>
					</td>
					<td>邮费</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-bordered table-order-list">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody id="OrderCommodity"></tbody>
		</table>
		<ul class="edit-price-amountpay">
			<li>
				<span class="amountpay-label">商品总价：</span>
				<span class="amountpay-price" id="goodsmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">商品优惠：</span>
				<span class="amountpay-price" id="discountmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">运费：</span>
				<span class="amountpay-price" id="modifiedFreight"></span>元
			</li>
			<li>
				<div>
					实收款： <span class="amountpay-price reality-price" id="changeTotal"></span>元
					<input type="hidden" id="hiedchangeTotal" />
				</div>
			</li>
		</ul>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="updPrice()" id="butSubmit">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<div class="modal hide fade" id="Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="left:32%">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品发货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div style="padding: 0 0 10px 0;">待发货(<span id="no_shipping_num"></span>)，已选<span id="checkedbox">0</span></div>
				<table class="table-class" style="margin-bottom:10px;">
					<thead>
						<tr>
							<th>
								<i class="checkbox-common"><input type="checkbox" id="inlineCheckbox1" onclick="deliveryCheckAll(this)"></i>
							</th>
							<th>商品</th>
							<th>数量</th>
							<th>物流 | 单号</th>
							<th>状态</th>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 5%;">
						<col style="width: 40%;">
						<col style="width: 10%;">
						<col style="width: 30%;">
						<col style="width: 15%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;">
						<i class="radio-common">
							<input type="radio" name="shipping_type" id="shipping_type0" value="0">
						</i>
						<span>无需物流</span>
					</label>
					<label class="checkbox-inline" style="float:left;">
						<i class="radio-common selected">
							<input type="radio" name=shipping_type id="shipping_type1" value="1" checked="checked">
						</i>
						<span>需要物流</span>
					</label>
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input" style="margin:5px 0 10px 0;">
					<select class="form-control" id="divlogistics_express_company" ></select>
					<input type="text" id="divlogistics_express_no" class="input-common" placeholder="请填写快递单号" style="vertical-align:2px;">
				</div>
				<div id="receiver_info" style="clear:both;"></div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="o2o_delivery_order_id"/>
				<button class="btn-common btn-big" onclick="orderDeliverySubmit()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<!-- 本地配送模态框 -->
<div class="modal hide fade" id="o2o_Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="left:32%">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品发货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div>待发货(<span id="o2o_shipping_num"></span>)</div>
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead>
						<tr>
							<td>商品</td>
							<td>数量</td>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 60%;">
						<col style="width: 40%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">配送人员：</div>
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input">
					<select class="form-control input-lg" id="o2o_delivery_user" ></select>
					<input type="text" id="o2o_delivery_no" class="input-common" placeholder="请填写配送单号" style="vertical-align:2px;">
				</div>
				<div id="receiver_info"></div>
				<div>
					<div style="margin-bottom:5px;">备注：</div>
					<textarea class="remark textarea-common" style=" width: 440px;height: 80px;" maxlength="500"></textarea>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="delivery_order_id"/>
				<button class="btn-common btn-big" onclick="o2oDeliverySubmit()">提交更改</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>


<!-- 自提模态 -->
<div class="modal hide fade" id="pickup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品提货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead></thead>
					<colgroup><colgroup>
					<tbody></tbody>
				</table>
				
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>提货人：</div>
					<div class="col-lg-4"><input type="text" id="pickup_name" class="form-control input-common" placeholder="请填写提货人姓名"></div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>提货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="pickup_mobile" class="form-control input-common" placeholder="请填写提货人手机号"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">备注：</div>
					<div class="col-lg-2"><textarea id="pickup_desc" class="textarea-common"></textarea></div>
				</div>
			
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="pickup_order_id" />
				<button class="btn-common btn-big" onclick="orderPickupSubmit(pickup_order_id)">确认提货</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!-- 修改收货地址模态 -->
<div class="modal hide fade" id="update_address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>修改收货地址</h3>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>收货人：</div>
					<div class="col-lg-4"><input type="text" id="receiver_name" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>收货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="receiver_mobile" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">收货人固定电话：</div>
					<div class="col-lg-4"><input type="text" id="fixed_telephone" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">收货人邮编：</div>
					<div class="col-lg-4"><input type="text" id="receiver_zip" class="form-control input-common" style="width:350px;margin-bottom:10px !important;" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')"></div>
				</div>
				<div class="form-group" style="width:100%;margin-bottom: 10px;">
					<div class="pick_title"><span class="required">*</span>收货地址：</div>
					<div class="address_choice">
						<select name="province" id="seleAreaNext" onchange="GetProvince();" class="select-common harf">
							<option value="">请选择省</option>
						</select>
						<select name="city" id="seleAreaThird" onchange="getSelCity();" class="select-common harf">
							<option value="">请选择市</option>
						</select>
						<select name="district" id="seleAreaFouth" class="select-common harf">
							<option value="-1">请选择区/县</option>
						</select>
						<input type="hidden" id="provinceid" >
						<input type="hidden" id="cityid" >
						<input type="hidden" id="districtid" >
					</div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>详细地址：</div>
					<div class="col-lg-4"><input type="text" id="address_detail" class="form-control input-common" style="width:350px"></div>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="update_address_id" />
				<button type="button" class="btn-common btn-big" onclick="updateAddressSubmit(update_address_id)">修改</button>
				<button type="button" class="btn-common-white btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade hide" id="Memobox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;left:45%;top:30%;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>备注信息</h3>
			</div>
			<div class="set-style">
				<dl>
					<dt><span class="required">*</span>备注:</dt>
					<dd>
						<p>
							<textarea rows="3" cols="20" id="memo" class="textarea-common"></textarea>
						</p>
						<p class="error">请输入备注</p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn-common btn-big" onclick="addMemoAjax()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>


<!-- 修改运单号 -->
<div class="modal hide fade" id="update_express" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 700px; left: 45%; top: 30%; display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>修改运单号</h3>
			</div>
	 			<div class="modal-body">
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;">
						<i class="radio-common">
							<input type="radio" name="shipping_type_update" id="shipping_type2" value="0">
						</i>
						<span>无需物流</span>
					</label>
					<label class="checkbox-inline" style="float:left;">
						<i class="radio-common selected">
							<input type="radio" name=shipping_type_update id="shipping_type3" value="1" checked="checked">
						</i>
						<span>需要物流</span>
					</label>
				
					<div style="clear:both;"></div>
					<div class="form-group" id="update_express_input" style="margin:5px 0 10px 0;height: 30px;">
						<select class="select-common" id="update_divlogistics_express_company" ></select>
						<input type="text" id="update_divlogistics_express_no" class="input-common" placeholder="请填写快递单号" style="vertical-align:1px;">
					</div>

					<div id="receiver_infos"></div>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="order_goods_express_id"/>
				<button class="btn-common btn-big" onclick="updateExpressAjax()">提交更改</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<script>
$(function() {

	var selCity = $("#seleAreaNext")[0];
	for (var i = selCity.length - 1; i >= 0; i--) {
		selCity.options[i] = null;
	}
	var opt = new Option("请选择省", "-1");
	selCity.options.add(opt);
	// 添加省
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/getprovince'); ?>",
		dataType : "json",
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].province_name,data[i].province_id);
					selCity.options.add(opt);
				}
				
				if(typeof($("#provinceid").val())!='undefined'){
					$("#seleAreaNext").val($("#provinceid").val());
					GetProvince();
					$("#provinceid").val('-1');
				}
				$("#seleAreaNext").selectric({maxHeight:500});
			} 
		}
	});

	$("#shipping_type1").focus(function(){
		$("#express_input").show();
	});

	$("#shipping_type0").focus(function(){
		$("#express_input").hide();
	});
	
	$("#shipping_type3").focus(function(){
		$("#update_express_input").show();
	});

	$("#shipping_type2").focus(function(){
		$("#update_express_input").hide();
	});
});
/*****订单相关操作函数开始*****/
function operation(operation_type, order_id){
	if(operation_type == 'pay'){
		orderOffLinePay(order_id);//线下支付
	}else if(operation_type == 'complete'){
		orderComplete(order_id);//交易完成
	}else if(operation_type == 'delivery'){
		orderDelivery(order_id);//发货
	}else if(operation_type == 'close'){
		orderClose(order_id);//交易关闭
	}else if(operation_type == 'adjust_price'){
		modifyPrice(order_id);//修改价格
	}else if(operation_type == 'pickup'){
		pickuporder(order_id);//提货
	}else if(operation_type == 'seller_memo'){
		orderSellerMemo(order_id);//备注
	}else if(operation_type == 'logistics'){
		//查看物流
		location.href = __URL(ADMINMAIN+'/order/orderdetail?order_id='+order_id);
	}else if(operation_type == 'update_express'){
		updateExpress(order_id);//修改运单号
	}else if(operation_type == 'update_address'){
		update_address(order_id);//修改收货地址
	}else if(operation_type == 'getdelivery'){
		getdelivery(order_id);//确认收货
	}else if(operation_type == 'delete_order'){
		delete_order(order_id);//删除订单
	}else if(operation_type == 'o2o_delivery'){
		o2o_delivery(order_id);//o2o发货
	}else if(operation_type == 'order_presell'){
		presellOrderOffLinePay(order_id);//预售线下支付
	}else if(operation_type == 'stocking_complete'){
		presellStockingComplete(order_id);
	}
}

function orderDelivery(order_id){
	$("#Delivery").modal('show');
	$("#divlogistics_express_company option").remove();
	$("#Delivery .modal-body table tbody tr").remove();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/orderdeliverydata'); ?>",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
				}
			} 
			$("#divlogistics_express_company").append(co_html).addClass("select-common").selectric({maxHeight:500});
			
			$("#divlogistics_express_company").val(data['order_info']["shipping_company_id"]);
			
			var go_html = '';
			var no_shipping_num = 0;
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr align="center">';
				if(data['order_goods_list'][i]['shipping_status'] > 0){
					go_html += '<td><i class="checkbox-common"><input type="checkbox" value="'+data['order_goods_list'][i]['shipping_status']+'" disabled="true"></i></label></td>';
				}else{
					go_html += '<td><i class="checkbox-common"><input type="checkbox" id="'+data['order_goods_list'][i]['order_goods_id']+'" value="'+data['order_goods_list'][i]['shipping_status']+'" onclick="deliveryCheck(this)"></i></td>';
				}
				go_html += '<td><a>'+data['order_goods_list'][i]['goods_name']+'</a></td>';
				go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				if(data['order_goods_list'][i]['shipping_status'] == 0 || data['order_goods_list'][i]['express_info']['express_company'] == undefined){
					go_html += '<td></td>';
				}else{
					go_html += '<td>'+data['order_goods_list'][i]['express_info']['express_company']+' | '+data['order_goods_list'][i]['express_info']['express_no']+'</td>';
				}
				go_html += '<td>'+data['order_goods_list'][i]['shipping_status_name']+'</td>';
				go_html += '</tr>';
			}
			$("#no_shipping_num").html(no_shipping_num);
			$("#Delivery .modal-body table tbody").append(go_html);
		}
	});
}

var flag = false;
function orderDeliverySubmit(){
	var order_id = $("#delivery_order_id").val();
	var order_goods_id_array = '';
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]").each(function(i){
		if(0==i){
			order_goods_id_array = $(this).attr('id');
		}else{
			order_goods_id_array += (","+$(this).attr('id'));
		}
	});
	if(order_goods_id_array == ''){
		showTip("至少选择一个商品",'warning');
		return false;
	}
	var express_name = $("#divlogistics_express_company").find("option:selected").text();
	var shipping_type = $('#Delivery input[name="shipping_type"]:checked').val();
	var express_company_id = $("#divlogistics_express_company").val();
	var express_no = $("#divlogistics_express_no").val();
	if(shipping_type == 1){
		if(express_company_id == "0"){
			showTip("请选择物流公司",'warning');
			return false;
		}
		if(express_no == ""){
			showTip("请填写快递单号",'warning');
			$("#divlogistics_express_no").focus();
			return false;
		}
	}
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/orderdelivery'); ?>",
		data : {'order_id':order_id,"order_goods_id_array":order_goods_id_array,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
		success : function(data) {
			$("#Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
				flag = false;
			}
		}
	});
}

function deliveryCheckAll(event){
	var checked = event.checked;
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").prop("checked",checked);
	var parent = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").parent();
	if(checked) parent.addClass('selected');
	else parent.removeClass("selected");
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

function deliveryCheck(event){
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

//全选
function CheckAll(event){
	var checked = event.checked;
	$(".table-class tbody input[type = 'checkbox']").prop("checked",checked);
	if(checked) $(".table-class tbody input[type = 'checkbox']").parent().addClass("selected");
	else $(".table-class tbody input[type = 'checkbox']").parent().removeClass("selected");
}

function orderOffLinePay(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "<?php echo __URL('ADMIN_MAIN/order/orderofflinepay'); ?>",
						data : {'order_id':order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});
}

//预售订单线下支付
function presellOrderOffLinePay(presell_order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "<?php echo __URL('ADMIN_MAIN/orderpresell/presellOrderOffLinePay'); ?>",
						data : {'presell_order_id':presell_order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});
}





function orderComplete(order_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/ordercomplete'); ?>",
		data : {'order_id':order_id},
		success : function(data) {
			if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

function orderClose(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "<?php echo __URL('ADMIN_MAIN/order/orderclose'); ?>",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定关闭订单吗？",
	});
}

//修改价格
function modifyPrice(order_id,orderFreight){
	if(orderFreight == null){
		orderFreight = 0;
	}
	orderInfo ={
		express_fee: 0,
		total: 0,
		goodsArray: new Array()
	};
	$("#butSubmit").val(order_id);
	var str = "";
	var Total = 0.00;
	var Count = 0;
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getordergoods'); ?>",
		data: { "order_id": order_id },
		dataType: "json",
		async: false,
		success: function (jsonData) {
			var Subtotal = 0.0;
			var order_info = jsonData[1];
			jsonData = jsonData[0];
			for (var i = 0 ; i < jsonData.length; i++) {
				Price = (jsonData[i].price * 1);
				Count = (jsonData[i].num * 1);
				Subtotal = parseFloat(Price) * parseInt(Count);//单商品总价
				Total += parseFloat(Subtotal * 1);
				str += "<tr>";
				str += "<td>";
				str += "<div class='product-img'><img src='"+__IMG(jsonData[i]['picture_info']['pic_cover_micro']) + "'></div>";
				str += "<div class='product-infor'>";
				//原总金额
				var item_now_money = parseFloat(jsonData[i].price*jsonData[i].num)+parseFloat(jsonData[i].adjust_money);
				str += "<input type='hidden' id='total"+jsonData[i].order_goods_id+"' value='"+item_now_money*(item_now_money/parseFloat(jsonData[i].goods_money))+"'>";
				str += "<a class='name' href="+__URL('APP_MAIN?id='+jsonData[i].goods_id)+" target='_blank'>" + jsonData[i].goods_name + "</a>";
				str += "<p class='specification'><span>规格:" + jsonData[i].sku_name + "</span></p>";
				str += "<div class='div-flag-style'>";
				str += "</div>";
				str += "</div>";
				str += "</td>";
				str += "<td>";
				str += "<div class='cell'><span name='Commoditymark' count='" + jsonData[i].num + "' id='" + jsonData[i].goods_id + "' dir='" + jsonData[i].price + "' value='" + jsonData[i].price + "'>￥" + jsonData[i].price + "</span></div>";
				str += "<div class='cell' id='Count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>" + jsonData[i].num + "件</div>";
				str += "</td>";
				str += "<td>";
				str += "<div class='editprice-discount'><input  type='hidden' id='productPrice" + jsonData[i].order_goods_id + "' value='" + jsonData[i].price + "'><input type='hidden' id='count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>";
				str += "<div class='editprice-minus'><input name='caculatePrice'  onchange=\"caculatePrice()\" id='" + jsonData[i].order_goods_id + "' value='"+jsonData[i].adjust_money+"'  class='editprice-input price input-common harf' type='number'  placeholder='0'  /></div>";
				str += "</td>"; 
				if (i == 0) {
					str += "<td rowspan='"+jsonData.length+"'>";
					str += "<input onchange=\"caculatePrice()\" id='Freightnumber' type='number' placeholder='0'  class='editprice-input input-common harf' value='"+order_info.shipping_money+"' ";
					if(orderFreight != 0 || orderFreight != ''){
						str += orderFreight;
					}
					str += "' min='0'/>";
					str += "<p class='muted'>直接输入邮费金额</p>";
					str += "<input type='hidden' id='hidorderNumber' value='" + jsonData[i].order_id + "'>";
					str += "<input type='hidden' id='freighthidden' value='" + orderFreight + "'>";
					str += "<input type='hidden' id='goodsmoneyhidden' value=''>";
					str += "<input type='hidden' id='favourable' value='0'>";
					str += "</td>";
					str += "</tr>";
				}
				$("#OrderCommodity").html(str);
				$("#changeTotal").html(Total.toFixed(2));
				$("#goodsmoney").html(order_info.goods_money);
				$("#goodsmoneyhidden").val(Total);
				var discount_money =order_info.point_money*1.00+order_info.coupon_money*1.00+order_info.user_money*1.00+order_info.promotion_money*1.00;
				$("#discountmoney").html(discount_money);
				$("#changeTotal").html(order_info.pay_money); 
				$("#hiedchangeTotal").html(Total);
			}
			$("#modifiedFreight").html(order_info.shipping_money);
			var freight = $("#Freightnumber").val() == 0 ? 0 : $("#Freightnumber").val(); 
			$('#edit-price').modal('show');
		}
	});
}
//重新计算
function caculatePrice(){
	//设置邮费
	if($("#Freightnumber").val() < 0 || $("#Freightnumber").val() == ''){
		showTip("邮费错误！","warning");
		return false;
	}
	var Freightnumber = $("#Freightnumber").val();//邮费input
	$("#modifiedFreight").html(Freightnumber);
	//调整金额
	var price = 0.00;
	$("input[name = 'caculatePrice']").each(function(i){
		if(0 == i){
			price = parseFloat($(this).val());
		}else{
			price = parseFloat($(this).val()) + parseFloat(price);
		}
	});
	var goods_money  = $("#goodsmoneyhidden").val();
	new_goods_money = (parseFloat(price)+parseFloat(goods_money)).toFixed(2);
	if(new_goods_money <0){
		$(".price").val(-goods_money);
		caculatePrice();
	}
	$("#goodsmoney").html(new_goods_money);
	// 获取邮费
	var modifiedFreight = $("#modifiedFreight").html(); 
	// 获取优惠金额
	var discountmoney = $("#discountmoney").html();
	//计算实收款
	new_hiedchangeTotal = (parseFloat(new_goods_money)+parseFloat(modifiedFreight)-parseFloat(discountmoney)).toFixed(2);
	$("#changeTotal").html(new_hiedchangeTotal);
}
	
/**
* 保存修改的价格
* $order_id, $goods_money, $shipping_fee
*/
function updPrice(){
	var order_id = $("#hidorderNumber").val();
	var order_goods_id_adjust_array = '';
	var shipping_fee = $("#Freightnumber").val();
	$("input[name = 'caculatePrice']").each(function(i){
		if(0 == i){
			order_goods_id_adjust_array = $(this).attr('id')+','+$(this).val();
		}else{
			order_goods_id_adjust_array += ';'+$(this).attr('id')+','+$(this).val();
		}
	});
	if(parseFloat($("#changeTotal").text()).toFixed(2) == 0.00){
		showTip("实收款最小0.01元","warning");
		return;
	}
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/orderadjustmoney'); ?>",
		data: { "order_id": order_id, "order_goods_id_adjust_array":order_goods_id_adjust_array, "shipping_fee":shipping_fee},
		dataType: "json",
		async: false,
		success: function (data) {
		if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
				$("#edit-price").modal("hide");
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

//自提订单 进行提货
function pickuporder(order_id){
	$("#pickup .modal-body table tbody tr").remove();
	$("#pickup_order_id").val(order_id);
	$("#pickup").modal('show');
}

//查看订单备注
function orderSellerMemo(order_id){
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/order/getordersellermemo'); ?>",
		data : { "order_id" : order_id },
		success : function(res){
			$("#order_id").val(order_id);
			$("#memo").val(res);
			$("#Memobox").modal("show");
		}
	});
}

// 提货进行提交数据
function orderPickupSubmit(){
	var pickup_order_id = $("#pickup_order_id").val();
	var pickup_name = $("#pickup_name").val();
	var pickup_mobile = $("#pickup_mobile").val();
	var pickup_desc = $("#pickup_desc").val();
	if(pickup_name == ''){
		showTip("请填写提货人姓名","warning");
		$("#pickup_name").focus();
		return false;
	}
	if(pickup_mobile == ''){
		showTip("请填写提货人手机号","warning");
		$("#pickup_mobile").focus();
		return false;
	}
	if(pickup_mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
		showTip("请填写正确格式的手机号!","warning");
		$("#pickup_mobile").select();
		return false;
	}
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/pickuporder'); ?>",
		data: { "order_id": pickup_order_id, "buyer_name":pickup_name, "buyer_phone":pickup_mobile, "remark":pickup_desc},
		dataType: "json",
		async: false,
		success: function (data) {
		if (data["code"] > 0) {
				showMessage('success', '提货成功',window.location.reload());
			}else{
				showMessage('error', '提货失败');
			}
		}
	});
}

//查询修改的收货地址的信息
function update_address(order_id){
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/order/getOrderUpdateAddress'); ?>",
		data : { "order_id" : order_id },
		success : function(data){
			$("#receiver_name").val(data['receiver_name']);
			$("#receiver_mobile").val(data['receiver_mobile']);
			$("#fixed_telephone").val(data['fixed_telephone']);
			$("#receiver_zip").val(data['receiver_zip']);
			var provinceid = data['receiver_province'] > 0 ? data['receiver_province'] : -1;
			var cityid = data['receiver_city'] > 0 ? data['receiver_city'] : -1;
			var districtid = data['receiver_district'] > 0 ? data['receiver_district'] : -1;
			$("#seleAreaNext").val(provinceid);
			$("#provinceid").val(provinceid);
			$("#cityid").val(cityid);
			$("#districtid").val(districtid);
			$("#seleAreaNext option[value='"+provinceid+"']").attr("selected", true);
			$("#seleAreaNext").selectric({maxHeight:500});
			GetProvince();
			getSelCity();
			var address_arr = data['receiver_address'].split('&nbsp;');
			if(address_arr[3] != undefined){
				$("#address_detail").val(address_arr[3]);
			}else{
				$("#address_detail").val("");
			}
			$("#update_address").modal('show');
			$("#update_address .modal-body table tbody tr").remove();
			$("#update_address_id").val(order_id);
		}
	});
}

//提交修改的收货地址
function updateAddressSubmit(){
	var receiver_name = $("#receiver_name").val();
	var receiver_mobile = $("#receiver_mobile").val();
	var receiver_zip = $("#receiver_zip").val();
	var seleAreaNext = $("#seleAreaNext").val();
	var seleAreaThird = $("#seleAreaThird").val();
	var seleAreaFouth = $("#seleAreaFouth").val();
	var address_detail = $("#address_detail").val();
	var order_id = $("#update_address_id").val();
	var fixed_telephone = $("#fixed_telephone").val();
	if(receiver_name == ''){
		showTip("请填写收货人姓名",'warning');
		$("#receiver_name").focus();
		return false;
	}

	if(!(/^1(3|4|5|7|8)\d{9}$/.test(receiver_mobile))){
		showTip("请填写正确格式的手机号",'warning')
		$("#receiver_mobile").focus();
		return false;
	}

	if(fixed_telephone.length > 0){
		var pattern=/(^[0-9]{3,4}\-[0-9]{3,8}$)|(^[0-9]{3,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)/; 
		if(!pattern.test(fixed_telephone)) { 
			showTip("请输入正确的固定电话",'warning');
			$("#fixed_telephone").focus();
			return false; 
		} 
	}

	if(seleAreaNext == '-1'){
		showTip("请选择省",'warning');
		return false;
	}

	if(seleAreaThird == '-1'){
		showTip("请选择市",'warning');
		return false;
	}
	
	if($("#seleAreaFouth option").length>1){
		if(seleAreaFouth == '-1'){
			showTip("请选择区/县",'warning');
			return false;
		}
	}
	if(address_detail == ''){
		showTip("请填写详细收货地址",'warning');
		return false;
	}
	
	$.ajax({
		type : 'post',
		url : "<?php echo __URL('ADMIN_MAIN/order/updateOrderAddress'); ?>",
		data : {
			"order_id" : order_id,
			"receiver_name" : receiver_name,
			"receiver_mobile" : receiver_mobile,
			"receiver_zip" : receiver_zip,
			"seleAreaNext" : seleAreaNext,
			"seleAreaThird" : seleAreaThird,
			"seleAreaFouth" : seleAreaFouth,
			"address_detail" : address_detail,
			"fixed_telephone" : fixed_telephone
		},
		success : function(data){
			if (data > 0) {
				showMessage('success', '修改收货地址成功',window.location.reload());
			}else{
				showMessage('error', '修改收货地址失败');
			}
		}
	});
}

//选择省份弹出市区
function GetProvince() {
	var id = $("#seleAreaNext").find("option:selected").val();
	var selCity = $("#seleAreaThird")[0];
	for (var i = selCity.length - 1; i >= 0; i--) {
		selCity.options[i] = null;
	}
	var opt = new Option("请选择市", "-1");
	selCity.options.add(opt);
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/getcity'); ?>",
		dataType : "json",
		data : {
			"province_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].city_name,data[i].city_id);
					selCity.options.add(opt);
				}
				if(typeof($("#cityid").val())!='undefined'){
					$("#seleAreaThird").val($("#cityid").val());
					getSelCity();
					$("#cityid").val('-1');
				}
				$("#seleAreaThird").selectric({maxHeight:500});
			}
		}
	});
};

// 选择市区弹出区域
function getSelCity() {
	var id = $("#seleAreaThird").find("option:selected").val();
	var selArea = $("#seleAreaFouth")[0];
	for (var i = selArea.length - 1; i >= 0; i--) {
		selArea.options[i] = null;
	}
	var opt = new Option("请选择区/县", "-1");
	selArea.options.add(opt);
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/getdistrict'); ?>",
		dataType : "json",
		data : {
			"city_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].district_name,data[i].district_id);
					selArea.options.add(opt);
				}
				if(typeof($("#districtid").val())!='undefined'){
					$("#seleAreaFouth").val($("#districtid").val());
					$("#districtid").val('-1');
				}
				$("#seleAreaFouth").selectric({maxHeight:500});
			}
		}
	});
}

//修改备注
function addMemoAjax(){
	var order_id = $("#order_id").val();
	var memo = $("#memo").val();
	if(memo == ''){
		$(".error").css("display","block");
		return false;
	}
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/addmemo'); ?>",
		data: { "order_id": order_id,"memo":memo },
		type : "post",
		success: function(data) {
			if (data.code > 0) {
				showMessage('success','保存成功');
				location.reload();
			}else{
				showMessage('error','保存失败');
			}
		}
	});
}

function getdelivery(order_id){
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/orderTakeDelivery'); ?>",
		data: { "order_id": order_id },
		type : "post",
		success: function(data) {
			if (data.code > 0) {
				showMessage('success','确认收货成功');
				location.reload();
			}else{
				showMessage('error','确认收货失败');
			}
		}
	});
}

 //删除订单
function delete_order(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "<?php echo __URL('ADMIN_MAIN/order/deleteOrder'); ?>",
				data : {"order_id" : order_id.toString()},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定要删除订单吗？",
	});
}
 
//显示运单
function updateExpress(order_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/orderdeliverydata'); ?>",
		data : {'order_id':order_id},
		success : function(data) {
			$("#order_goods_express_id").val(data['order_info']['goods_packet_list'][0]['express_id']);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_infos").html(receiver_info);
			var express_company_id = data['order_info']['goods_packet_list'][0]['express_company_id'];
			var express_code = data['order_info']['goods_packet_list'][0]['express_code'];
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					var co_id = data["express_company_list"][i]["co_id"];
					if(express_company_id == co_id){
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'" selected >'+data["express_company_list"][i]["company_name"]+'</option>';
					}
					else
					{
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
					}
				}
			} 
			$("#update_divlogistics_express_company").html(co_html).selectric();
			$("#update_divlogistics_express_no").val(express_code);
			$("#update_express").modal("show");
			
		}
	});	
	
}
 
//修改运单
var flags = false;
function updateExpressAjax(){

		var order_goods_express_id = $("#order_goods_express_id").val();
		var express_name = $("#update_divlogistics_express_company").find("option:selected").text();
		var shipping_type = $('#update_express input[name="shipping_type_update"]:checked ').val();
		var express_company_id = $("#update_divlogistics_express_company").val();
		var express_no = $("#update_divlogistics_express_no").val();
		if(shipping_type == 1){
			if(express_company_id == "0"){
				showTip("请选择物流公司",'warning');
				return false;
			}
			if(express_no == ""){
				showTip("请填写快递单号",'warning');
				$("#update_divlogistics_express_no").focus();
				return false;
			}
		}
		if(flags){
			return;
		}
		flags = true;
		$.ajax({
			type : "post",
			url : "<?php echo __URL('ADMIN_MAIN/order/updateOrderExpress'); ?>",
			data : {'order_goods_express_id':order_goods_express_id,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
			success : function(data) {
				$("#Delivery").modal('hide');
				if (data['code'] > 0) {
					showMessage('success', data["message"],window.location.reload());
				} else {
					showMessage('error', data["message"]);
					flags = false;
				}
			}
		});
	}

/**
 * 弹出本地配送模态框
 */
function o2o_delivery(order_id){
	$("#o2o_Delivery").modal('show');
	$("#o2o_delivery_order_id").val(order_id);
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/o2odeliverydata'); ?>",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择配送人员</option>';
			for(var i=0;i<data['o2o_delivery_user_list'].length;i++){
				co_html += '<option value="'+data["o2o_delivery_user_list"][i]["id"]+'">'+data["o2o_delivery_user_list"][i]["name"]+ "&nbsp;&nbsp;" +data["o2o_delivery_user_list"][i]["mobile"] + '</option>';
			} 
			$("#o2o_delivery_user").html(co_html).addClass('select-common').selectric({maxHeight:500});
			
			var go_html = '';
			var no_shipping_num = 0;
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr>';
					go_html += '<td><a>'+data['order_goods_list'][i]['goods_name']+'</a></td>';
					go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				go_html += '</tr>';
			}
			$("#o2o_shipping_num").html(no_shipping_num);
			$("#o2o_Delivery .modal-body table tbody").html(go_html);
		}
	});
}

/**
 * 本地配送提交
 */
var o2o_flag = false;
function o2oDeliverySubmit(){
	var order_id = $("#o2o_delivery_order_id").val();
	var o2o_delivery_user_id = $("#o2o_delivery_user").val();
	var o2o_delivery_no = $("#o2o_delivery_no").val();
	var remark = $("#o2o_Delivery .remark").val();

	if(o2o_delivery_user_id == "0"){
		showTip("请选择配送人员",'warning');
		$("#o2o_delivery_user").focus();
		return false;
	}
	 if(o2o_delivery_no == ""){
		showTip("请填写配送单号",'warning');
		$("#o2o_delivery_no").focus();
		return false;
	} 
	
	if(o2o_flag){
		return;
	}
	o2o_flag = true;
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/o2odelivery'); ?>",
		data : {
			'order_id':order_id,
			'o2o_delivery_user_id': o2o_delivery_user_id,
			'o2o_delivery_no':o2o_delivery_no,
			'remark' : remark
			},
		success : function(data) {
			$("#o2o_Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
				o2o_flag = false;
			}
		}
	});
}

//备货完成
function presellStockingComplete(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "<?php echo __URL('ADMIN_MAIN/Orderpresell/orderStockingComplete'); ?>",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定设为备货完成吗？",
	});
}
 
</script>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
 	//console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
 			//console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

 		//console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
//		console.error(e);
 		//console.log("当前页面没有分页，进行还原操作");
 		//console.log($.cookie('page_cookie'));
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
	
</article>

<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="tip-container">
		<span class="inner"></span>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
			msgType : type
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
			msgType : type
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
	window.onload = function(){

	}
$(function(){
	
	$(".ns-third-menu ul .btn-more").toggle(
		function(){
			$(".ns-third-menu ul").animate({height:"84px"},300);
		},
		function(){
			$(".ns-third-menu ul").animate({height:"42px"},300);
		}
	);
	
	//公共下拉框
	$('.select-common').selectric();
	
	//公共复选框点击切换样式
	$(".checkbox-common").live("click",function(){
		var checkbox = $(this).children("input");
		if(checkbox.is(":checked")) $(this).addClass("selected");
		else $(this).removeClass("selected");
	});
	
	//鼠标浮上查看预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseover",function(){
		var curr = $(this);
		var src = curr.attr("data-src");
		if(src){
			//alert(src);
			var contents = '<img src="'+src+'" style="width: 100px;height: auto;display:block;margin:0 auto;">';
			//鼠标每次浮上图片时，要销毁之前的事件绑定
			curr.popover("destroy");
			
			//重新配置弹出框内容
			curr.popover({ content : contents });

			//显示
			curr.popover("show");
		}
	});
	
	//鼠标离开隐藏预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseout",function(){
		var curr = $(this);
		//隐藏
		if($(".popover.top").is(":visible") && curr.attr("data-src")) curr.popover("hide");
	});

	//公共单选框点击切换样式
	$(".radio-common").live("click",function(){
		var radio = $(this).children("input");
		var name = radio.attr("name");
		if(radio.is(":checked")){
			$(".radio-common>input[type='radio'][name='" + name + "']").parent().removeClass("selected");
			$(this).addClass("selected");
		}else{
			$(this).removeClass("selected");
		}
	});

	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>

</body>
</html>