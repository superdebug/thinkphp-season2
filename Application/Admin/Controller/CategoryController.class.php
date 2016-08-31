<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function lst(){
        $cate=D('category');
        $catetree=$cate->catetree(); //调用分类数函数 位于分类模型内
        $this->assign('cateres',$catetree);
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
            $data['parentid'] = I('parentid');
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
                    $this->error('栏目修改失败');
                }

            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cateres=$cate->catetree();
        $this->assign("cateres",$cateres);
        $this->display();
    }

    public function edit($cate_id){
        $cate=D('category');
        if (IS_POST) {
            $data['cate_id'] = I('cate_id');
            $data['cate_name'] = I('cate_name');
            $data['cate_ename'] = I('cate_ename');
            $data['cate_keywords'] = I('cate_keywords');
            $data['cate_desc'] = I('cate_desc');
            $data['cate_type'] = I('cate_type');
            $data['parentid'] = I('parentid');
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

                if($cate->save($data)){
                    $this->success('栏目修改成功',U('lst'));
                }else{
                    $this->error('栏目修改失败');
                }

            }else{
                $this->error($cate->getError());
            }
            return;
        }

        $cateresa=$cate->find($cate_id);
        //分页树排序
        $this->assign('cateresa',$cateresa);
        $cateres=$cate->catetree();

        $this->assign("cateres",$cateres);
        $this->display();
    }

    public function del($cate_id){
        $cate=D('category');
        if ($cate->delete($cate_id)){
                $this->success('删除成功',U('lst'));
        }else{
                $this->error('删除栏目失败');
        }
    }


    public function  bdel(){
        $bdel=I('bdel');
        if($bdel){ //如果数组不为空
            //将数组按照逗号分割为字符串
            $delid=implode(',',$bdel);
            $cate=D('category');
            if($cate->delete($delid)){
                $this->success('批量删除栏目成功',U('lst'));
            }else{
                $this->error('批量删除栏目失败！');
            }
        }
    }
}