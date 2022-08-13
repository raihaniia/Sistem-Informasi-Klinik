<?php
/* @var $this PemeriksaanController */
/* @var $model Pemeriksaan */

$this->breadcrumbs=array(
	'Pemeriksaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pemeriksaan', 'url'=>array('index')),
	array('label'=>'Manage Pemeriksaan', 'url'=>array('admin')),
);
?>

<h1>Create Pemeriksaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>