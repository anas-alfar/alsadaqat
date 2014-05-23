<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Homes'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryHome', 'Create Beneficiary Home'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryHome', 'Manage Beneficiary Home'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Homes') ?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
