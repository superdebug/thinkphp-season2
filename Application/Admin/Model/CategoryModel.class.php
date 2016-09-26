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

    public function getchilrenid($data,$parentid)
    {
        static $ret = array();
        foreach ($data as $k => $v) {
            if($v['parentid']==$parentid){ //如果父节点id等于传递过来的参数id，则将该id存入到静态数组内
            $ret[] = $v['cate_id'];
            $this->getchilrenid($data, $v['cate_id']);
            }
        }
        return $ret;
    }

    public function childenid($cateid){
        $data=$this->select(); //获取所有的栏目
        return $this->getchilrenid($data,$cateid);
    }

    public function _before_delete($option){
        if(is_array($option['where']['cate_id'])){
            //如果实批量删除，即删除的是数组型数据
            echo '批量删除';
            die;
        }else{
            //如果删除的是单条数据，即数值型数据
            $chilrenids=$this->childenid($option['where']['cate_id']);
            $chilrenids=implode(',',$chilrenids);

            if($chilrenids){
                $this->execute("DELETE FROM ar_category where cate_id in ($chilrenids)");
            }
        }


    }

}