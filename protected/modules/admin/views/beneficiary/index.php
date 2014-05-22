<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiaries') ,
);

$this->menu=array(
	array('label'=>Yii::t('beneficiary', 'Create Beneficiary'),'url'=>array('create')),
	array('label'=>Yii::t('beneficiary', 'Manage Beneficiary'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Beneficiaries')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
