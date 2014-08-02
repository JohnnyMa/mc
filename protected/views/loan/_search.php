<?php
/* @var $this LoanController */
/* @var $model Loan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timerange'); ?>
		<?php echo $form->textField($model,'timerange',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ratepermonth'); ?>
		<?php echo $form->textField($model,'ratepermonth',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activetime'); ?>
		<?php echo $form->textField($model,'activetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operatorid'); ?>
		<?php echo $form->textField($model,'operatorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatetime'); ?>
		<?php echo $form->textField($model,'updatetime',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->