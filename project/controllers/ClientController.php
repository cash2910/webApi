<?php

namespace app\controllers;

use yii\web\Controller;

class ClientController extends WebServiceController
{
    public $defaultAction = 'hello';
    

    public function actionHello()
    {
    	$url = 'http://mysev.com/';
    	require_once( './protected/rpcService/UserService.php' );
    	$uSev = new \UserService( $url );
   // 	die('dsadsa');
    	echo $uSev->echoSuccess();
    }
}
