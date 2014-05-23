<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Donators'),
);

$this->menu=array(
	array('label'=>Yii::t('Donator', 'Create Donator'),'url'=>array('create')),
	array('label'=>Yii::t('Donator', 'Manage Donator'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Donators')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
