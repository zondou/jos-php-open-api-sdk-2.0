<?php
namespace UnionOpenGoodsBigfieldQuery;
class GoodsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.bigfield.BigFieldGoodsReq";
    }
        
    private $skuIds;
    
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(){
        return $this->skuIds;
    }
            
    private $fields;
    
    public function setFields($fields){
        $this->params['fields'] = $fields;
    }

    public function getFields(){
        return $this->fields;
    }
            
    private $itemIds;
    
    public function setItemIds($itemIds){
        $this->params['itemIds'] = $itemIds;
    }

    public function getItemIds(){
        return $this->itemIds;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>