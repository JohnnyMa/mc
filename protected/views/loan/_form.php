<?php
/* @var $this LoanController */
/* @var $model Loan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'loan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timerange'); ?>
		<?php echo $form->textField($model,'timerange',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'timerange'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ratepermonth'); ?>
		<?php echo $form->textField($model,'ratepermonth',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ratepermonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activetime'); ?>
		<?php echo $form->textField($model,'activetime'); ?>
		<?php echo $form->error($model,'activetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operatorid'); ?>
		<?php echo $form->textField($model,'operatorid'); ?>
		<?php echo $form->error($model,'operatorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
		<?php echo $form->error($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'updatetime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->