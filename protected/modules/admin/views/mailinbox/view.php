<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Inboxes')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('MailInbox', 'List Mail Inbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailInbox', 'Create Mail Inbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailInbox', 'Update Mail Inbox'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailInbox', 'Delete Mail Inbox'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('MailInbox', 'Manage Mail Inbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailInbox', 'View Mail Inbox')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'number',
		'from_name',
		'from_department',
		'subject',
		'received_at',
		'owner_id',
		'mail_attachment_id',
		'created_at',
		'updated_at',
	),
)); ?>



<h2><?php echo Yii::t('gallery', 'Mail Inbox gallery')?></h2>
<?php 
if ($model->galleryBehavior->getGallery() === null) {
    echo '<p>' . Yii::t('gallery', 'Before add photos to '.Yii::t('gallery', 'Mail Inbox gallery').', you need to create gallery') . '<b> '. $model->name.'</b></p>';
    echo '<p>' . Yii::t('gallery', 'To create gallery, go to') . ' ' . CHtml::link( Yii::t('MailInbox', 'Manage MailInbox'), array('admin') ) . ' or ' . CHtml::link( Yii::t('gallery', 'Create Gallery'), array('createGallery', 'id' => $model->id) ) ;
} else {
    $this->widget('GalleryManager', array(
        'gallery' => $model->galleryBehavior->getGallery(),
        'controllerRoute' => '/admin/gallery', //route to gallery controller
    ));
}
?>