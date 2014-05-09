<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Alsadaqat.com <small>admin workspace</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=> 
                        array(
                            array(
                                'label'       => $this -> languageSwitcher, 
                                'url'         => array_merge(array(Yii::app()->controller->id . '/' . Yii::app()->controller->action->id, 'lang' => $this -> oppositeCurrentLanguage),$_GET) , 
                                'itemOptions' => array('title' => $this -> languageSwitcher,)
                            ),
                            array('label'=> Yii::t('app', 'Dashboard'), 'url'=>array('/admin/default')),
                            array('label'=> Yii::t('app', 'Beneficiary') . '<span class="caret"></span>', 
                                'url'=>'#',
                                'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),
                                'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                                'items'=>array(
                                    array('label' => '&nbsp;&nbsp;<strong><i>' . Yii::t('app', 'Manage Beneficiaries') . '</i></strong>'),
                                    array('label' => Yii::t('app', 'Create new Beneficiary') , 'url'=>'/admin/beneficiary/create'),
                                    array('label' => Yii::t('app', 'List all Beneficiaries') , 'url'=>'/admin/beneficiary/index'),
                                    array('label' => Yii::t('app', 'Manage Beneficiaries') , 'url'=>'/admin/beneficiary/admin'),
                                    array('label' => '&nbsp;&nbsp;<strong><i>' . Yii::t('app', 'Manage Poor') . '</i></strong>'),
                                    array('label' => Yii::t('app', 'Create new Poor') , 'url'=>'/admin/beneficiaryPoor/create'),
                                    array('label' => Yii::t('app', 'List all Poors') , 'url'=>'/admin/beneficiaryPoor/index'),
                                    array('label' => Yii::t('app', 'Manage Poors') , 'url'=>'/admin/beneficiaryPoor/admin'),
                                    ),
                                ),

                            array('label'=>Yii::t('app', 'Login'), 'url'=>array('/admin/default/login'), 'visible'=>$this->isGuest),
                            array('label'=>Yii::t('app', 'Logout') .' ('.Yii::app()->user->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!$this->isGuest),
                        ),
                    )
                ); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->