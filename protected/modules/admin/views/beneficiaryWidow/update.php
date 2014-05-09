<?php
$this->breadcrumbs=array(
	'Beneficiary Widows'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeneficiaryWidow','url'=>array('index')),
	array('label'=>'Create BeneficiaryWidow','url'=>array('create')),
	array('label'=>'View BeneficiaryWidow','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryWidow','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryWidow <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>