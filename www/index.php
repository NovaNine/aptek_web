<?php

// Load the configuration files
$menuFile = 'fragments/menu_links.json';
$menuJson = file_get_contents($menuFile);
$menuLinks = json_decode($menuJson, true);

$siteFile = 'fragments/site.json';
$siteJson = file_get_contents($siteFile);
$siteCfg = json_decode($siteJson, true);

$pageDef = getPage();
//print_r($pageDef);

$page['body'] = '';
$page['head'] = '';
$page['template'] = (isset($pageDef['template']) ? $pageDef['template'] : '');
$page['title'] = $pageDef['title'];
$page['url'] = $pageDef['link'];
$page['menuCfg'] = $menuLinks;
$page['siteBaseUrl'] = $siteCfg['siteBaseUrl'];

renderFragment($page, $pageDef['fragmentPath']);

//print_r($page);

$output = renderTemplate($page);

print $output;

function getPage() {
	global $menuLinks;
	
	$url = (isset($_REQUEST['url']) && strlen($_REQUEST['url']) > 1) ? $_REQUEST['url'] : '/';
	
	// Always compare as lower case to make pages case insensitive
	$url = strtolower($url);
	
	foreach ($menuLinks as $page) {
		if (
			strtolower($page['link']) == $url ||	// Current URL matches the page link
			strtolower(trim($page['link'], '/')) == trim($url, '/')	|| // Trimmed URL matches the trimmed page link
			($url === '/' && isset($page['homepage']) && $page['homepage'])
		) {
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

function renderFragment(&$page, $fragmentPath) {
	ob_start();
	require($fragmentPath);
	$body = ob_get_clean();
	$page['body'] .= $body;

	return $page;
}

function renderTemplate(&$page) {
	if ($page['template'] === '')
		return $page['body'];

	$tplPath = 'templates/' . $page['template'];
	//print $tplPath;
	ob_start();
	require($tplPath);
	$result = ob_get_clean();

	return $result;
}

?>