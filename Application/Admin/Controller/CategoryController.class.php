<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function lst(){
        $cate=D('category');
        $cateres=$cate->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function add(){
        $cate=D('category');
        if (IS_POST) {
            $data['cate_name'] = I('cate_name');
            $data['cate_ename'] = I('cate_ename');
            $data['cate_keywords'] = I('cate_keywords');
            $data['cate_desc'] = I('cate_desc');
            $data['cate_type'] = I('cate_type');
            $data['cate_parentid'] = I('cate_parentid');
            $data['cate_content'] = I('cate_content');
            //图片上传代码
            if ($_FILES['cate_pic']['tmp_name'] != '') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './'; //设置上传文件路径
                $upload->savePath = './Public/Uploads/'; // 设置附件上传目录 确保该路径及目录必须存在
                $info = $upload->uploadOne($_FILES['cate_pic']); //数据表对应的字段
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                } else {// 上传成功 获取上传文件信息
                    $data['cate_pic'] = $info['savepath'] . $info['savename'];
                }
            }
            //模型自动验证
            if ($cate->create($data)) {
                if($cate->add($data)){
                    $this->success('栏目新增成功',U('lst'));
                }else{
                    $this->error($cate->getError());
                }

            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $this->display();
    }

    public function edit(){
        $this->display();
    }

}