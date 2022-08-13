<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_obat'); ?>
		<?php echo $form->textField($model,'jumlah_obat'); ?>
		<?php echo $form->error($model,'jumlah_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_obat'); ?>
		<?php echo $form->textField($model,'harga_obat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'harga_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_harga'); ?>
		<?php echo $form->textField($model,'total_harga',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'total_harga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->