<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Teachers'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryTeacher', 'Create Beneficiary Teacher'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Manage Beneficiary Teacher'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Teachers')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
