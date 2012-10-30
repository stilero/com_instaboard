<?php
/**
 * Feed View
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

class InstaboardViewFeed extends JView{
    
    function display($tpl = null){
        JToolBarHelper::title(JText::_('Feed'), 'newsfeeds');
        JToolBarHelper::preferences('com_instaboard');
        Instamenuhelper::addSubmenu('feed');
        //JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/css/style.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-grid.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-icon.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-thumbs.min.css');
        JHTML::_('behavior.modal'); 
        $model =& $this->getModel('feed');
        $items =& $model->getImages();
        $this->assignRef('items', $items);
        parent::display($tpl);
    }
}
