<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Agents'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'Create Agent'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueAgent', 'Manage Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Agents')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
