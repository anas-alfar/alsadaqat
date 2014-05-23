<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Positions')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationPosition', 'List Organization Position'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationPosition', 'Manage Organization Position'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationPosition', 'Create Organization Position')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>