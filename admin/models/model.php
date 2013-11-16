<?php
/**
 * Model
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @package Stilero
 * @subpackage Expression procect is undefined on line 8, column 18 in Templates/Joomla/_model.php.
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * @link http://www.stilero.com
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.model');
 
class InstaboardModel extends JModelLegacy{
    
    protected $_tableName;
    protected $_tableClassName;

    public function __construct($tableName, $tableClassName) {
        parent::__construct();
        $this->_tableName = $tableName;
        $this->_tableClassName = $tableClassName;
    }
    
    public function getItems(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('*');
        $query->from($db->quoteName($this->_tableName));
        $db->setQuery($query);
        $this->_items = $db->loadObjectList();
        return $this->_items;
    }
    
    public function getItem($id){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('*');
        $query->from($db->quoteName($this->_tableName));
        $query->where('id='.(int)$id);
        $db->setQuery($query);
        $item = $db->loadObject();
        if($item === null){
            JError::raiseError(500, 'Item '.$id.' Not found');
        }else{
            return $item;
        }
    }
    
    function getNewItem(){
        $newItem = $this->getTable( $this->_tableClassName );
        $newItem->id = 0;
        return $newItem;
    }
    
    public function store($data){
        $table = $this->getTable();
        $table->reset();
        if(!$table->bind($data)){
            $this->setError($table->getError());
            return false;
        }
        if(!$table->check()){
            $this->setError($table->getError());
            return false;
        }
        if(!$table->store()){
            $this->setError($table->getError());
            return false;
        }
        return true;
    }
    
    public function delete($cids){
        $cids = array_map('intval', $cids);
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->delete($db->quoteName($this->_tableName));
        $query->where('id IN ('.implode(',', $cids).')');
        $db->setQuery($query);
        if( !$db->query() ){
            $errorMsg = $this->getDBO()->getErrorMsg();
            JError::raiseError(500, 'Error deleting: '.$errorMsg);
        }
    }
    
    private function _setPublish($cids, $state){
        $cids = array_map('intval', $cids);
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->update($db->quoteName($this->_tableName));
        $query->set('published = '.(int)$state);
        $query->where('id IN ('.implode(',', $cids).')');
        $db->setQuery($query);
        if( !$db->query() ){
            $errorMsg = $this->getDBO()->getErrorMsg();
            JError::raiseError(500, 'Error Setting publish state: '.$errorMsg);
        }
    }
    
    public function unpublish($cids){
        $this->_setPublish($cids, 0);
    }
    
    public function publish($cids){
        $this->_setPublish($cids, 1);
    }
}