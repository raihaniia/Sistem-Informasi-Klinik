<?php
/* @var $this PemeriksaanController */
/* @var $data Pemeriksaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pasien), array('view', 'id'=>$data->id_pasien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_tindakan); ?>
	<br />


</div>