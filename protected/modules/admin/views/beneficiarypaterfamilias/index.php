<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Paterfamiliases'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Create Beneficiary Paterfamilias'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Manage Beneficiary Paterfamilias'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiary Paterfamiliases')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
