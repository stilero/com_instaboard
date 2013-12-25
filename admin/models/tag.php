<?php
/**
 * Tag Model
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2012-nov-07 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @subpackage InstaBoard
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 

class InstaBoardModelTag extends JModelItem{
	
    private $_accessToken;
    private $_EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = JComponentHelper::getParams('com_instaboard');
        $this->_accessToken = $params->get('access_token');
        $this->_EndPoint = new InstaTags($this->_accessToken);
    }
    
    public function getImagesByTag($tag){
        if($tag == ''){
            return null;
        }
        $tagFeed = $this->_EndPoint->getRecentMediaByTag($tag);
        $feed = json_decode($tagFeed);
        $images = null;
        if($feed->meta->code == '200'){
            $images = $feed->data;
        }
        return $images;
    }
}