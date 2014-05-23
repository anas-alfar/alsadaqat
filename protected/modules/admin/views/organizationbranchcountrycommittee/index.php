<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committees'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Country Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Country Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Branch Country Committees')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
