<?php
/**
 * Follows Controller
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-29 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage Instaboard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaboardControllerFollows extends JController{
    
    public static $modelName = 'follows';
    public static $viewName = 'follows';
    
    public function follows(){
        //Set Default View and Model
        $view =& $this->getView( self::$viewName, 'html' );
        $model =& $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->follows();
    }
    
    public function followedBy(){
        //Set Default View and Model
        $view =& $this->getView( self::$viewName, 'html' );
        $model =& $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->followedBy();
    }
}
