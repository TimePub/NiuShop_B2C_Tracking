<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"template/adminblue\Express\freightTemplateListPage.html";i:1510017364;}*/ ?>
<?php if(is_array($express_list_pagequery) || $express_list_pagequery instanceof \think\Collection || $express_list_pagequery instanceof \think\Paginator): if( count($express_list_pagequery)==0 ) : echo "" ;else: foreach($express_list_pagequery as $key=>$v): ?>
<tr class="head">
	<td colspan="6">
		<?php if(!$v['is_default']): ?>
		<input type="checkbox" value="<?php echo $v['shipping_fee_id']; ?>" name="sub" id="<?php echo $v['shipping_fee_id']; ?>" />
		<?php endif; ?>
		<label for="<?php echo $v['shipping_fee_id']; ?>"><?php echo $v['shipping_fee_name']; ?></label>
		<div>
			<a href="<?php echo __URL('ADMIN_MAIN/express/freighttemplateedit','shipping_fee_id='.$v['shipping_fee_id'].'&co_id='.$co_id); ?>">编辑</a>
			<?php if(!$v['is_default']): ?>
			<a href="javascript:;" onclick="freightTemplateDelete(<?php echo $v['shipping_fee_id']; ?>)">删除</a>
			<?php endif; ?>
		</div>
	</td>
</tr>
<tr class="address">
	<td colspan="6">
	<?php if($v['is_default'] == 1): ?>
		<span>默认模板(全国)</span>
	<?php else: if(is_array($v['address_list']['province_list']) || $v['address_list']['province_list'] instanceof \think\Collection || $v['address_list']['province_list'] instanceof \think\Paginator): if( count($v['address_list']['province_list'])==0 ) : echo "" ;else: foreach($v['address_list']['province_list'] as $key=>$province): ?>
		<span><?php echo $province['province_name']; ?></span>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<button data-msg="<header>
						<span><?php echo $v['shipping_fee_name']; ?></span>
						<i>x</i>
				</header>
				<article style='margin-top:40px;overflow: auto;height: 360px;'>
				<?php if(is_array($v['address_list']['province_list']) || $v['address_list']['province_list'] instanceof \think\Collection || $v['address_list']['province_list'] instanceof \think\Paginator): if( count($v['address_list']['province_list'])==0 ) : echo "" ;else: foreach($v['address_list']['province_list'] as $key=>$province): ?>
				<div>
					<h3><?php echo $province['province_name']; ?></h3>
					<ul>
					<?php if(is_array($province['city_list']) || $province['city_list'] instanceof \think\Collection || $province['city_list'] instanceof \think\Paginator): if( count($province['city_list'])==0 ) : echo "" ;else: foreach($province['city_list'] as $k=>$city): ?>
						<li><?php echo $city['city_name']; ?></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</article>
				"
		
		>查看详情</button>
	<?php endif; ?>
	</td>
</tr>

<tr>
	<td align="center">按件数</td>
	<td class="info">
		<label>首件(件)：</label>
		<span><?php echo $v['bynum_snum']; ?></span>
	</td>
	<td class="info">
		<label>首件运费(元)：</label>
		<span><?php echo $v['bynum_sprice']; ?></span>
	</td>
	<td class="info">
		<label>续件(件)：</label>
		<span><?php echo $v['bynum_xnum']; ?></span>
	</td>
	<td class="info">
		<label>续件运费(元)：</label>
		<span><?php echo $v['bynum_xprice']; ?></span>
	</td>
	<td align="center">
		<?php if($v['bynum_is_use']): ?>
			<span class="status-enable">启用</span>
		<?php else: ?>
			<span class="status-close">停用</span>
		<?php endif; ?>
	</td>
</tr>

<tr>
	<td align="center">按重量</td>
	<td class="info">
		<label>首重(kg)：</label>
		<span><?php echo $v['weight_snum']; ?></span>
	</td>
	<td class="info">
		<label>首重运费(元)：</label>
		<span><?php echo $v['weight_sprice']; ?></span>
	</td>
	<td class="info">
		<label>续重(kg)：</label>
		<span><?php echo $v['weight_xnum']; ?></span>
	</td>
	<td class="info">
		<label>续重运费(元)：</label>
		<span><?php echo $v['weight_xprice']; ?></span>
	</td>
	<td align="center">
		<?php if($v['weight_is_use']): ?>
			<span class="status-enable">启用</span>
		<?php else: ?>
			<span class="status-close">停用</span>
		<?php endif; ?>
	</td>
</tr>

<tr>
	<td align="center">按体积</td>
	<td class="info">
		<label>首体积量(m³)：</label>
		<span><?php echo $v['volume_snum']; ?></span>
	</td>
	<td class="info">
		<label>首体积运费(元)：</label>
		<span><?php echo $v['volume_sprice']; ?></span>
	</td>
	<td class="info">
		<label>续体积量(m³)：</label>
		<span><?php echo $v['volume_xnum']; ?></span>
	</td>
	<td class="info">
		<label>续体积运费(元)：</label>
		<span><?php echo $v['volume_xprice']; ?></span>
	</td>
	<td align="center">
		<?php if($v['volume_is_use']): ?>
			<span class="status-enable">启用</span>
		<?php else: ?>
			<span class="status-close">停用</span>
		<?php endif; ?>
	</td>
</tr>

<?php endforeach; endif; else: echo "" ;endif; ?>
<input type="hidden" id="pagecount" value="<?php echo $pagecount; ?>" />
<input type="hidden" id="totalcount" value="<?php echo $totalcount; ?>" />
<input type="hidden" id="data_length" value="<?php echo $data_length; ?>" />
<script>
$(function(){
	$(".address button").click(function(){
		$(".mask-layer").show();
		var top = $(".mask-address-info").css("top");
		var left = $(".mask-address-info").css("left");
		$(".mask-address-info").html($(this).attr("data-msg")).fadeIn(300);
		$(".mask-address-info header").css({ "top" : top, "left" : left });
	});
	
	$(".mask-address-info header i").live("click",function(){
		$(".mask-address-info").fadeOut(300);
		$(".mask-layer").fadeOut(300);
	});
});
</script>