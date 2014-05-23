<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Types')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MailType', 'List Mail Type'),'url'=>array('index')),
	array('label'=>Yii::t('MailType', 'Manage Mail Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailType', 'Create Mail Type')?>s</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>