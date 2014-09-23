<?php

namespace CdiGmaps\Gmap;

class Gmap {

    //put your code here

    public $api_key = '';
    public $sensor = 'false';
    public $div_id = '';
    public $div_class = '';
    public $zoom = 10;
    public $lat = -34.613875;
    public $lon = -58.388958;
    protected $markers = array();
    public $height = "100px";
    public $width = "100px";
    public $animation = '';
    public $icon = '';
    public $icons = array();

    function __construct($api_key) {
        $this->api_key = $api_key;
    }
    
        /**
     * Initialize the user preferences
     *
     * Accepts an associative array as input, containing display preferences
     *
     * @access	public
     * @param	array	config preferences
     * @return	void
     */
    function initialize($config = array()) {
        foreach ($config as $key => $val) {
            if (isset($this->$key)) {
                $this->$key = $val;
            }
        }
    }

    
    public function addMarker(\CdiGmaps\Gmap\Marker $marker){
        array_push($this->markers, $marker);
    }
    
    public function getMarkers(){
        return $this->markers;
    }
    
}

?>
