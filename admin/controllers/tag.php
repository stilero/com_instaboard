<?php
/**
 * Tag Controller
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2012-nov-07 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @subpackage InstaBoard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaBoardControllerTag extends JControllerLegacy{
    
    public static $modelName = 'tag';
    public static $viewName = 'tag';
    
    public function display($cachable = false, $urlparams = false){
        $view = $this->getView( self::$viewName, 'html' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->display();
    }
}
