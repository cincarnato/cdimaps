<?php

namespace CdiGmaps\Gmap;

class Marker {

    //put your code here

    public $name = '';
     public $title = '';
       public $type = 'normal';
    public $number = '';
    public $lat = '';
    public $lon = '';
    public $iconLabelMarker = '';
   public $aIconLabelMarkers = array(
       'mr'=> 'img/markergmap/mr.png',
       'mg'=> 'img/markergmap/mg.png',
       'mb'=> 'img/markergmap/mb.png',
       'my'=> 'img/markergmap/my.png',
   );

    function __construct($name,$lat,$lon) {
        $this->name = $name;
        $this->lat = $lat;
          $this->lon = $lon;
        
    }
    

}

?>
