<?php
$this->breadcrumbs=array(
	'Beneficiary Orphans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryOrphan','url'=>array('index')),
	array('label'=>'Create BeneficiaryOrphan','url'=>array('create')),
	array('label'=>'View BeneficiaryOrphan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryOrphan','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryOrphan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>