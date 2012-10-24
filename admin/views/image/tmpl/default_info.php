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
$hasLocation = ($this->image->location != '')? true : false;
$locationHTML = '';
if($hasLocation){
    $lat = $this->image->location->latitude;
    $long = $this->image->location->longitude;
    $address = '';
    $locInfo = Mapshelper::getInfoFromCoordinates($lat, $long);
    $hasfoundAdress = false;
    if(isset($locInfo->Placemark[0]->AddressDetails->Country->AdministrativeArea->Locality->LocalityName)){
        $address = $locInfo->Placemark[0]->AddressDetails->Country->AdministrativeArea->Locality->LocalityName;
        $hasfoundAdress = true;
    }
    if(isset($locInfo->Placemark[0]->AddressDetails->Locality->LocalityName) && !$hasfoundAdress){
        $address = $locInfo->Placemark[0]->AddressDetails->Locality->LocalityName;
        $hasfoundAdress = true;
    }
    if(isset($locInfo->Placemark[0]->AddressDetails->Country->Locality->LocalityName) && !$hasfoundAdress){
        $address = $locInfo->Placemark[0]->AddressDetails->Country->Locality->LocalityName;
    }
    $locationHTML = '<i class="icon-map-marker"></i> ';
    $locationHTML .= '<a href="'.Mapshelper::getMapsUrl($lat, $long).'" target="_blank">';
    $locationHTML .= $address;
    $locationHTML .= '</a>';
}
?>
<i class="icon-time"></i> <?php echo Boardhelper::timeToText($this->image->created_time); ?> | 
<i class="icon-tint"></i> <?php echo $this->image->filter; ?> | 
<i class="icon-heart"></i> <?php echo $this->image->likes->count; ?> | 
<i class="icon-comment"></i> <?php echo $this->image->comments->count; ?> | 
<?php echo $locationHTML; ?>

