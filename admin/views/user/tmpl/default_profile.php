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
<div class="profile_image">
    <img src="<?php echo $this->user->profile_picture; ?>" />
</div>
<div class="username">
    <span><?php echo $this->user->username; ?></span>
</div>
<div class="full_name">
    <span><?php echo $this->user->full_name; ?></span>
</div>
<div class="bio">
    <span><?php echo $this->user->bio; ?></span>
</div>
<div class="info">
    <p class="website"><a href="<?php echo $this->user->website; ?>" target="_blank">Website</a></p>
    <p class="media">Images: <?php echo $this->user->counts->media; ?></p>
    <p class="media">Following <?php echo $this->user->counts->follows; ?></p>
    <p class="media">Followed by <?php echo $this->user->counts->followed_by; ?></p>
</div>