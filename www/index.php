<?php

// Load the configuration files
$menuLinks = json_decode(file_get_contents('fragments/menu_links.json'));

$pageDef = getPage();

$page['body'] = '';
$page['header'] = '';

print_r($_REQUEST);

function getPage() {
	global $menuLinks;
	
	$url = (isset($_REQUEST['url']) ? $_REQUEST['url'] : '/');
	
	// Always compare as lower case to make pages case insensitive
	$url = strtolower($url);
	
	foreach ($menuLinks as $page) {
		if (strtolower($page['link']) == $url || (strlen($url) > 1 && strtolower(trim($page['link'], '/')) == trim($url, '/'))) {
			$page['fragmentPath'] = 'fragments/' . $page['page'];
			return $page;
		}
	}
	
	return array(
		'page' => '404.php',
		'fragmentPath' => 'errors/404.php',
		'data' => array(
			'originalUrl' => $_REQUEST['url']
		)
	);
}

?>