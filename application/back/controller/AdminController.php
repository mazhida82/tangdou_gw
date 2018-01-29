<?php

namespace app\back\controller;

use app\common\model\AdminLog;
use think\Request;
use app\common\model\Admin;
use \think\captcha\Captcha;
class AdminController extends BaseController{
	//admins list
	public function index(){
		//not use layout.html

		$list_admin = Admin::all(['status'=>1]);

		return $this->fetch('',['list_admin'=>$list_admin]);
	}

	//login.html
	public function login(){
		//not use layout.html
		//return 214;
		return $this->fetch('');
	}
//weilai888 : 5b94734d0c266fafab796bcdcb20d8a8
	public function sigin(Request $request){
		$captcha = new Captcha();
		if(!$captcha->check($request->param('captcha'))){
			$this->error('验证码不正确！');
		}
		$name=$request->param('name');
		$pass=$request->param('pass');

		$pwd=Admin::pwdGenerate($pass);
//        return $pwd;
		$condition=array();
		$condition['name']=$name;
		$condition['pwd']=$pwd;
		$admin = Admin::get($condition);
//		return $admin;
		if($admin){
            $admin->setInc('times');
			session('admin_weilai',(object)array('name'=>$admin->name,'id'=>$admin->id));
           // $user_ip = $request->ip();
             $user_ip = $_SERVER['REMOTE_ADDR'];
            (new AdminLog())->addLog($admin->id,$user_ip);
			 $this->redirect("index/index");
		}else{
			 $this->error('用户名或密码有误！');
		}
	}
	//captcha
	public function captcha(){
		$captcha = new Captcha(['fontSize'=>16,'useCurve'=>false,'imageH'=>35,'imageW'=>100,'length'=>3,'useNoise'=>false]);
		return $captcha->entry();
	}
	public function logout(){
		session(null);
		$this->redirect('login');
	}
	public function edit(){

	    return $this->fetch('');
    }
    public function update(Request $request){
        $data = $request->param();
        //dump($data);exit;
        $rule = ['pass'=>'require','pass_new'=>'require','repass_new'=>'require|confirm:pass_new'];
        $msg = ['pass'=>'原始密码必须','pass_new'=>'新密码必须','repass_new.require'=>'确认密码必须','repass_new.confirm'=>'确认密码与新密码不一致'];
        $res = $this->validate($data,$rule,$msg);
        if(true!==$res){
            $this->error($res);
        }
        $row_= $this->findById(1,new Admin);
        if(Admin::pwdGenerate($data['pass']) !== $row_->pwd){
            $this->error('原始密码有误');
        }
        $row_-> pwd = Admin::pwdGenerate($data['pass_new']);
        //$data_update=['pwd'=>];
        $row_->save();
        $this->success('修改成功，请用新密码登录','logout');
    }

}