<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Photos'),
);

$this->menu=array(
	array('label'=>Yii::t('MosquePhoto', 'Create Mosque Photo'),'url'=>array('create')),
	array('label'=>Yii::t('MosquePhoto', 'Manage Mosque Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mosque Photos')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
