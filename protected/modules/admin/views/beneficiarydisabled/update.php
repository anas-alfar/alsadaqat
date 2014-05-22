<?php
$this->breadcrumbs=array(
	'Beneficiary Disableds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryDisabled','url'=>array('index')),
	array('label'=>'Create BeneficiaryDisabled','url'=>array('create')),
	array('label'=>'View BeneficiaryDisabled','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryDisabled','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryDisabled <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>