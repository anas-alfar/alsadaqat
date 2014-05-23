<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Countries'),
);

$this->menu=array(
	array('label'=>Yii::t('Country', 'Create Country'),'url'=>array('create')),
	array('label'=>Yii::t('Country', 'Manage Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Countries')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
