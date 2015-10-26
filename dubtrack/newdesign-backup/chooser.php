<?php
	header("Content-type: text/css; charset: UTF-8");
	echo "@import url('https://nightbloo.github.io/dubtrack/dubtrack.css'); \r\n";
	
	if ( isset( $_GET['video'] ) && !empty( $_GET['video'] ) && isset( $_GET['chat'] ) && !empty( $_GET['chat'] ) ){
		$video = $_GET["video"];
		$chat = $_GET["chat"];
		switch(strtolower($video)){
			case 'left':
			case 'l':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/left.css'); \r\n";
				$vidPos = "left";
				break;
			case 'middle':
			case 'center':
			case 'm':
			case 'c':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/middle.css'); \r\n";
				$vidPos = "middle";
				break;
			case 'right':
			case 'r':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/right.css'); \r\n";
				$vidPos = "right";
				break;
			default:
				echo "@import url('https://nightbloo.github.io/dubtrack/video/right.css'); \r\n";
				break;
		}
		switch(strtolower($chat)){
			case 'left':
			case 'l':
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/left.css'); \r\n";
				break;
			case 'right':
			case 'r':
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/right.css'); \r\n";
				break;
			default:
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/right.css'); \r\n";
				break;
		}
		vidWidth($vidPos);
		vidHeight();
	}
	function endsWith($haystack, $needle)
	{
    	$length = strlen($needle);
    	if ($length == 0) {
    	    return true;
    	}

    	return (substr($haystack, -$length) === $needle);
	}
	function vidWidth($vidpos){
		if ( isset( $_GET['vidwidth'] ) && !empty( $_GET['vidwidth'] )){
			$vidwidth = $_GET['vidwidth'];
			if($vidpos == "middle"){
				if (endsWith($vidwidth, "vw")) {
					$vwint = preg_replace("/[^0-9,.]/", "", $vidwidth);
					$vwval = (100 - $vwint) / 2;
					echo "#main-room .main-room-wrapper .left_section { left: ".$vwval."vw;} \r\n";
				} else{
					return;
				}
			}
			echo "#main-room:not(.fullscreenParent) {max-width: 100vw;} \r\n #main-room:not(.fullscreenParent) .left_section { width: ".$vidwidth."; } \r\n";
		}
	}
	function vidHeight(){
		if ( isset( $_GET['vidheight'] ) && !empty( $_GET['vidheight'] )){
			$vidheight = $_GET['vidheight'];
			echo "#main-room:not(.fullscreenParent) #main_player .player_container { height: ".$vidheight."; } \r\n";
		}
	}
?>