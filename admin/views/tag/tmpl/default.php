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
if(!isset($this->images)){
    echo $this->loadTemplate('search');
    return;
}
?>

<ul class="thumbnails">
    <?php foreach ($this->images as $image) : ?>
        <li>
            <div class="thumbnail">
                <a class="modal" data-toggle="modal" href="index.php?option=com_instaboard&amp;view=image&amp;format=raw&amp;<?php echo JSession::getFormToken(); ?>=1&amp;id=<?php echo $image->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 600}, onClose: function() {window.location.reload();}}">
                    <img class="feed_image" src="<?php echo $image->images->thumbnail->url; ?>" />
                </a>
                <p>
                    <i class="icon-time"></i><?php echo Boardhelper::timeToText($image->created_time); ?> 
                    <i class="icon-heart"></i><?php echo $image->likes->count; ?> 
                    <i class="icon-comment"></i><?php echo $image->comments->count; ?>
                </p>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
