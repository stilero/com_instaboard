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
?>
<i class="icon-tag"></i> Tags
<div class="all-tags">
    <?php foreach ($this->image->tags as $tag) : ?>
    <span class="label label-info"><?php echo $tag; ?></span>
    <?php endforeach; ?>
</div>
