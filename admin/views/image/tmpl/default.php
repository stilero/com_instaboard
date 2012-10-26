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
//$embeded = new InstaEmbeddings();
//$json = $embeded->getOembeded($this->image->link);
//$imageEmbeds = json_decode($json);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Instagram Image</title>
        <link href="<?php echo JURI::root().'administrator/components/com_instaboard/assets/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
        <link href="<?php echo JURI::root().'administrator/components/com_instaboard/assets/css/image.css'; ?>" rel="stylesheet">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/js/dialog.js'; ?>"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/js/like.js'; ?>"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/js/comment.js'; ?>"></script>
        <script src="<?php echo JURI::root().'administrator/components/com_instaboard/assets/js/relationship.js'; ?>"></script>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span7">
                    <img src="<?php echo $this->image->images->standard_resolution->url; ?>" />
                    <div class="row-fluid">
                            <?php echo $this->loadTemplate('commentform'); ?>
                    </div>
                </div>
                <div class="span5 imagedetails">
                    <div class="profile detailitem">
                        <?php echo $this->loadTemplate('profile'); ?>
                    </div>
                    <div class="like detailitem">
                        <?php echo $this->loadTemplate('likeform'); ?>
                    </div>
                    <div class="info detailitem">
                        <?php echo $this->loadTemplate('info'); ?>
                    </div>
                    <div class="text detailitem">
                        <?php echo $this->loadTemplate('text'); ?>
                    </div>
                    <div class="tags detailitem">
                        <?php echo $this->loadTemplate('tags'); ?>
                    </div>
                    <div class="likes detailitem">
                        <?php echo $this->loadTemplate('likes'); ?>
                    </div>
                    <div class="comments detailitem">
                        <?php echo $this->loadTemplate('comments'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
unset($embeded); 
?>