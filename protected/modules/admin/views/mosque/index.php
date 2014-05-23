<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques'),
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'Create Mosque'),'url'=>array('create')),
	array('label'=>Yii::t('Mosque', 'Manage Mosque'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mosques')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
