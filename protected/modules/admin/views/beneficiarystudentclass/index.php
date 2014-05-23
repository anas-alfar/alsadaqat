<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Student Classes'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Create Beneficiary Student Class'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Manage Beneficiary Student Class'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Student Classes')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
