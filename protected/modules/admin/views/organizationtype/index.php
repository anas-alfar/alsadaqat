<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Types'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationType', 'Create Organization Type'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationType', 'Manage Organization Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Types')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
