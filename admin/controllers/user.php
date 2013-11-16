<?php
/**
 * Self Controller
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-27 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage Instaboard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaboardControllerUser extends JControllerLegacy{
    
    public static $modelName = 'user';
    public static $viewName = 'user';
    
    public function display($cachable = false, $urlparams = false){
        $view = $this->getView( self::$viewName, 'html' );
        $model = $this->getModel(  self::$modelName );
        $relationModel = $this->getModel(  'relationship' );
        $view->setModel( $model, true );
        $view->setModel($relationModel);
        $layout = 'default';
        if(JRequest::getCmd('format') == 'raw'){
            $layout = 'raw';
        }
        $view->setLayout($layout);
        $view->display();
    }
}
