<?php
$this->breadcrumbs=array(
	'Beneficiary Finances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryFinance','url'=>array('index')),
	array('label'=>'Create BeneficiaryFinance','url'=>array('create')),
	array('label'=>'View BeneficiaryFinance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryFinance','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryFinance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>