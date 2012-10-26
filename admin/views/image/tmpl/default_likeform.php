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
$btnAction = 'like';
if($this->image->user_has_liked == '1'){
    $btnClass = 'btn-warning';
    $btnIcon = 'icon-ban-circle';
    $btnLabel = 'Unlike';
    $btnAction = 'unlike';
}
?>
<div class="row-fluid">
    <div class="span4">
        <form id="likeform" name="like">
            <button type="submit" id="likebtn" class="btn btn-large <?php echo $btnClass; ?>" type="button"><i class="<?php echo $btnIcon; ?> icon-white"></i> <span><?php echo $btnLabel; ?></span></button>
            <input type="hidden" name="option" value="com_instaboard" />
            <input type="hidden" name="view" value="like" />
            <input type="hidden" name="format" value="raw" />
            <input type="hidden" name="task" value="<?php echo $btnAction; ?>" />
            <input type="hidden" name="media_id" value="<?php echo $this->image->id; ?>" />
            <?php echo JHTML::_( 'form.token' ); ?>
        </form>
    </div>
    <div class="span8">
        <div id="likedialog"></div>
    </div>
</div>