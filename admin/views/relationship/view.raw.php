<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-26 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
JRequest::checkToken('get') or die( 'Invalid Token' );
 
class InstaboardViewRelationship extends JViewLegacy{
    
    private $_modelName = 'relationship';
    
    function display($tpl = null){
        return; 
    }
    
    function follow($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->follow($user_id);
        parent::display($tpl);
    }
    
    function unfollow($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->unfollow($user_id);
        parent::display($tpl);
    }
    
    function block($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->block($user_id);
        parent::display($tpl);
    }
    
    function unblock($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->unblock($user_id);
        parent::display($tpl);
    }
    
    function approve($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->approve($user_id);
        parent::display($tpl);
    }
    
    function deny($tpl = null){
        $model = $this->getModel($this->_modelName);
        $user_id = JRequest::getCmd('user_id');
        $this->response = $model->deny($user_id);
        parent::display($tpl);
    }
}
