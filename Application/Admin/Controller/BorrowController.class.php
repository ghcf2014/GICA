<?php

namespace Admin\Controller;
use Admin\Model\AuthGroupModel;
use User\Api\UserApi;

/**
 * 后台用户控制器
 */
class BorrowController extends AdminController {
     /* 保存允许访问的公共方法 */
    static protected $allow = array( 'draftbox','mydocument');

    private $cate_id        =   null; //文档分类id

    /**
     * 检测需要动态判断的文档类目有关的权限
     *
     * @return boolean|null
     *      返回true则表示当前访问有权限
     *      返回false则表示当前访问无权限
     *      返回null，则会进入checkRule根据节点授权判断权限
     *
     */

    /**
     * 借款管理首页
     */
    public function index(){
        $nickname       =   I('nickname');
        $map['status']  =   array('egt',0);
        if(is_numeric($nickname)){
            $map['borrow_uid|borrow_name']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['borrow_name']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '管理信息';
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
    public function fail(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  = 1;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function overdue(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  =   array('egt',8);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function overduemember(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  =   array('egt',8);
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function repaymenting(){
    	$this->display();
    }
    public function reviewfail(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  = 5;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function unfinish(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  = 3;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function waitmoney(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  = 2;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function waitverify(){
        $nickname       =   I('nickname');
        $map['borrow_status']  = 0;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
    
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function done(){
    	$nickname       =   I('nickname');
        $map['borrow_status']  = 3;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function review(){
        $nickname       =   I('nickname');
        $map['borrow_status']  = 4;
        if(is_numeric($nickname)){
            $map['uid|nickname']=   array(intval($nickname),array('like','%'.$nickname.'%'),'_multi'=>true);
        }else{
            $map['nickname']    =   array('like', '%'.(string)$nickname.'%');
        }

        $list   = $this->lists('z_borrow_info', $map);

        int_to_string($list);
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function audit($id = 0){
        $map['id']  = $id;
        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->id = $id;
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function audit_review($id = 0){
        $map['id']  = $id;

        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        $this->id = $id;
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function audit_save($id = 0){
        $map['id']  = $id;
        $mapd['borrow_id']  = $id;
        $m = M ( 'z_borrow_info' ); // 用户头像
        $s =$m ->where($map)->select();
        $uid=$s[0]['borrow_uid'];
        $capital=$s[0]['borrow_money'];

        $s=$s[0]['borrow_status'];

        $sta = $_POST ["group_id"];
       
       
        if($sta ==1){
        	 if ($s==0) {
        	 	$sb=2;
        	 }
        	 if ($s==2) {
        	 	$sb=4;
        	 }
        	 if ($s==4) {
        	 	$sb=6;
        	 }
        }
        if ($sta ==0) {
        	if ($s==0) {
        	 	$sb=1;
        	 }
        	 if ($s==2) {
        	 	$sb=3;
        	 }
        	 if ($s==4) {
        	 	$sb=5;
        	 }
        }




        $data ['borrow_status']=$sb ;
        $datad ['status']=$sb;
        $md = M ( 'z_investor_detail' );
        $md = $md->where ($mapd)->save ( $datad );

        // 保存当前数据对象
        if ($m = $m->where ( $map )->save ( $data )) { // 保存成功
                                                             // 成功提示
            static $type = array(
            // Informational 1xx
            2 => '通过初审',
            3 => '不通过初审',
            6 => '通过复审',
            5 => '不通过复审'
            );

            //发送站内信
            // $action='您发布的'.$id.'借款标已审核。审核员：2915,审核结果：【'.$type[$sb].'】,审核理由：无。';
            // $opertype=5;//系统通知
            // $result_ms=inner_msg($uid,$opertype,$action);  
            if($sb==6){
	        	
		        $result=b_change_money($capital,$uid);
		        if ($result) { 
		        	//发送站内信
		            $action='您发布的'.$id.'借款标'.$type[$sb].'。收到借款标款项'.$capital.'元。注：有借有还，方得始终';
		            $opertype=1;//账户通知
		            $result_ms=inner_msg($uid,$opertype,$action); 
		            $this->success('操作成功');
		        }
	        }
            
        } else {
            // 失败提示
            $this->error ( L ( '操作失败' ) );
        }
        $list   = $this->lists('z_borrow_info', $map);
        int_to_string($list);
        
        $this->assign('_list', $list);
        $this->meta_title = '借款信息';
        $this->display();
    }
    public function application($id = 0){
        $map['status']  = 0;
        $list   = $this->lists('z_borrow_apply', $map);
        int_to_string($list);
        $this->id = $id;
        $this->assign('_list', $list);
        $this->meta_title = '借款申请信息';

        // dump($list);
        $this->display();
    }
    public function application_audit($id = 0){
        $map['id']  =$id;
        $list   = $this->lists('z_borrow_apply', $map);
        int_to_string($list);
        $this->id = $id; 
        $this->assign('_list', $list);
        $this->meta_title = '借款申请信息';

        // dump($list);
        $this->display();
    }
    public function application_audit_save($id = 0){
        $map['id']  =$id;
        $sta = $_POST ["group_id"];
        //审核状态改变
        if (M('z_borrow_apply')->where(array('id'=>$id))->setField(array('status'=>floatval($sta)))) {
            $this->success('操作成功');
        } else {
            // 失败提示
            $this->error ( L ( '操作失败' ) );
        }
    }
    public function applicationed($id = 0){
        // $map['status']  = 1;
        // $map['id']  = $id;
        $list   = $this->lists('z_borrow_apply', 'status >= 1');
        int_to_string($list);
        $this->id = $id;
        $this->assign('_list', $list);
        $this->meta_title = '已借款申请信息';
        $this->display();
    }
    public function setStatus(){
        // return parent::setStatus('z_members_status');
        $map['id']=I('id',0);
        $st=I('id_status',0);
        if($User = M('z_borrow_apply')-> where($map)->setField('status',$st)){

            static $type = array(
            // Informational 1xx
            1 => '通过',
            0 => '不通过'
            );
            $Useruid = M('z_borrow_apply')-> where($map)->select();
            $uid=$Useruid[0]['apply_uid'];

            //发送站内信
            $action='您申请编号'.I('id',0).'借款信息已审核。审核员：2915,审核结果：【'.$type[$st].'】,审核理由：无。';
            $opertype=5;//系统通知
            $result_ms=inner_msg($uid,$opertype,$action);  

            $this->success('更新成功！');
        } 
    }

}