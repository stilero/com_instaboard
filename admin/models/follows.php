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
 
// import Joomla modelitem library
jimport('joomla.application.component.model');
 
class InstaboardModelFollows extends JModel{
    
    private $EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = & JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $this->EndPoint = new InstaRelationships($accessToken);
    }
    
    public function follows($user_id){
        $json = $this->EndPoint->getUserIdFollows($user_id);
        $follows = json_decode($json);
        return $follows;
    }
    
    public function followedBy($user_id){
        $json = $this->EndPoint->getUserIdFollowedBy($user_id);
        $followers = json_decode($json);
        return $followers;
    }
    
}