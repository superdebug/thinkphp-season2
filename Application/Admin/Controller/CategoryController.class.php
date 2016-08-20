<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function lst(){
        $this->display();
    }

    public function add(){
        $cate=D('category');
        $this->display();
    }

    public function edit(){
        $this->display();
    }

}