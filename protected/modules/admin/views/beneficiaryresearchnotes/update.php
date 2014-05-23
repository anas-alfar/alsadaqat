<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Research Notes')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'List Beneficiary Research Notes'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'Create Beneficiary Research Notes'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'View Beneficiary Research Notes'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryResearchNotes', 'Manage Beneficiary Research Notes'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryResearchNotes', 'Update Beneficiary Research Notes')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>