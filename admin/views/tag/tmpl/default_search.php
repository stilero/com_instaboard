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
<form role="form" action="<?php echo JUri::base(true);?>/index.php" method="GET">
  <div class="form-group">
    <label for="query">Search for tag</label>
    <input name="tag" type="text" class="form-control" id="tag" placeholder="Enter tag without #">
  </div>
  <input type="hidden" name="view" value="tag" />
  <input type="hidden" name="option" value="com_instaboard" />
  <button type="submit" class="btn btn-default">Search</button>
</form>

