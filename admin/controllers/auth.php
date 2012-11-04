<?php
/**
 * Auth Controller
 *
 * @version  1.0
 * @author daniel
 * @copyright  (C) 2012-nov-04 Expression company is undefined on line 7, column 30 in Templates/Joomla/_controller.php.
 * @category Components
 * @subpackage InstaBoard
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class InstaBoardControllerAuth extends JController{
    
    public static $modelName = 'auth';
    public static $viewName = 'auth';
    
    public function display(){
        $view =& $this->getView( self::$viewName, 'raw' );
        $model =& $this->getModel(  self::$modelName );
        $view->setModel( $model, true );
        $code = JRequest::getVar('code', null);
        if($code != null){
            $view->getToken($code);
        }else{
            $view->openAuthorization();
        }
    }
}
