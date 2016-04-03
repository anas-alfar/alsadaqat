<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committees'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Branch Committees')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
