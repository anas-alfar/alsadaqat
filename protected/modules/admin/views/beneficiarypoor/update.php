<?php
$this->breadcrumbs=array(
	'Beneficiary Poors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryPoor','url'=>array('index')),
	array('label'=>'Create BeneficiaryPoor','url'=>array('create')),
	array('label'=>'View BeneficiaryPoor','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryPoor','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryPoor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>