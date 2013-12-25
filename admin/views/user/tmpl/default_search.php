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
    <label for="query">Search for username</label>
    <input name="user_id" type="text" class="form-control" id="user_id" placeholder="Enter username">
  </div>
  <input type="hidden" name="view" value="user" />
  <input type="hidden" name="option" value="com_instaboard" />
  <button type="submit" class="btn btn-default">Search</button>
</form>

