<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pasien), array('view', 'id'=>$data->id_pasien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_obat')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_obat')); ?>:</b>
	<?php echo CHtml::encode($data->harga_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_harga')); ?>:</b>
	<?php echo CHtml::encode($data->total_harga); ?>
	<br />


</div>