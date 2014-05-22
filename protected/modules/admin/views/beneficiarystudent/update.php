<?php
$this->breadcrumbs=array(
	'Beneficiary Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryStudent','url'=>array('index')),
	array('label'=>'Create BeneficiaryStudent','url'=>array('create')),
	array('label'=>'View BeneficiaryStudent','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryStudent','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryStudent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>