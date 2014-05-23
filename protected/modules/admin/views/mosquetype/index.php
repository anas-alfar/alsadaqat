<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Types'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueType', 'Create Mosque Type'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueType', 'Manage Mosque Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mosque Types')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
