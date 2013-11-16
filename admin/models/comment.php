<?php
/**
 * Comment Model
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-25 Stilero Webdesign http://www.stilero.com
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
class InstaboardModelComment extends JModelItem
{
    private $EndPoint;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $this->EndPoint = new InstaComments($accessToken);
    }
    
    public function postComment($media_id, $comment){
        $json = $this->EndPoint->postCommentForMedia($media_id, $comment);
        return $json;
    }
    
    public function deleteComment($media_id, $comment_id){
        $json = $this->EndPoint->deleteCommentForMedia($media_id, $comment_id);
        return $json;
    }
}