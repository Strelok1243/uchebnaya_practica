<?php
    abstract class planet_and_satelite {
        public $arr_name_planet = array("Mercury", "Venus", "Erth", "Mars", "Asteroids", "Jupiter", "Saturn", "Uran", "Neptun", "Pluto");
        public $arr_name_satelite = array("Moon", "Deimos", "Phobos", "Io", "Europe", "Ganimed", "Callisto", "Mimas", "Callipso", "Titan", "Miranda", "Oberon", "Proteus", "Triton", "Haron");
		public $arr_property_time = array(1, 2, 9, 22, 36, 69, 180, 400, 1200, 2400, 3600, 4600);
        public $arr_property_size = array(10, 24, 34, 50, 2, 3, 1700, 200, 170, 130, 20);
    }

    class property_planet extends planet_and_satelite {

        function include_property(){
            foreach($this->arr_name_planet as $name_planet){
                if($name_planet == "Mercury"){
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[2],
                        "size" => $this->arr_property_size[1]
                    );
                } elseif($name_planet == "Venus") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[3],
                        "size" => $this->arr_property_size[3]
                    );
                } elseif ($name_planet == "Erth") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[4],
                        "size" => $this->arr_property_size[3]
                    );
                } elseif ($name_planet == "Mars") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[5],
                        "size" => $this->arr_property_size[2]
                    );
                } elseif($name_planet == "Asteroids") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[6],
                        "size" => $this->arr_property_size[6]
                    );
                } elseif ($name_planet == "Jupiter") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[7],
                        "size" => $this->arr_property_size[7]
                    );
                } elseif ($name_planet == "Saturn") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[8],
                        "size" => $this->arr_property_size[8]
                    );
                } elseif ($name_planet == "Uran") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[9],
                        "size" => $this->arr_property_size[9]
                    );
                } elseif ($name_planet == "Neptun") {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[10],
                        "size" => $this->arr_property_size[9]
                    );
                } else {
                    $full_object[] = array(
                        "name" => $name_planet,
                        "time" => $this->arr_property_time[11],
                        "size" => $this->arr_property_size[10]
                    );
                }
            }
			return $full_object;
            //echo "<pre>".print_r($full_planet, 1)."</pre>";
        }

		function create_space_object($full_object){
			if(empty($full_object)){
				$full_object = $this->include_property();
			}
            foreach($full_object as $object){
               echo '
					.'.$object["name"].' img{
						width: '.$object["size"].';
						height: auto;
						animation-name: rotation_'.$object["name"].';
						animation-duration: '.$object["time"].'s;
						animation-iteration-count: infinite;
						animation-timing-function: linear;
					} 
               '; 
            }
        }
    }

    class property_satelite extends planet_and_satelite{      
         function include_property(){
            foreach($this->arr_name_satelite as $name_satelite){
                if($name_satelite == "Moon"){
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[0],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif($name_satelite == "Deimos") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[0],
                        "size" => $this->arr_property_size[5]
                    );
                } elseif($name_satelite == "Phobos") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[1],
                        "size" => $this->arr_property_size[4]
                    );
                } elseif ($name_satelite == "Io") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[0],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Europe") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[2],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif($name_satelite == "Ganimed") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[1],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Callisto") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[0],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Mimas") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[4],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif($name_satelite == "Callipso") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[3],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Titan") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[5],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Miranda") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[3],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif($name_satelite == "Oberon") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[2],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Proteus") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[1],
                        "size" => $this->arr_property_size[0]
                    );
                } elseif ($name_satelite == "Triton") {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[0],
                        "size" => $this->arr_property_size[0]
                    );
                } else {
                    $full_object[] = array(
                        "name" => $name_satelite,
                        "time" => $this->arr_property_time[1],
                        "size" => $this->arr_property_size[5]
                    );
                }
            }
            return $full_object;
            //echo "<pre>".print_r($full_satelite, 1)."</pre>";
        }
    }

    $object_planet = new property_planet();
	$object_satelite = new property_satelite();
    
	$object_planet->create_space_object("");
	$arr_sat = $object_satelite->include_property();
	$object_planet->create_space_object($arr_sat);
?>