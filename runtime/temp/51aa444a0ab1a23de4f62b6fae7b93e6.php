<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:45:"template/adminblue\Config\areaManagement.html";i:1522669943;s:28:"template/adminblue\base.html";i:1522831681;s:45:"template/adminblue\controlCommonVariable.html";i:1522486340;s:32:"template/adminblue\urlModel.html";i:1510819828;s:44:"template/adminblue\Express\expressTitle.html";i:1522053049;s:34:"template/adminblue\pageCommon.html";i:1512444925;s:34:"template/adminblue\openDialog.html";i:1522669943;}*/ ?>
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
	
<style>
.modal{margin-left: -280px;width:560px;}
.ns-main{margin-top:0px;}
.modal-dialog .table-class{border-top:1px solid #E1E6F0}
.add-child{padding-left: 15px;background: url(ADMIN_IMG/add-child.png) no-repeat;background-position: 0 2px;}
.add-child i{font-style: normal;display: none;}
.add-child:hover i{display: inline-block;}
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
<div class="ncsc-form-goods">
	<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<link href="__STATIC__/blue/css/goods/add_goods.css" rel="stylesheet" type="text/css">
<style>
.goods-nav li{width: 130px;}
.table-class tr th,.table-class tr td{border: none;}
.ns-main{margin-top: 0px;}
.table-class tr th:first-child, .table-class tr td:first-child{border-left: none;}
.table-class tr th:last-child, .table-class tr td:last-child{border-right:none;}
.mod-table{padding:15px;}
</style>
<nav class="goods-nav">
		<ul>
			<?php if(is_array($express_child) || $express_child instanceof \think\Collection || $express_child instanceof \think\Paginator): if( count($express_child)==0 ) : echo "" ;else: foreach($express_child as $k=>$v): if($v['child_name'] != ''): if($v['active'] == 1): ?>
					<li class="selected"><a href="<?php echo __URL('ADMIN_MAIN/'.$v['url']); ?>" child_id="<?php echo $v['child_id']; ?>"><?php echo $v['child_name']; ?></a></li>
					<?php else: ?>
						<li><a href="<?php echo __URL('ADMIN_MAIN/'.$v['url']); ?>" child_id="<?php echo $v['child_id']; ?>"><?php echo $v['child_name']; ?></a></li>
					<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
		
		</ul>
</nav>
	<!-- 基础设置 -->
	
	<div class="mod-table">
	<div class="mod-table-head">
		<!-- 地区表格 -->
	<div class="options-btn">
		<button class="btn-common" onclick="addProvince()">添加一级地区</button>
	</div>
	<table class="table-class">
		<colgroup>
			<col style="width: 2%">
			<col style="width: 53%;">
			<col style="width: 20%;">
			<col style="width: 10%;">
			<col style="width: 5%;">
			<col style="width: 10%;">
		</colgroup>
		<thead>
			<tr align="center">
				<th></th>
				<th align="left">名称</th>
				<th align="left">所属区域</th>
				<th align="left">添加子地区</th>
				<th>排序</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<!-- 循环省级地区 -->
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v1): ?>
			<tr class="areaTr pid_0" id="province_id_<?php echo $v1['province_id']; ?>" isClick="false">
				<td class="areaTd">
					<?php if($v1['issetLowerLevel'] == 1): ?>
					<a href="javascript:;" onclick="province_tab_switch(<?php echo $v1['province_id']; ?>)" class="tab_jia_<?php echo $v1['province_id']; ?>" style="display: block;">[+]</a>
					<a href="javascript:;" onclick="province_tab_switch(<?php echo $v1['province_id']; ?>)" class="tab_jian_<?php echo $v1['province_id']; ?>" style="display: none;">[-]</a>
					<?php endif; ?>
				</td>
			
				<td class="areaTd province_<?php echo $v1['province_id']; ?>" >
					<input type="text" class="areaName input-common"  fieldid="<?php echo $v1['province_id']; ?>" value="<?php echo $v1['province_name']; ?>" onchange="updateRegionAjax(1,2,this);" />
				</td>
				<td class="areaTd province_<?php echo $v1['province_id']; ?>">
					<?php if($v1['area_name'] !=''): ?>
					<span><?php echo $v1['area_name']; ?></span>
					<?php else: ?>
					<span>-</span>
					<?php endif; ?>
				</td>
				<td class="areaTd" style="color: #13A5D5;">
					<a href="javascript:;" onclick="addCity(<?php echo $v1['province_id']; ?>,this);"><span class="add-child"><i>添加子地区</i></span></a>
				</td>
				<td class="areaTd" align="center">
					<input type="text" class="sort input-common input-common-sort" fieldid="<?php echo $v1['province_id']; ?>" fieldname="sort" value="<?php echo $v1['sort']; ?>"  onkeyup="this.value=this.value.replace(/\D/g,'')" size="1" onchange="updateRegionAjax(1,1,this);"  />
				</td>
				<td class="areaTd" style="color: #13A5D5;" align="center">
					<a href="javascript:;" onclick="updateProvince(<?php echo $v1['province_id']; ?>,this,<?php echo $v1['area_id']; ?>);">修改</a>
					<a href="javascript:;" onclick="delRegion(<?php echo $v1['province_id']; ?>,1)">删除</a>
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- 循环省级地区 -->
		</tbody>
	</table>
		</div>
	</div>
</div>


<!-- 地区父级id隐藏域 -->
<input type="hidden" id="pid" value="0" />
<!-- 弹框类型控制隐藏域 -->
<input type="hidden" id="type" />
<input type="hidden" id="event" />
<!-- 地区添加与修改模态框 -->
<div class="modal fade hide" id="evaluate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>添加子地区</h3>
			</div>
			<div class="modal-body">
				<table class="table-class">
					<tr id="superiorRegionTr">
						<td id="myModaltype" align="right">上级地区：</td>
						<td><input type="text" id="superiorRegion" disabled="disabled" superiorRegionId="" class="input-common" /></td>
					</tr>
					<tr>
						<td align="right"><span style="color:red;margin-right:10px;">*</span>地区名称：</td>
						<td><input type="text" id="regionName" style="margin-bottom: 5px;" class="input-common"/></td>
					</tr>
					<tr class="js-area-select">
						<td align="right">所属区域：</td>
						<td>
							<select id="area_select" class="select-common">
								<?php if(is_array($area_list) || $area_list instanceof \think\Collection || $area_list instanceof \think\Paginator): if( count($area_list)==0 ) : echo "" ;else: foreach($area_list as $key=>$area): ?>
								<option value="<?php echo $area['area_id']; ?>"><?php echo $area['area_name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
						</td>
					</tr>
					<tr id="zipcode">
						<td align="right">邮政编码：</td>
						<td><input type="text" id="zipcodeVal" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')" class="input-common" /></td>
					</tr>
					<tr>
						<td align="right">排序：</td>
						<td><input type="number" id="regionSort" onkeyup="this.value=this.value.replace(/\D/g,'')" class="input-common harf" /></td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="evaluate_id" />
				<button type="button" class="btn-common btn-big" onclick="addOrUpdateAjax()">保存</button>
				<button type="button" class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
function province_tab_switch(module_id){
	if($("#province_id_"+module_id).attr("isClick") == 'false'){
		selectCityListAjax(module_id);
	}
	if($(".city_pid_"+module_id).attr('isShow')== 'true'){
		//闭合
		$(".tab_jian_"+module_id).hide();
		$(".tab_jia_"+module_id).show();
		$(".city_pid_"+module_id).hide(300);
// 		$(".district_pid_"+module_id).hide(300);
		$(".js-district_pic_"+module_id).hide(300);
		$(".city_pid_"+module_id).attr('isShow','false');
	}else{
		//展开时
		$(".tab_jian_"+module_id).show();
		$(".tab_jia_"+module_id).hide();
		$(".city_pid_"+module_id).show(500);
		$(".city_pid_"+module_id).attr('isShow','true');
		closeCity(module_id);
	}
}

//查找市级区域
function selectCityListAjax(province_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/config/selectcitylistajax'); ?>",
		data : {"province_id" : province_id},
		success : function(data){
			if(data.length > 0){
				addInfo = '';
				for (var i = 0; i < data.length; i++) {
					addInfo += '<tr class="areaTr city_pid_'+ province_id +'" id="city_id_'+data[i]['city_id']+'" isClick="false" isShow="true">';
						addInfo += '<td class="areaTd" >';
							if(data[i]['issetLowerLevel'] == 1){
								addInfo += '<a href="javascript:;" onclick="city_tab_switch('+province_id+','+data[i]['city_id']+')" class="tab_jia_'+data[i]['city_id']+'" style="display: block;">[+]</a>';
								addInfo += '<a href="javascript:;" onclick="city_tab_switch('+province_id+','+data[i]['city_id']+')" class="tab_jian_'+data[i]['city_id']+'" style="display: none;">[-]</a>';
							}
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd city_'+data[i]['city_id']+'" >';
							addInfo += '<span style="color: #ccc;">|——</span><input type="text" class="areaName input-common"  fieldid="'+data[i]['city_id']+'" value="'+data[i]['city_name']+'"  onchange="updateRegionAjax(2,2,this);">';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd province_38" ></td>';
						
						addInfo += '<td class="areaTd">';
							addInfo += '<a href="javascript:;" onclick="addDistrict('+data[i]['city_id']+',this);"><span class="add-child"><i>添加子地区</i></span></a>';
						addInfo += '</td>';
							
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<input type="text" class="sort input-common input-common-sort" fieldid="'+data[i]['city_id']+'" fieldname="sort" value="'+data[i]['sort']+'" size="1" onchange="updateRegionAjax(2,1,this);" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<a href="javascript:;" onclick="updateCity('+data[i]['city_id']+','+ province_id +',this)" zipcode="'+data[i]['zipcode']+'">修改 </a>';
							addInfo += '<a href="javascript:;" onclick="delRegion('+data[i]['city_id']+',2)">删除</a>';
						addInfo += '</td>';
					addInfo += '</tr>';
				}
			}
			$("#province_id_"+province_id).after(addInfo);
			$("#province_id_"+province_id).attr("isClick", 'true');
		}
	});
}

//查找市级区域
function selectDistrictListAjax(province_id,city_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/config/selectdistrictlistajax'); ?>",
		data : {"city_id" : city_id},
		success : function(data){
			if(data.length > 0){
				addInfo = '';
				for (var i = 0; i < data.length; i++) {
					addInfo += '<tr class="areaTr js-district_pic_'+province_id+' district_pid_'+ city_id +'" id="district_id_'+data[i]['district_id']+'" isClick="false">';
						addInfo += '<td class="areaTd" ></td>';
						
						addInfo += '<td class="areaTd district_'+data[i]['district_id']+'" >';
							addInfo += '<span style="color: #ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span><input type="text" class="areaName input-common" style="width: 206px;text-align: left;" fieldid="'+data[i]['district_id']+'" value="'+data[i]['district_name']+'"  onchange="updateRegionAjax(3,2,this);">';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" ></td>';
						addInfo += '<td class="areaTd" ></td>';

						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<input type="text" class="sort input-common input-common-sort" fieldid="'+data[i]['district_id']+'" fieldname="sort" value="'+data[i]['sort']+'"  size="1" onchange="updateRegionAjax(3,1,this);" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<a href="javascript:;" onclick="updateDistrict('+data[i]['district_id']+','+ city_id +',this);">修改</a> ';
							addInfo += '<a href="javascript:;" onclick="delRegion('+data[i]['district_id']+',3)">删除</a>';
						addInfo += '</td>';
					addInfo += '</tr>';
				}
			}
			$("#city_id_"+city_id).after(addInfo);
			$("#city_id_"+city_id).attr("isClick", 'true');
		}
	});
}

function city_tab_switch(province_id,module_id){
	if($("#city_id_"+module_id).attr("isClick") == 'false'){
		if(province_id == undefined){
			province_id = 0;
		}
		selectDistrictListAjax(province_id,module_id);
	}
	if($(".tab_jia_"+module_id).css('display') != 'block'){
		//闭合
		$(".tab_jian_"+module_id).hide();
		$(".tab_jia_"+module_id).show();
		$(".district_pid_"+module_id).hide(300);
	}else{
		//展开时
		$(".tab_jian_"+module_id).show();
		$(".tab_jia_"+module_id).hide();
		$(".district_pid_"+module_id).show(500);
	}
}

function delRegion(regionId,type){
	if(type == 1 || type == 2){
		reminderInfo = "确认删除所选地区？删除选择地区，其所有下属地区也将会同步删除且不可恢复。";
	}
	if(type == 3){
		reminderInfo = "确认删除所选地区？";
	}
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$(this).dialog('close');
				$.ajax({
					type:"post",
					url:"<?php echo __URL('ADMIN_MAIN/config/deleteregion'); ?>",
					data:{
						'regionId':regionId,
						'type' : type
					},
					dataType: 'json',
					success:function (data) {
						if(data['code'] > 0){
							showTip(data['message'],"success");
							location.href = "<?php echo __URL('ADMIN_MAIN/config/areamanagement'); ?>";
						}else{
							$("#dialog").dialog({
								 buttons: {
									"确定,#0059d6,#fff": function() {
										$(this).dialog('close');
									}
								},
								contentText:data['message']
							});
						}
					}
				});
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			}
		},
		contentText : reminderInfo,
	});
}

var appCode = GetUrlAppCode();
var menuCode = GetUrlMenuCode();
if (appCode != 'PLATFORM' && appCode != "" && appCode != null) {
	$("#type").css("display", "none");
	$("#Operate ul").css("display", "none");
	$(".separationLine").css("display", "none");
}

function clearInput(){
	$("#regionSort").val('');
		$("#regionName").val('');
		$("#zipcodeVal").val('');
}
//添加省级区域
function addProvince(){
	$("#myModalLabel").text("添加一级地区");
	$("#superiorRegionTr").hide();
	$("#type").val(6);
	$("#zipcode").hide();
	$(".js-area-select").show();//只有一级地区才显示
	clearInput();
	$("#evaluate").modal('show');
}
//添加市级区域
function addCity(province_id,event){
	$("#myModalLabel").text("添加子地区");
	$("#superiorRegionTr").show();
	var superiorRegion = $("input[class='areaName input-common'][fieldid='"+province_id+"']").val();
	var superiorRegionId = province_id;
	$(".js-area-select").hide();//只有一级地区才显示
	$("#zipcode").show();
	$("#type").val(1);
	$("#superiorRegion").val(superiorRegion);//上级地区
	$("#superiorRegion").attr("superiorRegionId",superiorRegionId);
	clearInput();
	$("#evaluate").modal('show');
}
//添加县级区域
function addDistrict(city_id,event){
	$("#myModalLabel").text("添加子地区");
	$("#superiorRegionTr").show();
	var superiorRegion = $(event).parent().siblings(".city_"+city_id).children(".areaName").val();;
	var superiorRegionId = city_id;
	$("#zipcode").hide();
	$(".js-area-select").hide();//只有一级地区才显示
	$("#type").val(2);
	$("#superiorRegion").attr("superiorRegionId",superiorRegionId);
	$("#superiorRegion").val(superiorRegion);
	clearInput();
	$("#evaluate").modal('show'); 
}
//修改省级区域
function updateProvince(province_id,event,area_id){
	$("#event").val(province_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").hide();
	$(".js-area-select").show();//只有一级地区才显示
	$("#type").val(3);
	$("#zipcode").hide();
	//获取所修改地区的值
	var province_name = $(".province_"+province_id).children("input").val();
	var sort = $(".province_"+province_id).prev("div").children("input").val();
	$("#regionName").val(province_name);
	$("#regionSort").val(sort);
	if(area_id != undefined){
		$("#area_select").children("option").removeAttr("selected");
		$("#area_select").find("option[value='"+area_id+"']").attr("selected","selected");
	}
	$("#evaluate").modal('show');
}
//修改市级区域
function updateCity(city_id,pid,event){
	$("#event").val(city_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").show();
	$("#type").val(4);
	$("#zipcode").show();
	$(".js-area-select").hide();//只有一级地区才显示
	//获取所修改地区的值
	var superiorRegion = $(".province_"+pid).children("input").val();
	var city_name = $(".city_"+city_id).children("input").val();
	var sort = $(".city_"+city_id).prev("div").children("input").val();
	var zipcode = $(event).attr("zipcode");
	$("#superiorRegion").val(superiorRegion);
	$("#superiorRegion").attr("superiorRegionId", pid);
	$("#regionName").val(city_name);
	$("#regionSort").val(sort);
	$("#zipcodeVal").val(zipcode);
	$("#evaluate").modal('show');
}
//修改县级区域
function updateDistrict(district_id,pid,event){
	$("#event").val(district_id);
	$("#myModalLabel").text("地区编辑");
	$("#superiorRegionTr").show();
	$("#type").val(5);
	$("#zipcode").hide();
	$(".js-area-select").hide();//只有一级地区才显示
	$("#evaluate").modal('show');

	//获取所修改地区的值
	var superiorRegion = $(".city_"+pid).children("input").val();
	var district_name = $(".district_"+district_id).children("input").val();
	var sort = $(".district_"+district_id).prev("div").children("input").val();
	$("#superiorRegion").val(superiorRegion);
	$("#superiorRegion").attr("superiorRegionId", pid);
	$("#regionName").val(district_name);
	$("#regionSort").val(sort);
	$("#evaluate").modal('show');
}
//添加子级区域
function addOrUpdateAjax(){
	var type = $("#type").val();
	var superiorRegionId = $("#superiorRegion").attr("superiorRegionId");
	var regionName = $("#regionName").val();
	if($("#regionSort").val().length == 0){
		var regionSort = 0;
	}else{
		var regionSort = $("#regionSort").val();
	}
	var zipcode = $("#zipcodeVal").val();
	if(regionName==''){
		$("#regionName").focus();
		showTip('地区名称不能为空','warning');
		return false;
	}
	var area_id = 0;
	if(type ==1){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/addcityajax'); ?>";
	}
	if(type ==2){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/adddistrictajax'); ?>";
	}
	if(type ==3){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/updateprovinceajax'); ?>";
		area_id = $("#area_select").val();//所属区域，只有一级地区有;
	}
	if(type ==4){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/updatecityajax'); ?>";
	}
	if(type ==5){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/updatedistrictajax'); ?>";
	}
	if(type == 6){
		var ajaxUrl ="<?php echo __URL('ADMIN_MAIN/config/addprovinceajax'); ?>";
		area_id = $("#area_select").val();//所属区域，只有一级地区有;
	}
	var eventId = $("#event").val();
	$.ajax({
		type : "post",
		url : ajaxUrl,
		data : {
			"eventId" : eventId,
			"superiorRegionId" : superiorRegionId,
			"regionName" : regionName,
			"regionSort" : regionSort,
			"zipcode" : zipcode,
			"area_id" : area_id
		},
		success : function(data){
			$("#evaluate").modal('hide');
			if(data['code']>0){
				if(type == 1){
					var addInfo = "";
					addInfo += '<tr class="areaTr city_pid_'+ superiorRegionId +'" id="city_id_'+data['code']+'" isClick="false" isShow="true">';
						addInfo += '<td class="areaTd" ></td>';
						
						addInfo += '<td class="areaTd city_'+data['code']+'" >';
							addInfo += '<span style="color: #ccc;">|——</span><input type="text" class="areaName input-common"  fieldid="'+data['code']+'" value="'+regionName+'" onchange="updateRegionAjax(2,2,this);">';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd province_38" ></td>';
						
						addInfo += '<td class="areaTd">';
							addInfo += '<a href="javascript:;" onclick="addDistrict('+data['code']+',this);"><span class="add-child"><i>添加子地区</i></span></a>';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<input type="text" class="sort input-common input-common-sort" fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'"  size="1" onchange="updateRegionAjax(2,1,this);" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<a href="javascript:;" onclick="updateCity('+data['code']+','+ superiorRegionId +',this)" zipcode="'+zipcode+'">修改 </a>';
							addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',2)">删除</a>';
						addInfo += '</td>';
					addInfo += '</tr>';
					province_tab_switch(superiorRegionId);
					$(".city_pid_"+superiorRegionId+":last").after(addInfo);
					$(".city_pid_"+superiorRegionId).show();
				}
				if(type == 2){
					var addInfo = "";
					addInfo += '<tr class="areaTr district_pid_'+ superiorRegionId +'" id="district_id_'+data['code']+'" isClick="false">';
						addInfo += '<td class="areaTd" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd district_'+data['code']+'" >';
							addInfo += '<span style="color: #ccc;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——</span><input type="text" class="areaName input-common"  fieldid="'+data['code']+'" value="'+regionName+'"  onchange="updateRegionAjax(3,2,this);">';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd province_38" ></td>';
						
						addInfo += '<td class="areaTd" ></td>';

						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<input type="text" class="sort input-common input-common-sort" fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'"  size="1" onchange="updateRegionAjax(2,1,this);" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<a href="javascript:;" onclick="updateDistrict('+data['code']+','+ superiorRegionId +',this);">修改</a> ';
							addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',3)">删除</a>';
						addInfo += '</td>';
					addInfo += '</tr>';
					
					city_tab_switch(superiorRegionId);
					
					var exist_district =  $(".district_pid_"+superiorRegionId);
					if(exist_district > 0){
						$(".district_pid_"+superiorRegionId+":last").after(addInfo);
					}else{
						$("#city_id_"+superiorRegionId).after(addInfo);
					}
					
					$(".district_pid_"+superiorRegionId).show();
					$("#regionSort").val('');
					$("#regionName").val('');
				}
				if(type == 6){
					var addInfo = "";
					addInfo += '<tr class="areaTr pid_0" id="province_id_'+data['code']+'" isClick="false">';
						addInfo += '<td class="areaTd" ></td>';
							
						addInfo += '<td class="areaTd province_'+data['code']+'" >';
							addInfo += '<input type="text" class="areaName input-common"  fieldid="'+data['code']+'" value="'+regionName+'" onchange="updateRegionAjax(1,2,this);">';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd province_38" >';
							addInfo += '<span>'+$("#area_select").find("option[value='"+area_id+"']").text()+"</span>";
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd">';
							addInfo += '<a href="javascript:;" onclick="addCity('+data['code']+',this);"><span class="add-child"><i>添加子地区</i></span></a>';
						addInfo += '</td>';

						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<input type="text" class="sort input-common input-common-sort" fieldid="'+data['code']+'" fieldname="sort" value="'+regionSort+'" size="1" onchange="updateRegionAjax(1,1,this);" >';
						addInfo += '</td>';
						
						addInfo += '<td class="areaTd" align="center">';
							addInfo += '<a href="javascript:;" onclick="updateProvince('+data['code']+',this);">修改</a> ';
							addInfo += '<a href="javascript:;" onclick="delRegion('+data['code']+',1)">删除</a>';
						addInfo += '</td>';
					addInfo += '</tr>';
					$(".pid_0:first").before(addInfo);
					$("#regionSort").val('');
					$("#regionName").val('');
				}
				if(type == 3 || type == 4 || type == 5){
					location.reload();
				}
			}else{
				showTip(data['message'],"error");
			}
		}
	});
}

function updateRegionAjax(regionType,upType,event){
	if(upType == 1){
		var regionSort = $(event).val();
	}else{
		var regionSort ='';
	}
	if(upType == 2){
		var regionName = $(event).val();
	}else{
		var regionName = '';
	}	
	var regionId = $(event).attr("fieldid");
	
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/config/updateregionajax'); ?>",
		data : {
			"regionType" : regionType,
			"upType" : upType,
			"regionSort" : regionSort,
			"regionName" : regionName,
			"regionId" : regionId
		},
		success : function(data){
			var flag = "error";
			if(data.code>0){
				flag = "success";
			}
			showTip(data['message'],flag);
		}
	})
}

function closeCity(province_id){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/config/selectcitylistajax'); ?>",
		data : {"province_id" : province_id},
		success : function(data){
			if(data.length > 0){
				for (var i = 0; i < data.length; i++) {
					$(".tab_jian_"+data[i]['city_id']).hide();
					$(".tab_jia_"+data[i]['city_id']).show();
				}
			}
		}
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