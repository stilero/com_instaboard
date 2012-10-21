<?php
/**
 * Feed Controller
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage Instaboard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaboardControllerFeed extends JController{
    
    public static $modelName = 'feed';
    public static $viewName = 'feed';
    
    public function display(){
        $view =& $this->getView( self::$viewName, 'html' );
        $model =& $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->display();
    }
}
