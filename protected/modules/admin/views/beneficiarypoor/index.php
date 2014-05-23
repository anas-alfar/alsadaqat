<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Poors'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPoor', 'Create Beneficiary Poor'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Manage Beneficiary Poor'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Poors')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
