<?php
$this->breadcrumbs=array(
	'Beneficiary Relations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BeneficiaryRelation','url'=>array('index')),
	array('label'=>'Create BeneficiaryRelation','url'=>array('create')),
	array('label'=>'View BeneficiaryRelation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryRelation','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryRelation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>