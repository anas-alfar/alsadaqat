<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'Create Beneficiary Disabled'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage Beneficiary Disabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Disableds')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
