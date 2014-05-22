<?php
$this->breadcrumbs=array(
	'Beneficiary Homes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryHome','url'=>array('index')),
	array('label'=>'Create BeneficiaryHome','url'=>array('create')),
	array('label'=>'View BeneficiaryHome','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryHome','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryHome <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>