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
            <div class="row-fluid well">
                <div class="span2">
                    <img src="<?php echo $this->user->profile_picture; ?>" />
                    <?php echo $this->loadTemplate('follow'); ?>
                </div>
                <div class="span10">
                    <?php echo $this->loadTemplate('profile'); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
//unset($embeded); 
?>