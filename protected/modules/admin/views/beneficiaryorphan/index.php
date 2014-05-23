<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Orphans'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryOrphan', 'Create Beneficiary Orphan'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryOrphan', 'Manage Beneficiary Orphan'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Orphans')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
