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
        JToolBarHelper::title(JText::_('Instaboard', 'generic.png'));
        JToolBarHelper::preferences('com_instaboard');
        $model =& $this->getModel('feed');
        $items =& $model->getImages();
        $this->assignRef('items', $items);
        parent::display($tpl);
    }
}
