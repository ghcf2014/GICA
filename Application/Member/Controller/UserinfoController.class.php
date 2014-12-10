<?php
namespace Member\Controller;
use OT\DataDictionary;
use Think\Controller;
class UserinfoController extends MemberController {
    public function index(){
    	
        
    $this->display();
    }
    public function bevip(){
        $uid  = is_login();
        $m = M('ucenter_member');//用户头像
        $condition1['gica_ucenter_member.id'] =$uid;
        $m=$m->where($condition1)->select();
        $this->assign('list', $m);
        $this->display();
    }
    public function bevip_save(){
        $uid  = is_login();
        $m = M('ucenter_member');//用户头像
        $data['customer_id']=$_POST['customer_id'];
        $data['user_type']=1;
        $data['time_limit']=strtotime('+1 year');
        $condition['id'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'),U('Member/index'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }
    }
    public function userapplyforvip(){
    	
        
    $this->display();
    }
    public function userbankInfo(){
    	
        
    $this->display();
    }
    public function userbankset(){
            $uid        =   is_login();
            $m = M('z_member_banks');
            $m_id['uid'] =$uid;
            $m = $m->where($m_id)->select();
            $this->assign('list', $m);
    	
        
    $this->display();
    }
    public function userbankset_save(){
        //从表单中获取来的数据 
        $uid=is_login(); 
        $m=M("z_member_banks");
        $data['bank_num']=$_POST['bankCard'];
        $data['bank_name']=$_POST["bankName"];
        $data['bank_address']=$_POST["subBankName"];
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }
    }
    public function userbasicdata(){
    	
        
    $this->display();
    }
    public function userbasicinfo(){
    	
        
    $this->display();
    }
    public function usermailindex(){
        $this->display();

    }
    public function userchagerwithdraw(){
        $uid=is_login();
        $money = M("z_member_money");
        $condition['uid'] =$uid;
        $money = $money->where($condition)->select();

        var_dump($money);
        $this->assign('list', $money);
        $this->display();
    }
    public function userchangebankInfo(){
	
        
    $this->display();
    }
    public function userchangepass(){
    	
        
    $this->display();
    }
    public function userchangephone(){
    	
        
    $this->display();
    }
    public function userfinanceindex(){
    	
        
    $this->display();
    }
    public function userfindpass(){
    	
        
    $this->display();
    }
    public function userfindpassbyphone(){
    	
        
    $this->display();
    }
    public function userfindpaypass(){
    	
        
    $this->display();
    }
    public function userinfoinformset(){
    	
        
    $this->display();
    }
    public function userinfowork(){
    	
        
    $this->display();
    }
    public function usermailbanding(){
            $uid        =   is_login();
            $m = M('ucenter_member');
            $m_id['id'] =$uid;
            $m = $m->where($m_id)->select();
            $this->assign('list', $m);
            
    	
        
    $this->display();
    }
    public function userpapersinfo(){
    	
        
    $this->display();
    }
    public function userrenewalvip(){
    	
        
    $this->display();
    }
    public function userreplaymail(){
    	
        
    $this->display();
    }
    public function userreport(){
    	
        
    $this->display();
    }
    public function userricelist(){
    	
        
    $this->display();
    }
    public function userselfidcard(){
    	
        
    $this->display();
    }
    public function userselfset(){


    	
        
    $this->display();
    }
    public function add(){
        //从表单中获取来的数据 
        $uid=is_login(); 
        $m=M("z_member_info");
        $data['real_name']=$_POST["real_name"];
        $data['idcard']=$_POST["idcard"];
        $data['sex']=$_POST["sex"];
        $data['zy']=$_POST["zy"];
        $data['cell_phone']=$_POST["cell_phone"];
        $data['education']=$_POST["education"];
        $data['income']=$_POST["income"];
        $data['address']=$_POST["address"];
        $condition['uid'] =$uid;
        //保存当前数据对象
        if ($m = $m->where($condition)->save($data)) { //保存成功
            //成功提示
            $this->success(L('保存成功'));
        } else {
            //失败提示
            $this->error(L('保存失败'));
        }

    }
        public function userselfset_2(){
    	
        
    $this->display();
    }
        public function userselfsetok(){
    	
        
    $this->display();
    }
        public function usertrustlevel(){
    	
        
    $this->display();
    }
        public function userwithdrawindex(){
    	
        
    $this->display();
    }
        public function userwithdrawrice(){
    	
        
    $this->display();
    }
}