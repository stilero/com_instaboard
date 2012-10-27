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
<h1><?php echo $this->user->username; ?></h1>
<p class="lead"><?php echo $this->user->bio; ?></p>
<div class="row-fluid">
    <div class="span3">
        <span><i class="icon-home"></i> <a href="<?php echo $this->user->website; ?>" target="_blank">Website</a></span>
    </div>
    <div class="span3">
        <span><i class="icon-camera"></i> Images: <?php echo $this->user->counts->media; ?></span>
    </div>
    <div class="span3">
        <span><i class="icon-eye-open"></i> Following: <?php echo $this->user->counts->follows; ?></span>
    </div>
    <div class="span3">
        <span><i class="icon-user"></i> Followed by: <?php echo $this->user->counts->followed_by; ?></span>
    </div>
</div>