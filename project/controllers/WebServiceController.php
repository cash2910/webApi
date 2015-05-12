<?php

namespace app\controllers;

use yii\web\Controller;
use Composer\Autoload\includeFile;

class WebServiceController extends Controller
{
 
	protected  $hessian = null;
	
	
	public function beforeAction($action){

	   require_once( './project/Util/Hessian/HessianService.php' );
	   $this->hessian = new \HessianService( null );
	   return true;
	}

}
