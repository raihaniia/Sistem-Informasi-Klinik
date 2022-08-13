<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;


$username = Users::model()->findAll();
// print_r($username); 
echo "SiteController and actionIncex Called me"


?>