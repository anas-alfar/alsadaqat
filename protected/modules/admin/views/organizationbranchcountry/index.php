<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Countries'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountry', 'Create Organization Branch Country'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Manage Organization Branch Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Branch Countries')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
