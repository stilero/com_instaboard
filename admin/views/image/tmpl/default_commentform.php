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
defined('_JEXEC') or die('Restricted access'); ?>
<form id="commentform" name="commentform" action="">
    <legend>Add Comment</legend>
    <label>Comment</label>
        <textarea name="comment" id="comment" class="span12" rows="5"></textarea>
    <button type="submit" class="btn">Submit</button>
    <input type="hidden" name="media_id" value="<?php echo $this->image->id; ?>" />
    <input type="hidden" name="option" value="com_instaboard" />
    <input type="hidden" name="view" value="comment" />
    <input type="hidden" name="format" value="raw" />
    <input type="hidden" name="task" value="postComment" />
    <?php echo JHTML::_( 'form.token' ); ?>
</form>