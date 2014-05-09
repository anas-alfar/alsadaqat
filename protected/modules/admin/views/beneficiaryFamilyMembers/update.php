<?php
$this->breadcrumbs=array(
	'Beneficiary Family Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeneficiaryFamilyMembers','url'=>array('index')),
	array('label'=>'Create BeneficiaryFamilyMembers','url'=>array('create')),
	array('label'=>'View BeneficiaryFamilyMembers','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryFamilyMembers','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryFamilyMembers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>