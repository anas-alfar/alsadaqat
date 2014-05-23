<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Widows'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryWidow', 'Create Beneficiary Widow'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Manage Beneficiary Widow'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Widows')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
