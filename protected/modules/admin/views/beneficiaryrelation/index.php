<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Relations'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryRelation', 'Create Beneficiary Relation'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryRelation', 'Manage Beneficiary Relation'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Relations')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
