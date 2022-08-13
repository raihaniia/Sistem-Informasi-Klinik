<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	$model->id_pasien=>array('view','id'=>$model->id_pasien),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'View Pembayaran', 'url'=>array('view', 'id'=>$model->id_pasien)),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Update Pembayaran <?php echo $model->id_pasien; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>