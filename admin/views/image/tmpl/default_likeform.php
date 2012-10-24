<?php
/**
 * Instaboard
 *
 * @version  1.0
 * @package Stilero
 * @subpackage Instaboard
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-24 Stilero Webdesign http://www.stilero.com
 * @license	GNU General Public License version 2 or later.
 * @link http://www.stilero.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 
$btnClass = 'btn-success';
$btnIcon = 'icon-heart';
$btnLabel = 'Like';
if($this->image->user_has_liked == '1'){
    $btnClass = 'btn-warning';
    $btnIcon = 'icon-ban-circle';
    $btnLabel = 'Unlike';
}
?>
<form>
    <button class="btn btn-large <?php echo $btnClass; ?>" type="button"><i class="<?php echo $btnIcon; ?> icon-white"></i> <?php echo $btnLabel; ?></button>
</form>