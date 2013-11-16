<?php
/**
 * Image Model
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-23 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @subpackage {project.name}
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
class InstaboardModelImage extends JModelItem{
    
    private $InstaMedia;
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $params = JComponentHelper::getParams('com_instaboard');
        $accessToken = $params->get('access_token');
        $this->InstaMedia = new InstaMedia($accessToken);
    }
    
    public function getImage($media_id){
        $data = $this->InstaMedia->getId($media_id);
        $image = json_decode($data);
        return $image->data;
    }
    
}