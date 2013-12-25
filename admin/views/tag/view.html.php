<?php
/**
 * Description of InstaBoard
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2012-nov-07 Stilero Webdesign (www.stilero.com)
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
class InstaBoardViewTag extends JViewLegacy{
    
    function display($tpl = null) {
        JToolBarHelper::title(JText::_('Tag'), 'newsfeeds');
        JToolBarHelper::preferences('com_instaboard');
        Instamenuhelper::addSubmenu('tag');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/css/style.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-grid.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-icon.min.css');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap-thumbs.min.css');
        $model = $this->getModel();
        $tag = JRequest::getWord('tag', '');
        $images = $model->getImagesByTag($tag);
        $this->assignRef('images', $images);
        JHTML::_('behavior.modal'); 
        parent::display($tpl);
    }
}
