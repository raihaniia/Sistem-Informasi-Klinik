<?php
/* @var $this PemeriksaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemeriksaans',
);

$this->menu=array(
	array('label'=>'Create Pemeriksaan', 'url'=>array('create')),
	array('label'=>'Manage Pemeriksaan', 'url'=>array('admin')),
);
?>

<h1>Pemeriksaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
