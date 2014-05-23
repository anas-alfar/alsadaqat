<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Users')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUser', 'List Organization User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUser', 'Manage Organization User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUser', 'Create Organization User')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>