<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Photos'),
);

$this->menu=array(
	array('label'=>Yii::t('MosquePhoto', 'Create Mosque Photo'),'url'=>array('create')),
	array('label'=>Yii::t('MosquePhoto', 'Manage Mosque Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mosque Photos')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>



<?php 
$id = $_GET['id'];

//$gallery = Gallery::model()->findByAttributes(array('type'=>'archive'));
$gallery = Mosque::model()->findByPk( $id )->gallery_id;

if( ! $gallery ) {
    $gallery              = new Gallery();
    //$gallery->type        = 'archive';
    $gallery->name        = true;
    $gallery->description = true;
    $gallery->versions = array(
        'small' => array(
            'resize' => array(200, null),
        ),
        'medium' => array(
            'resize' => array(800, null),
        )
);
    $gallery->save();
    
    $mosqueGallery = Mosque::model()->findByPk( $id );
    $mosqueGallery->gallery_id = $gallery->id;
    $mosqueGallery->save();
} else {
    $gallery = Gallery::model()->findByPk( $gallery );
}

// render widget in view
$this->widget('GalleryManager', array(
    'gallery' => $gallery,
    'controllerRoute' => '/admin/gallery', //route to gallery controller
));


?>