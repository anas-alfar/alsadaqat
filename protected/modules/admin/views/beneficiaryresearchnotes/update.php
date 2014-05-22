<?php
$this->breadcrumbs=array(
	'Beneficiary Research Notes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryResearchNotes','url'=>array('index')),
	array('label'=>'Create BeneficiaryResearchNotes','url'=>array('create')),
	array('label'=>'View BeneficiaryResearchNotes','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryResearchNotes','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryResearchNotes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>