<?php
namespace Home\Controller;
use Think\Controller;
class RbacController extends Controller {
    public function index(){ 
    $this->display('user');
    }
    //用户
    public function user(){
    	$this->display();
    }
    //角色
    public function role(){
    	$db = M('role');
    	$this->rolelist = $db->order('id')->select();
        $this->display();
    }
    //节点
    public function node(){
    	
    }
    //添加用户
    public function adduser(){
    	
    }
    //添加角色
    public function addrole(){
    	$this->display();
    }
    //添加角色表达处理
    public function addroleHandle(){
         $db = M('role');
         if ($db->add($_POST)) {
         	$this->success('添加成功',U('Rbac/role'));
         }else {
         	$this->error('添加失败');
         }
         
    }
    //添加节点
    public function addnode(){
    	
    }
    
}