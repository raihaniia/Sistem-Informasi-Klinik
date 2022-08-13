<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Create Pembayaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>