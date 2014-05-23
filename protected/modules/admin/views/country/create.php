<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Countries')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Country', 'List Country'),'url'=>array('index')),
	array('label'=>Yii::t('Country', 'Manage Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Country', 'Create Country')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>