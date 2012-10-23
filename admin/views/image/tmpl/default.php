<?php
/**
 * Description of Instaboard
 *
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-23 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$embeded = new InstaEmbeddings();
$json = $embeded->getOembeded($this->image->link);
$imageEmbeds = json_decode($json);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Instagram Image</title>
        <link href="<?php echo JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span8">
                    <img src="<?php echo $imageEmbeds->url; ?>" />
                </div>
                <div class="span4">
                    <div class="user">
                        <img src="<?php echo $this->image->user->profile_picture; ?>" class="img-polaroid" />
                        <span class="username"><?php echo $this->image->user->username; ?></span>
                    </div>
                    <div class="info">
                        <i class="icon-time"></i> <?php echo Boardhelper::timeToText($this->image->created_time); ?>
                        <i class="icon-cog"></i> <?php echo $this->image->filter; ?>
                    </div>
                    <div class="tags">
                        <i class="icon-tag"></i> Tags
                        <div class="all-tags">
                            <?php foreach ($this->image->tags as $tag) : ?>
                            <span class="label label-info"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="text">
                        <i class="icon-pencil"></i> <?php echo $this->image->caption->text; ?>
                    </div>
                    <div class="likes">
                        <i class="icon-heart"></i> <?php echo $this->image->likes->count; ?> Comments
                        <?php foreach ($this->image->likes->data as $like) : ?>
                            <div class="comment">< ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="comments">
                        <i class="icon-comment"></i> <?php echo $this->image->comments->count; ?> Comments
                        <?php foreach ($this->image->comments->data as $comment) : ?>
                            <div class="comment"><?php var_dump($comment);exit; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
unset($embeded); 
?>