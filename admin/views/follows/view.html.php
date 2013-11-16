<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-29 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class InstaboardViewFollows extends JViewLegacy{
    
    function follows($tpl = null) {
        JToolBarHelper::title(JText::_('Follows'),'user.png');
        Instamenuhelper::addSubmenu('follows');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/css/style.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-grid.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-icon.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-thumbs.min.css');
        JHTML::_('behavior.modal');        
        $model = $this->getModel('follows');
        $user_id = JRequest::getVar('user_id', 'self');
        $items = $model->follows($user_id);
        $this->assignRef('items', $items->data);
        parent::display($tpl);
    }
    
    function followedBy($tpl = null) {
        JToolBarHelper::title(JText::_('Followed by'),'user.png');
        Instamenuhelper::addSubmenu('followedBy');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/css/style.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-grid.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-icon.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-thumbs.min.css');
        JHTML::_('behavior.modal');        
        $model = $this->getModel('follows');
        $user_id = JRequest::getVar('user_id', 'self');
        $items = $model->followedBy($user_id);
        $this->assignRef('items', $items->data);
        parent::display($tpl);
    }
}
