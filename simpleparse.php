<?php
require_once 'simple_html_dom.php';

$dom = file_get_html('https://coursehunters.net/archive', false);

if(!empty($dom)) {

	//var_dump($dom);

	foreach($dom->find(".standard-block__flex") as $divClass) {
		foreach($divClass->find("ul") as $list ) {
			foreach( $list->find("li") as $li) {

				//echo($li) ."\n"; 
				foreach( $li->find("a") as $a)
						echo($a) ."\n";
			}
		}	
	}
}