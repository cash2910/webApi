<?php
use yii\base\Component;
class UserService extends Component{
	
	private $handler = null;  
	
	public function __construct( $url ){
		
		require_once( './protected/Util/Hessian/HessianClient.php' );
		$this->handler = new HessianClient ( $url );
	}
	
	public function echoSuccess(  ){
		
		return  $this->handler->echoSuccess();
	}
	
	private function retLog(){
		
		
	}
	
}

?>