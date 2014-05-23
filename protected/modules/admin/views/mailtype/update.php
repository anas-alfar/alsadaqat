<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Types')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MailType', 'List Mail Type'),'url'=>array('index')),
	array('label'=>Yii::t('MailType', 'Create Mail Type'),'url'=>array('create')),
	array('label'=>Yii::t('MailType', 'View Mail Type'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MailType', 'Manage Mail Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailType', 'Update Mail Type')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>