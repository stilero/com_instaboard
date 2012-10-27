<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-27 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$btnClass = 'btn-info';
$btnIcon = 'icon-star';
$btnLabel = 'Follow';
$btnAction = 'follow';
if(true == true){
    $btnClass = 'btn-danger';
    $btnIcon = 'icon-star-empty';
    $btnLabel = 'Unfollow';
    $btnAction = 'unfollow';
}
?>
<form id="relationform" name="relationform">
    <button type="submit" id="relationbtn" class="btn <?php echo $btnClass; ?>" type="button"><i class="<?php echo $btnIcon; ?> icon-white"></i> <span><?php echo $btnLabel; ?></span></button>
    <input type="hidden" name="option" value="com_instaboard" />
    <input type="hidden" name="view" value="relationship" />
    <input type="hidden" name="format" value="raw" />
    <input type="hidden" name="task" value="<?php echo $btnAction; ?>" />
    <input type="hidden" name="user_id" value="<?php //echo $this->images->user->id; ?>" />
    <?php echo JHTML::_( 'form.token' ); ?>
</form>