<?php

namespace Admin\Controller;
use User\Api\UserApi;

/**
 * 后台用户控制器
 */
class OtherController extends AdminController {

    /**
     * 借款管理首页
     */
    public function index(){
        $nickname       =   I('nickname');
        $map['status']  =   array('egt',0);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('Member', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '其他管理中心';
        $this->display();
    }

    /**
     * 修改昵称初始化
     */
    public function updateNickname(){
        $nickname = M('Member')->getFieldByUid(UID, 'nickname');
        $this->assign('nickname', $nickname);
        $this->meta_title = '修改昵称';
        $this->display('updatenickname');
    }

    /**
     * 修改昵称提交
     */
    public function submitNickname(){
        //获取参数
        $nickname = I('post.nickname');
        $password = I('post.password');
        empty($nickname) && $this->error('请输入昵称');
        empty($password) && $this->error('请输入密码');

        //密码验证
        $User   =   new UserApi();
        $uid    =   $User->login(UID, $password, 4);
        ($uid == -2) && $this->error('密码不正确');

        $Member =   D('Member');
        $data   =   $Member->create(array('nickname'=>$nickname));
        if(!$data){
            $this->error($Member->getError());
        }

        $res = $Member->where(array('uid'=>$uid))->save($data);

        if($res){
            $user               =   session('user_auth');
            $user['username']   =   $data['nickname'];
            session('user_auth', $user);
            session('user_auth_sign', data_auth_sign($user));
            $this->success('修改昵称成功！');
        }else{
            $this->error('修改昵称失败！');
        }
    }

    /**
     * 修改密码初始化
     */
    public function updatePassword(){
        $this->meta_title = '修改密码';
        $this->display('updatepassword');
    }

    /**
     * 修改密码提交
     */
    public function submitPassword(){
        //获取参数
        $password   =   I('post.old');
        empty($password) && $this->error('请输入原密码');
        $data['password'] = I('post.password');
        empty($data['password']) && $this->error('请输入新密码');
        $repassword = I('post.repassword');
        empty($repassword) && $this->error('请输入确认密码');

        if($data['password'] !== $repassword){
            $this->error('您输入的新密码与确认密码不一致');
        }

        $Api    =   new UserApi();
        $res    =   $Api->updateInfo(UID, $password, $data);
        if($res['status']){
            $this->success('修改密码成功！');
        }else{
            $this->error($res['info']);
        }
    }

    /**
     * 用户行为列表
     */
    public function action(){
        //获取列表数据
        $Action =   M('Action')->where(array('status'=>array('gt',-1)));
        $list   =   $this->lists($Action);
        int_to_string($list);
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);

        $this->assign('_list', $list);
        $this->meta_title = '用户行为';
        $this->display();
    }

    /**
     * 新增行为
     */
    public function addAction(){
        $this->meta_title = '新增行为';
        $this->assign('data',null);
        $this->display('editaction');
    }

    /**
     * 编辑行为
     */
    public function editAction(){
        $id = I('get.id');
        empty($id) && $this->error('参数不能为空！');
        $data = M('Action')->field(true)->find($id);

        $this->assign('data',$data);
        $this->meta_title = '编辑行为';
        $this->display('editaction');
    }

    /**
     * 更新行为
     */
    public function saveAction(){
        $res = D('Action')->update();
        if(!$res){
            $this->error(D('Action')->getError());
        }else{
            $this->success($res['id']?'更新成功！':'新增成功！', Cookie('__forward__'));
        }
    }

    /**
     * 会员状态修改
     */
    public function changeStatus($method=null){
        $id = array_unique((array)I('id',0));
        if( in_array(C('USER_ADMINISTRATOR'), $id)){
            $this->error("不允许对超级管理员执行该操作!");
        }
        $id = is_array($id) ? implode(',',$id) : $id;
        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }
        $map['uid'] =   array('in',$id);
        switch ( strtolower($method) ){
            case 'forbiduser':
                $this->forbid('Member', $map );
                break;
            case 'resumeuser':
                $this->resume('Member', $map );
                break;
            case 'deleteuser':
                $this->delete('Member', $map );
                break;
            default:
                $this->error('参数非法');
        }
    }

    public function add($username = '', $password = '', $repassword = '', $email = ''){
        if(IS_POST){
            /* 检测密码 */
            if($password != $repassword){
                $this->error('密码和重复密码不一致！');
            }

            /* 调用注册接口注册用户 */
            $User   =   new UserApi;
            $uid    =   $User->register($username, $password, $email);
            if(0 < $uid){ //注册成功
                $user = array('uid' => $uid, 'nickname' => $username, 'status' => 1);
                if(!M('Member')->add($user)){
                    $this->error('用户添加失败！');
                } else {
                    $this->success('用户添加成功！',U('index'));
                }
            } else { //注册失败，显示错误信息
                $this->error($this->showRegError($uid));
            }
        } else {
            $this->meta_title = '新增用户';
            $this->display();
        }
    }

    /**
     * 获取用户注册错误信息
     * @param  integer $code 错误编码
     * @return string        错误信息
     */
    private function showRegError($code = 0){
        switch ($code) {
            case -1:  $error = '用户名长度必须在16个字符以内！'; break;
            case -2:  $error = '用户名被禁止注册！'; break;
            case -3:  $error = '用户名被占用！'; break;
            case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
            case -5:  $error = '邮箱格式不正确！'; break;
            case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
            case -7:  $error = '邮箱被禁止注册！'; break;
            case -8:  $error = '邮箱被占用！'; break;
            case -9:  $error = '手机格式不正确！'; break;
            case -10: $error = '手机被禁止注册！'; break;
            case -11: $error = '手机号被占用！'; break;
            default:  $error = '未知错误';
        }
        return $error;
    }
    public function msgonline(){
        $this->display();
    }
    public function msgtemplet(){
        $tem = M("sms_template");
        $jihuo =$tem->field('template')->where('id=1')->select();
        $zhuce =$tem->field('template')->where('id=3')->select();
        $zhaohui =$tem->field('template')->where('id=2')->select();


        $this->assign('jihuo', $jihuo[0]['template']);
        $this->assign('zhuce', $zhuce[0]['template']);
        $this->assign('zhaohui', $zhaohui[0]['template']);
        $this->meta_title = '模板信息';
        $this->display();
    }
    public function msgtemplet_add(){
        // 从表单中获取来的数据
        $tem = M("sms_template");
        // 更改用户的name值
        $tem -> where('id=2')->setField('template',$_POST ["zhaohui"]);
        $tem -> where('id=3')->setField('template',$_POST ["zhuce"]);
        if ($tem -> where('id=1')->setField('template',$_POST ["jihuo"])) { // 保存成功
                                                           // 成功提示
               
            $this-> success ('模板修改成功');  

        } else {
            // 失败提示
            $this-> error ( '模板修改失败');
        }
    }
    public function payonline(){
        $this->display();
    }
    public function qqcustomer(){
        $nickname       =   I('nickname');
        $map['status']  =   array('egt',0);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_ausers', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '其他信息';
        $this->display();
    }
    public function qun(){
        $nickname       =   I('nickname');
        $map['type']  =   array('egt',1);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_qq', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = 'QQ群信息';
        $this->display();
    }
    public function scan(){
        $this->display();
    }
    public function tel(){
        $nickname       =   I('nickname');
        $map['type']  =   array('egt',2);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_qq', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '其他信息';
        $this->display();
    }
    public function img(){
    	$img = M('z_ad');//用户头像
        $condition['ad_type'] =1;
        $img=$img->where($condition)->select();
        $this->assign('img', $img);
        $this->display();
    }
    private function AddFile($fileinfo,$depict){
          $i=0;
       // var_dump($fileinfo);
        // $uid=is_login(); 
        $dateline=date("Y-m-d H:m:s");
        $file=M('z_ad');
        // $condition['uid'] =$uid;

        foreach($fileinfo as $vo)
        {
            $data['content']=$vo['savepath'].$vo['savename'];
            $data['add_time']=time();
            $data['ad_type']=1;
            // $data['deal_time']=$dateline;
                if($file->add($data)){
                    //
                    $i++;
                }else{
                      return false;
                }
        }

        return true;
    }
     //上传
    public function upload(){
        $config=array(
            // 'maxSize'=>100*1024*1024*1024,
            // 'mimes'=>array(),
            // 'rootPath'=>'./Uploads/',
            // 'ext'=>array(),
            // 'autoSub'=>true,
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        $depict=$_POST['filename'];

        $info =$upload->upload(); // 上传文件
        if(!$info){// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{// 上传成功

           // var_dump($info);
            if($this->AddFile($info,$depict))//写入数据库
            {
                $this->success('上传成功！');
            }
            else{
               $this->error('写入数据库失败');
            }
        }
    }
    public function links_add(){
    	$this->display();
    }

}