<?php
/* @var $this PemeriksaanController */
/* @var $model Pemeriksaan */

$this->breadcrumbs=array(
	'Pemeriksaans'=>array('index'),
	$model->id_pasien,
);

$this->menu=array(
	array('label'=>'List Pemeriksaan', 'url'=>array('index')),
	array('label'=>'Create Pemeriksaan', 'url'=>array('create')),
	array('label'=>'Update Pemeriksaan', 'url'=>array('update', 'id'=>$model->id_pasien)),
	array('label'=>'Delete Pemeriksaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pasien),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pemeriksaan', 'url'=>array('admin')),
);
?>

<h1>View Pemeriksaan #<?php echo $model->id_pasien; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pasien',
		'nama_tindakan',
	),
)); ?>
