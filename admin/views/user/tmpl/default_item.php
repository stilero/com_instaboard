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
?>
<div class="feed_item">
    <div class="caption">
        <span class="from">
               <img class="profile_picture" src="<?php echo $image->user->profile_picture; ?>" width="20" height="20" />
            <span class="username"><?php echo $image->user->username; ?></span>
        </span>
        <span class="created">
            <?php echo Boardhelper::timeToText($image->created_time); ?>
        </span>
    </div>
    <a class="modal" href="index.php?option=com_instaboard&amp;view=image&amp;format=raw&amp;<?php echo JUtility::getToken() ?>=1&amp;id=<?php echo $image->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {}}">
        <img class="feed_image" src="<?php echo $image->images->thumbnail->url; ?>" />
    </a>
    <div class="likes">
        <?php echo $image->likes->count; ?> likes
    </div>
    <div class="comments">
        <span class="count">
            <?php echo $image->comments->count; ?> comments
        </span>
    </div>
</div>