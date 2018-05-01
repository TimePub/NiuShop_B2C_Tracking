<?php
/**
 * AuthGroup.php
 *
 * Niushop商城系统 - 团队十年电商经验汇集巨献!
 * =========================================================
 * Copy right 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
 * ----------------------------------------------
 * 官方网址: http://www.niushop.com.cn
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : niuteam
 * @date : 2015.4.24
 * @version : v1.0.0.0
 */
namespace data\service;

use data\api\IVirtualGoods;
use data\model\NsVirtualGoodsModel;
use data\model\NsVirtualGoodsTypeModel;
use data\service\BaseService as BaseService;
use data\model\NsVirtualGoodsViewModel;
use data\model\AlbumPictureModel;
use data\model\NsVirtualGoodsGroupModel;
use data\model\NsGoodsModel;
use data\model\NsGoodsSkuModel;
use think\Log;

class VirtualGoods extends BaseService implements IVirtualGoods
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::editVirtualGoodsGroup()
     */
    public function editVirtualGoodsGroup($virtual_goods_group_name, $interfaces, $create_time)
    {
        // TODO Auto-generated method stub
    }

    /**
     * 获取虚拟商品类型列表
     *
     * @param 当前页 $page_index            
     * @param 显示页数 $page_size            
     * @param 条件 $condition            
     * @param 排序 $order            
     * @param 字段 $field            
     */
    function getVirtualGoodsTypeList($page_index, $page_size = 0, $condition = array(), $order = "virtual_goods_type_id desc", $field = "*")
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $res = $virtual_goods_type_model->pageQuery($page_index, $page_size, $condition, $order, $field);
        return $res;
    }

    /**
     * 根据id查询虚拟商品类型
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::getVirtualGoodsTypeById()
     */
    function getVirtualGoodsTypeById($virtual_goods_type_id)
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $res = $virtual_goods_type_model->getInfo([
            'virtual_goods_type_id' => $virtual_goods_type_id
        ], "*");
        return $res;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \data\api\IVirtualGoods::getVirtualGoodsTypeInfo()
     */
    function getVirtualGoodsTypeInfo($condition = '')
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $res = $virtual_goods_type_model->getInfo($condition, "*");
        return $res;
    }

    /**
     * 编辑虚拟商品类型
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::editVirtualGoodsType()
     */
    public function editVirtualGoodsType($virtual_goods_type_id, $virtual_goods_group_id, $validity_period, $confine_use_number, $value_info, $goods_id)
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $res = 0;
        if ($virtual_goods_type_id == 0) {
            
            // 添加
            $data = array(
                'virtual_goods_group_id' => $virtual_goods_group_id,
                'validity_period' => $validity_period,
                'confine_use_number' => $confine_use_number,
                'shop_id' => $this->instance_id,
                'create_time' => time(),
                'relate_goods_id' => $goods_id
            );
            
            // 如果不是点卡的话，添加配置信息
            if ($virtual_goods_group_id != 3) {
                $data['value_info'] = $value_info;
            }
            $res = $virtual_goods_type_model->save($data);
        } else {
            
            // 修改
            $data = array(
                'validity_period' => $validity_period,
                'confine_use_number' => $confine_use_number,
                'relate_goods_id' => $goods_id
            );
            
            // 如果不是点卡的话，添加配置信息
            if ($virtual_goods_group_id != 3) {
                $data['value_info'] = $value_info;
            }
            $res = $virtual_goods_type_model->save($data, [
                'virtual_goods_type_id' => $virtual_goods_type_id
            ]);
        }
        if ($virtual_goods_group_id == 3) {
            
            if($value_info != ''){
                $value_array = json_decode($value_info, true);
                foreach ($value_array as $item) {
                    $this->addVirtualGoods($this->instance_id, '', 0.00, '', '', 0, '', $validity_period, 0, 0, 0, $confine_use_number, - 2, $goods_id, $item['remark']);
                }    
                
                //更新库存
                $this->setVirtualCardByGoodsStock($goods_id);
            }
        }
        return $res;
    }

    /**
     * 设置虚拟商品类型启用禁用
     * 创建时间：2017年11月23日 19:37:28 王永杰
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::setVirtualGoodsTypeIsEnabled()
     */
    public function setVirtualGoodsTypeIsEnabled($virtual_goods_type_id, $is_enabled)
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $data['is_enabled'] = $is_enabled;
        $res = $virtual_goods_type_model->save($data, [
            'virtual_goods_type_id' => $virtual_goods_type_id
        ]);
        return $res;
    }

    /**
     * 根据id删除虚拟商品类型
     * 创建时间：2017年11月23日 19:37:19 王永杰
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::deleteVirtualGoodsType()
     */
    public function deleteVirtualGoodsType($virtual_goods_type_id)
    {
        $virtual_goods_type_model = new NsVirtualGoodsTypeModel();
        $res = $virtual_goods_type_model->destroy([
            'virtual_goods_type_id' => [
                'in',
                $virtual_goods_type_id
            ]
        ]);
        return $res;
    }

 
  
    /**
     *
     * @ERROR!!!
     *
     * @see \data\api\IVirtualGoods::deleteVirtualGoods()
     */
    public function deleteVirtualGoods($virtual_code)
    {
        // TODO Auto-generated method stub
    }

    /**
     * 根据主键id删除虚拟商品
     * 创建时间：2018年3月6日16:33:57
     * 
     * @param unknown $virtual_goods_id            
     */
    public function deleteVirtualGoodsById($virtual_goods_id)
    {
        $virtual_goods_model = new NsVirtualGoodsModel();
        
        $data['virtual_goods_id'] = [
            'in',
            $virtual_goods_id
        ];
        $res = $virtual_goods_model->destroy($data);
        return $res;
    }

  

    /**
     * (non-PHPdoc)
     *
     * @see \data\api\IVirtualGoods::getVirtualGoodsGroup()
     */
    public function getVirtualGoodsGroup($condition = '1=1')
    {
        $virtual_group_model = new NsVirtualGoodsGroupModel();
        $list = $virtual_group_model->getQuery($condition, '*', '');
        return $list;
    }
    
    /**
     * (non-PHPdoc)
     * @see \data\api\IVirtualGoods::getVirtualGoodsInfo()
     */
    public function getVirtualGoodsGroupInfo($virtual_goods_group_id){
        
        $virtual_group_model = new NsVirtualGoodsGroupModel();
        $virtual_goods_group_info = $virtual_group_model->getInfo(['virtual_goods_group_id'=>$virtual_goods_group_id], '*');
        return $virtual_goods_group_info;
    }
   
    
  
}