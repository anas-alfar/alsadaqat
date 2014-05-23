<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committee Users'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Create Branch Country Committee User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Manage Branch Country Committee User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Branch Country Committee Users')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
