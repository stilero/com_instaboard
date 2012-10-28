
<?php
/**
 * Self View
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-27 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

class InstaboardViewUser extends JView{
    
    function display($tpl = null){
        JToolBarHelper::preferences('com_instaboard');
        Instamenuhelper::addSubmenu('user');
        JHtml::stylesheet(JURI::root().'administrator/components/com_instaboard/assets/css/style.css');
        $model =& $this->getModel();
        $user_id = JRequest::getVar('user_id', 'self');
        $images =& $model->getImages($user_id);
        $user =& $model->getUserInfo($user_id);
        $relationsModel =& $this->getModel('relationship');
        $isFollowing = $relationsModel->isFollowing($user_id);
        $this->isFollowing = $isFollowing;
        JToolBarHelper::title($user->username, 'user');
        $this->assignRef('images', $images);
        $this->assignRef('user', $user);
        parent::display($tpl);
    }
    
}
