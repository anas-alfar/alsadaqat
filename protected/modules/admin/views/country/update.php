<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Countries')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Country', 'List Country'),'url'=>array('index')),
	array('label'=>Yii::t('Country', 'Create Country'),'url'=>array('create')),
	array('label'=>Yii::t('Country', 'View Country'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Country', 'Manage Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Country', 'Update Country')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>