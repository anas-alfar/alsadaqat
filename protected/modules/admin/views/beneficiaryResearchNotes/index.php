<?php
$this->breadcrumbs=array(
	'Beneficiary Research Notes',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryResearchNotes','url'=>array('create')),
	array('label'=>'Manage BeneficiaryResearchNotes','url'=>array('admin')),
);
?>

<h1>Beneficiary Research Notes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
