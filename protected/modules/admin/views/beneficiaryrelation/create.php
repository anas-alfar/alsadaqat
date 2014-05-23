<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Relations')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryRelation', 'List Beneficiary Relation'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryRelation', 'Manage Beneficiary Relation'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryRelation', 'Create Beneficiary Relation')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>