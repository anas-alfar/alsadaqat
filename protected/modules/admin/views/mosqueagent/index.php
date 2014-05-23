<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Agents'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'Create Mosque Agent'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueAgent', 'Manage Mosque Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mosque Agents')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
