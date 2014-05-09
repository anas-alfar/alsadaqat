<?php
$this->breadcrumbs=array(
	'Beneficiary Teachers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeneficiaryTeacher','url'=>array('index')),
	array('label'=>'Create BeneficiaryTeacher','url'=>array('create')),
	array('label'=>'View BeneficiaryTeacher','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryTeacher','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryTeacher <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>