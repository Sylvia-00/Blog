<?php  
namespace app\common\model;
use think\Model;
class Admin extends Model{
	public function getAdminByUsername($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}
?>