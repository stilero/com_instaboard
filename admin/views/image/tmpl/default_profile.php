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
$btnClass = 'btn-info';
$btnIcon = 'icon-star';
$btnLabel = 'Follow';
$btnAction = 'follow';
if($this->isFollowing == true){
    $btnClass = 'btn-danger';
    $btnIcon = 'icon-star-empty';
    $btnLabel = 'Unfollow';
    $btnAction = 'unfollow';
}
?>
<div class="row-fluid">
    <div class="span6">
        <a href="index.php?option=com_instaboard&view=user&format=raw&user_id=<?php echo $this->image->user->id; ?>"><img src="<?php echo $this->image->user->profile_picture; ?>" class="img-polaroid" /></a>
    </div>
    <div class="span5">
        <span class="username"><a href="index.php?option=com_instaboard&view=user&format=raw&user_id=<?php echo $this->image->user->id; ?>"><?php echo $this->image->user->username; ?><a></span>
        <form id="relationform" name="relationform">
            <button type="submit" id="relationbtn" class="btn <?php echo $btnClass; ?>" type="button"><i class="<?php echo $btnIcon; ?> icon-white"></i> <span><?php echo $btnLabel; ?></span></button>
            <input type="hidden" name="option" value="com_instaboard" />
            <input type="hidden" name="view" value="relationship" />
            <input type="hidden" name="format" value="raw" />
            <input type="hidden" name="task" value="<?php echo $btnAction; ?>" />
            <input type="hidden" name="user_id" value="<?php echo $this->image->user->id; ?>" />
            <?php echo JHTML::_( 'form.token' ); ?>
        </form>
    </div>
</div>
