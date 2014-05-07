	<footer>
        <div class="subnav navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    Designed by <a href="http://www.webapplicationthemes.com" target="_new">webapplicationthemes.com</a>. All Rights Reserved.<br /><small>Powered by <a href="http://www.yiiframework.com" title="Yii Framework" target="_new">Yii Framework</a> and <a href="http://twitter.github.com/bootstrap/" title="Twitter Bootstrap" target="_new">Twitter Bootstrap</a></small>
                </div>
            </div>
        </div>      
	</footer>

        <?php
            $translate=Yii::app()->translate;
            //in your layout add
            //echo '<li>' . $translate->dropdown() . '</li>';
            if( $translate->hasMessages() ) {
                //generates a to the page where you translate the missing translations found in this page
                echo $translate->translateLink('Translate missing in new page') . '<br />';
                //echo $translate->translateDialogLink('Translate missing in dialog','Translate page title') . '<br />';
            }
            //link to the page where you edit the translations
            echo $translate->editLink('Edit translations page') . '<br />';
            //link to the page where you check for all unstranslated messages of the system
            echo $translate->missingLink('Missing translations page') . '<br />';
        ?>