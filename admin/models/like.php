<?php
/**
 * Like Model
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-24 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage {project.name}
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
/**
 * HelloWorld Model
 */
class InstaboardModelLike extends JModelItem
{
    private $EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $this->EndPoint = new InstaLikes($accessToken);
    }
    
    public function likeMedia($media_id){
        $json = $this->EndPoint->likeMedia($media_id);
        return $json;
    }
    
    public function unlikeMedia($media_id){
        $json = $this->EndPoint->unlikeMedia($media_id);
        return $json;
    }
}