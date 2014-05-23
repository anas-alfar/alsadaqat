<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Finances'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFinance', 'Create Beneficiary Finance'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Manage Beneficiary Finance'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Finances') ?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
