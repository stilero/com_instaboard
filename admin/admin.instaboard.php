<?php
/**
 * Description of Component_InstaBoard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * 
 * This file is part of admin.instaboard.
 * 
 * Component_InstaBoard is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Component_InstaBoard is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Component_InstaBoard.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 
define('INCLUDES_FOLDER', JPATH_COMPONENT_ADMINISTRATOR.'/includes/');
define('INSTA_API', INCLUDES_FOLDER.'insta-api/');
jimport('joomla.filesystem.file');
//JHTML::addIncludePath(JPATH_COMPONENT.DS.'helpers');
JLoader::register('Classhelper', JPATH_COMPONENT_ADMINISTRATOR.'helpers/classhelper.php');
Classhelper::loadMainClasses();
Classhelper::loadEndpointClasses();
require_once JPATH_COMPONENT.DS.'controller.php';
$viewController = JRequest::getWord('view');
if ( $viewController) { 
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$viewController.'.php';
    if (JFile::exists($path)) {
        require_once $path;
    } else {       
        $viewController = '';	   
    }
}
$classname = 'InstaboardController'.$viewController;
$controller = new $classname();
$controller->execute(JRequest::getCmd('task', 'display'));
$controller->redirect();