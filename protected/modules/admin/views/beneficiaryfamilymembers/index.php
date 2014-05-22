<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Family Members'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Create Family Members'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Manage Family Members'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Family Members') ?></h1>


<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
