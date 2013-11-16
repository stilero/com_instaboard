<?php
/**
 * Feed Model
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage {project.name}
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class InstaboardModelFeed extends JModelItem
{
	
    public function getImages(){
        $params = JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        if($accessToken != ''){
            $InstaMedia = new InstaUsers($accessToken);
            $userFeed = $InstaMedia->getSelfFeed(50);
            $images = null;
            if($userFeed != false){
                $feed = json_decode($userFeed);
                $images = $feed->data;
            }
            return $images;
        }
        return false;
    }
}