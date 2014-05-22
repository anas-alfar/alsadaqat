<?php
$this->breadcrumbs=array(
	'Beneficiary Paterfamiliases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryPaterfamilias','url'=>array('index')),
	array('label'=>'Create BeneficiaryPaterfamilias','url'=>array('create')),
	array('label'=>'View BeneficiaryPaterfamilias','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BeneficiaryPaterfamilias','url'=>array('admin')),
);
?>

<h1>Update BeneficiaryPaterfamilias <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>