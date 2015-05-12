<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends WebServiceController
{
    public $defaultAction = 'regsev';

    public function actionRegsev()
    {
    	require_once( './actionRegsev/Service/UserService.php' );
    	$uSev = new \UserService();
    	$this->hessian->registerObject( $uSev );
    	$this->hessian->service();
    }

}
