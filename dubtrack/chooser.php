<?php
	header("Content-type: text/css; charset: UTF-8");
	echo "@import url('https://nightbloo.github.io/dubtrack/dubtrack.css');";
	
	if ( isset( $_GET['video'] ) && !empty( $_GET['video'] ) && isset( $_GET['chat'] ) && !empty( $_GET['chat'] ) ){
		$video = $_GET["video"];
		$chat = $_GET["chat"];
		switch(strtolower($video)){
			case 'left':
			case 'l':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/left.css');";
				break;
			case 'middle':
			case 'center':
			case 'm':
			case 'c':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/middle.css');";
				break;
			case 'right':
			case 'r':
				echo "@import url('https://nightbloo.github.io/dubtrack/video/right.css');";
				break;
			default:
				echo "@import url('https://nightbloo.github.io/dubtrack/video/right.css');";
				break;
		}
		switch(strtolower($chat)){
			case 'left':
			case 'l':
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/left.css');";
				break;
			case 'right':
			case 'r':
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/right.css');";
				break;
			default:
				echo "@import url('https://nightbloo.github.io/dubtrack/chat/right.css');";
				break;
		}
	}
?>