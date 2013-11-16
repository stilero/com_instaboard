<?php
/**
 * Relationship Controller
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-26 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage Instaboard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaboardControllerRelationship extends JControllerLegacy{
    
    public static $modelName = 'relationship';
    public static $viewName = 'relationship';
    
    public function display($cachable = false, $urlparams = false){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->display();
    }
    
    public function follow(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->follow();
    }
    
    public function unfollow(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->unfollow();
    }
    
    public function block(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->block();
    }
    
    public function unblock(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->unblock();
    }
    
    public function approve(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->approve();
    }
    
    public function deny(){
        $view = $this->getView( self::$viewName, 'raw' );
        $model = $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $view->deny();
    }
    
}
