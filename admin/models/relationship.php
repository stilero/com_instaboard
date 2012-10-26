<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-26 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class InstaboardModelRelationship extends JModelItem{
    
    private $EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = & JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $this->EndPoint = new InstaRelationships($accessToken);
    }
    
    public function follow($user_id){
        $json = $this->EndPoint->followUserId($user_id);
        return $json;
    }
    
    public function unfollow($user_id){
        $json = $this->EndPoint->unfollowUserId($user_id);
        return $json;
    }
    
    public function block($user_id){
        $json = $this->EndPoint->blockUserId($user_id);
        return $json;
    }
    
    public function unblock($user_id){
        $json = $this->EndPoint->unblockUserId($user_id);
        return $json;
    }
    
    public function approve($user_id){
        $json = $this->EndPoint->approveUserId($user_id);
        return $json;
    }
    
    public function deny($user_id){
        $json = $this->EndPoint->denyUserId($user_id);
        return $json;
    }
    
    public function isFollowing($user_id){
        $json = $this->EndPoint->getUserIdRelationship($user_id);
        $response = json_decode($json);
        $isFollowing = false;
        if( isset($response->data->outgoing_status) ){
            $isFollowing = $response->data->outgoing_status == 'follows' ? true : false;
        }
        return $isFollowing;
    }
    
}