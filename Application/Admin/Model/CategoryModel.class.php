<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model {
    //对模型type进行验证
    protected $_validate= array(
        array('cate_name','require','栏目名称必须填写',1,regex,3), //默认情况下使用正则表达式验证
        array('cate_name','','栏目名称不能重复',1,unique,3), //重复性验证
    );
}