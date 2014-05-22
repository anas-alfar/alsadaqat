<?php
$this->breadcrumbs=array(
	'Beneficiary Student Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryStudentClass','url'=>array('index')),
	array('label'=>'Create BeneficiaryStudentClass','url'=>array('create')),
	array('label'=>'View BeneficiaryStudentClass','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryStudentClass','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryStudentClass <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>