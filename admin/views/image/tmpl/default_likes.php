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
$maxCount = 10;
$i = 0;
$remainCount = $this->image->likes->count - $maxCount;
$remainHTML = '';
if($remainCount > 0){
    $remainHTML = '<span class="label label-info"><i class="icon-chevron-right icon-white"></i> see '.$remainCount.' more</span>';
}
?>
<i class="icon-heart"></i> <?php echo $this->image->likes->count; ?> Likes
<?php foreach ($this->image->likes->data as $like) : ?>
    <div class="like">
        <span class="label label-success"><i class="icon-user icon-white"></i> <?php echo $like->username; ?></span>
    </div>
    <? if($i++ == $maxCount) { break; }?>
<?php endforeach; ?>
<?php echo $remainHTML; ?>
