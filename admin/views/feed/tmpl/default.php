<?php
/**
 * @version  1.0
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-okt-21 Stilero Webdesign http://www.stilero.com
 * @category Components
 * @license	GPLv2
  */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<?php foreach ($this->items as $item) : ?>
    <?php
        $InstaEmbed = new InstaEmbeddings();
        $embeddings = json_decode($InstaEmbed->getOembeded($item->link));
    ?>
    <img src="<?php echo $embeddings->url; ?>" />
<?php endforeach; ?>
