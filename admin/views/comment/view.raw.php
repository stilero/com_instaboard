<?php
/**
 * Comment View
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-25 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
JRequest::checkToken('get') or die( 'Invalid Token' );

// import Joomla view library
jimport('joomla.application.component.view');

class InstaboardViewComment extends JViewLegacy{
    
    function display($tpl = null){
        return; 
    }
    
    function postComment($tpl = null){
        $model = $this->getModel('comment');
        $media_id = JRequest::getCmd('media_id');
        $comment = JRequest::getString('comment');
        $this->response = $model->postComment($media_id, $comment);
        parent::display($tpl);
    }
    
}
