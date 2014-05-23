<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Research Notes'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'Create Beneficiary Research Notes'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'Manage Beneficiary Research Notes'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Research Notes')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
