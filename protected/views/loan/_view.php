<?php
/* @var $this LoanController */
/* @var $data Loan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timerange')); ?>:</b>
	<?php echo CHtml::encode($data->timerange); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratepermonth')); ?>:</b>
	<?php echo CHtml::encode($data->ratepermonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('activetime')); ?>:</b>
	<?php echo CHtml::encode($data->activetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operatorid')); ?>:</b>
	<?php echo CHtml::encode($data->operatorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatetime')); ?>:</b>
	<?php echo CHtml::encode($data->updatetime); ?>
	<br />

	*/ ?>

</div>