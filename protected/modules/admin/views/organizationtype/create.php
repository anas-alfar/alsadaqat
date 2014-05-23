<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Types')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationType', 'List Organization Type'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationType', 'Manage Organization Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationType', 'Create Organization Type')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>