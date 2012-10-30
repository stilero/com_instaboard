<?php
/**
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
  */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<div id="feed">
<?php foreach ($this->items as $item) : ?>
    <div class="feed_item">
        <div class="caption">
            <span class="from">
                   <img class="profile_picture" src="<?php echo $item->user->profile_picture; ?>" width="20" height="20" />
                <span class="username"><?php echo $item->user->username; ?></span>
            </span>
            <span class="created">
                <?php echo Boardhelper::timeToText($item->created_time); ?>
            </span>
        </div>
        <a class="modal" href="index.php?option=com_instaboard&amp;view=image&amp;format=raw&amp;<?php echo JUtility::getToken() ?>=1&amp;id=<?php echo $item->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {}}">
            <img class="feed_image" src="<?php echo $item->images->thumbnail->url; ?>" />
        </a>
        <div class="likes">
            <?php echo $item->likes->count; ?> likes
        </div>
        <div class="comments">
            <span class="count">
                <?php echo $item->comments->count; ?> comments
            </span>
        </div>
    </div>
<?php endforeach; ?>
    <div id="feed_footer">Test</div>
</div>
