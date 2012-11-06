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
<?php if($this->items != false) : ?>
<ul class="thumbnails">
<?php foreach ($this->items as $item) : ?>
    <li>
        <div class="thumbnail">
            <h3>
                <a class="modal" href="index.php?option=com_instaboard&amp;view=user&amp;format=raw&amp;<?php echo JUtility::getToken() ?>=1&amp;user_id=<?php echo $item->user->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {}}">
                    <img class="profile_picture" src="<?php echo $item->user->profile_picture; ?>" width="20" height="20" /> 
                        <?php echo $item->user->username; ?>
                </a>
            </h3>
            <a class="modal" href="index.php?option=com_instaboard&amp;view=image&amp;format=raw&amp;<?php echo JUtility::getToken() ?>=1&amp;id=<?php echo $item->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {window.location.reload();}}">
                    <img class="feed_image" src="<?php echo $item->images->thumbnail->url; ?>" />
                </a>
            
            <p>
                <i class="icon-time"></i><?php echo Boardhelper::timeToText($item->created_time); ?> 
                <i class="icon-heart"></i><?php echo $item->likes->count; ?> 
                <i class="icon-comment"></i><?php echo $item->comments->count; ?>
            </p>
        </div>
    </li>
<?php endforeach; ?>
</ul>
<?php else : ?>
    <a class="modal" href="index.php?option=com_instaboard&amp;view=auth&amp;format=raw&amp;<?php echo JUtility::getToken() ?>=1" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {}}">
        Authorize
    </a>
<?php endif; ?>
