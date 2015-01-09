<?php
namespace Home\Controller;

	class PublicController extends HomeController{
		public function borrowleft () {
			$uid = is_login();
			$status = M ('z_members_status');
			$result=$status->where("uid=".$uid)->select();
			if ($result!==null) {
				$data=1;
				$this->assign ( 'data', $data);
				
			}
			$this->display();		
		}
	}