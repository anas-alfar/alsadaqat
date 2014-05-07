<?php
/**
 * This Class override specific request to disable CSRFValidation
 *
 * @author      Mohammad Mousa <mm At oilwell7 Dot com >
 * @version     1.0
 * @category    Yii Framework
 * @package     HttpRequest
 * @subpackage  normalizeRequest
 * @copyright   Copyright (c) 2013 OilWell7.com
 *  
 */

class HttpRequest extends CHttpRequest
{
  public $noCsrfValidationRoutes = array();

  protected function normalizeRequest()
  {
    parent::normalizeRequest();
    $route = implode('/', array_slice(explode('/', Yii::app()->getUrlManager()->parseUrl($this)), 0, 2));

    if($this->enableCsrfValidation && array_search($route, $this->noCsrfValidationRoutes) !== false)
      Yii::app()->detachEventHandler('onbeginRequest',array($this,'validateCsrfToken'));
  }
}

?>