<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-29 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<ul class="thumbnails">
<?php foreach ($this->items as $item) : ?>
    <li>
        <div class="thumbnail">
            <a class="modal" data-toggle="modal" href="index.php?option=com_instaboard&amp;view=user&amp;format=raw&amp;<?php echo JSession::getFormToken(); ?>=1&amp;user_id=<?php echo $item->id; ?>" rel="{handler: 'iframe', size: {x: 875, y: 750}, onClose: function() {}}">
                <img src="<?php echo $item->profile_picture; ?>" alt="">
            </a>
            <h3><?php echo $item->username; ?></h3>
        </div>
    </li>
<?php endforeach; ?>
</ul>