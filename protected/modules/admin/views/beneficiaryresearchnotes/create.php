<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Research Notes')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'List Beneficiary Research Notes'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'Manage Beneficiary Research Notes'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryResearchNotes', 'Create Beneficiary Research Notes')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>