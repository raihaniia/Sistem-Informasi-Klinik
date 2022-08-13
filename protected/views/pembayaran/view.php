<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	$model->id_pasien,
);

$this->menu=array(
	array('label'=>'List Pembayaran', 'url'=>array('index')),
	array('label'=>'Create Pembayaran', 'url'=>array('create')),
	array('label'=>'Update Pembayaran', 'url'=>array('update', 'id'=>$model->id_pasien)),
	array('label'=>'Delete Pembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pasien),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pembayaran', 'url'=>array('admin')),
);
?>

<h1>View Pembayaran #<?php echo $model->id_pasien; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pasien',
		'jumlah_obat',
		'harga_obat',
		'total_harga',
	),
)); ?>
