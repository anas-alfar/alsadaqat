<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Students'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudent', 'Create Beneficiary Student'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryStudent', 'Manage Beneficiary Student'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Students')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
