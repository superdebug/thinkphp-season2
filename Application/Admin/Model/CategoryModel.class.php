<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model {
    //对模型type进行验证
    protected $_validate= array(
        array('cate_name','require','栏目名称必须填写',1,regex,3), //默认情况下使用正则表达式验证
        array('cate_name','','栏目名称不能重复',1,unique,3), //重复性验证
    );

    //分类数
    public function  catetree(){
        $data=$this->select(); //获取所有数据
        return $this->resort($data);
    }

    public function resort($data,$parentid=0,$level=0){
        static $ret=array(); //声明一个静态空数组
        foreach($data as $k=>$v){
            if($v['parentid']==$parentid){ //如果当前的parent等于0 即如果是顶级分类的话
                $v['level']=$level;
                $ret[]=$v; //将顶级分类数据存入静态数据
                $this->resort($data,$v['cate_id'],$level+1);
            }
        }
        return $ret;
    }


}