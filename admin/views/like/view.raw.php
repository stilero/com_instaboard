<?php
/**
 * Like View
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-24 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

class InstaboardViewLike extends JView{
    function display($tpl = null){
        return; 
    }
    
    function like($tpl = null){
        $model =& $this->getModel('like');
        $image_id = JRequest::getCmd('id');
        $this->response =& $model->likeMedia($image_id);
        parent::display($tpl);
    }
    
    function unlike($tpl = null){
        $model =& $this->getModel('like');
        $image_id = JRequest::getCmd('id');
        $this->response =& $model->unlikeMedia($image_id);
        parent::display($tpl);
    }
}
