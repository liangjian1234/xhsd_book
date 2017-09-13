<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	public function __construct(){
		parent::__construct();
	}
    public function index(){
        $this->display('index');
    }
    public function search(){
        $this->display('search');
    }
    public function book(){
        $this->display('book');
    }
    public function order(){
        $this->display('order');
    }
    public function order_complete(){
        $this->display('order_complete');
    }
    public function order_detail(){
        $this->display('order_detail');
    }
    public function profile(){
        $this->display('profile');
    }
    public function wait_pay(){
        $this->display('wait_pay');
    }
    public function pay_success(){
        $this->display('pay_success');
    }
    public function pay_error(){
        $this->display('pay_error');
    }
}