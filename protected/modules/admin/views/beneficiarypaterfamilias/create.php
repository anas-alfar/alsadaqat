<?php
$this->breadcrumbs=array(
	'Beneficiary Paterfamiliases'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryPaterfamilias','url'=>array('index')),
	array('label'=>'Manage BeneficiaryPaterfamilias','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryPaterfamilias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>