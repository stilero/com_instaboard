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
 
class InstaboardModelUser extends JModel{
    
    private $_accessToken;
    private $_EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = & JComponentHelper::getParams('com_instaboard');
        $this->_accessToken = $params->get('access_token');
        $this->_EndPoint = new InstaUsers($this->_accessToken);
    }
    
    public function getImages($user_id){
        $userFeed = $this->_EndPoint->getUserIdMediaRecent($user_id, 50);
        $feed = json_decode($userFeed);
        $images = null;
        if($feed->meta->code == '200'){
            $images = $feed->data;
        }
        return $images;
    }
    
    public function getUserInfo($user_id){
        $json = $this->_EndPoint->getUserInfo($user_id);
        $info = json_decode($json);
        $userInfo = null;
        if($info->meta->code == '200'){
            $userInfo = $info->data;
        }
        return $userInfo;
        
    }
    
}