<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-27 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.model');
 
class InstaboardModelSelf extends JModel{
    
    public function getImages(){
        $params = & JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $InstaMedia = new InstaUsers($accessToken);
        $userFeed = $InstaMedia->getUserIdMediaRecent('self', 50);
        $feed = json_decode($userFeed);
        $images = $feed->data;
        return $images;
    }
    
}