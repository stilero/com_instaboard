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
<i class="icon-comment"></i> <?php echo $this->image->comments->count; ?> Comments
<?php foreach ($this->image->comments->data as $comment) : ?>
    <div class="comment">
            <div class="row-fluid">
                <div class="span4">
                    <img src="<?php echo $comment->from->profile_picture; ?>" class="img-polaroid" width="60" height="60" />
                </div>
                <div class="span8">
                    <div class="username">
                        <?php echo $comment->from->username; ?>
                    </div>
                    <div class="date">
                        <?php echo Boardhelper::timeToText($comment->created_time); ?>
                    </div>
                    <div class="text">
                        <?php echo Boardhelper::transformTagsAndUsers($comment->text); ?>
                    </div>
                </div>
            </div>
    </div>
    <? if($i++ == $maxCount) { break; }?>
<?php endforeach; ?>
<?php echo $remainHTML; ?>
