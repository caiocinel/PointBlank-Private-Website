<?php
// FROM HASH: 9653a5df768201b1d6b8eab89adc3032
return array('macros' => array('nav_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'selected' => false,
		'shortcut' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="p-navEl ' . ($__vars['selected'] ? 'is-selected' : '') . '" ' . ($__vars['nav']['children'] ? 'data-has-children="true"' : '') . '>
		';
	if ($__vars['nav']['href']) {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link ' . ($__vars['nav']['children'] ? 'p-navEl-link--splitMenu' : ''),
			'shortcut' => ($__vars['nav']['children'] ? false : $__vars['shortcut']),
		), $__vars) . '

			';
		if ($__vars['nav']['children']) {
			$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
				data-xf-click="menu"
				data-menu-pos-ref="< .p-navEl"
				class="p-navEl-splitTrigger"
				role="button"
				tabindex="0"
				aria-label="' . $__templater->filter('Expandir', array(array('for_attr', array()),), true) . '"
				aria-expanded="false"
				aria-haspopup="true"></a>';
		}
		$__finalCompiled .= '

		';
	} else if ($__vars['nav']['children']) {
		$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
			data-xf-click="menu"
			data-menu-pos-ref="< .p-navEl"
			class="p-navEl-linkHolder"
			role="button"
			tabindex="0"
			aria-expanded="false"
			aria-haspopup="true">
			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link p-navEl-link--menuTrigger',
		), $__vars) . '
		</a>

		';
	} else {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link',
			'shortcut' => $__vars['shortcut'],
		), $__vars) . '

		';
	}
	$__finalCompiled .= '
		';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
			<div class="menu menu--structural" data-menu="menu" aria-hidden="true">
				<div class="menu-content">
					';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
						' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
';
	return $__finalCompiled;
},
'nav_link' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'class' => '',
		'titleHtml' => '',
		'shortcut' => false,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__vars['tag'] = ($__vars['nav']['href'] ? 'a' : 'span');
	$__finalCompiled .= '
	<' . $__templater->escape($__vars['tag']) . ' ' . ($__vars['nav']['href'] ? (('href="' . $__templater->escape($__vars['nav']['href'])) . '"') : '') . '
		class="' . $__templater->func('trim', array($__vars['class'], ), true) . ' ' . $__templater->escape($__vars['nav']['attributes']['class']) . '"
		' . $__templater->func('attributes', array($__vars['nav']['attributes'], array('class', ), ), true) . '
		' . (($__vars['shortcut'] !== false) ? (('data-xf-key="' . $__templater->escape($__vars['shortcut'])) . '"') : '') . '
		data-nav-id="' . $__templater->escape($__vars['navId']) . '">';
	if ($__vars['nav']['icon']) {
		$__finalCompiled .= $__templater->fontAwesome($__templater->escape($__vars['nav']['icon']), array(
		)) . ' ';
	}
	$__finalCompiled .= ($__vars['titleHtml'] ? $__templater->filter($__vars['titleHtml'], array(array('raw', array()),), true) : $__templater->escape($__vars['nav']['title']));
	if ($__vars['nav']['counter']) {
		$__finalCompiled .= ' <span class="badge badge--highlighted">' . $__templater->filter($__vars['nav']['counter'], array(array('number', array()),), true) . '</span>';
	}
	$__finalCompiled .= '</' . $__templater->escape($__vars['tag']) . '>
';
	return $__finalCompiled;
},
'nav_menu_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'depth' => '0',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . $__templater->callMacro(null, 'nav_link', array(
		'navId' => $__vars['navId'],
		'nav' => $__vars['nav'],
		'class' => 'menu-linkRow u-indentDepth' . $__vars['depth'] . ' js-offCanvasCopy',
	), $__vars) . '
	';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
		';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
			' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
					'depth' => ($__vars['depth'] + 1),
				), $__vars) . '
		';
			}
		}
		$__finalCompiled .= '
		';
		if ($__vars['depth'] == 0) {
			$__finalCompiled .= '
			<hr class="menu-separator" />
		';
		}
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'breadcrumbs' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'breadcrumbs' => '!',
		'navTree' => '!',
		'selectedNavEntry' => null,
		'variant' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			';
	$__vars['position'] = 0;
	$__compilerTemp1 .= '

			';
	$__vars['rootBreadcrumb'] = $__vars['navTree'][$__vars['xf']['options']['rootBreadcrumb']];
	$__compilerTemp1 .= '
			';
	if ($__vars['rootBreadcrumb'] AND ($__vars['rootBreadcrumb']['href'] != $__vars['xf']['uri'])) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['rootBreadcrumb']['href'],
			'value' => $__vars['rootBreadcrumb']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '

			';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['uri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumb']['href'])))) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			';
	if ($__templater->isTraversable($__vars['breadcrumbs'])) {
		foreach ($__vars['breadcrumbs'] AS $__vars['breadcrumb']) {
			if ($__vars['breadcrumb']['href'] != $__vars['xf']['uri']) {
				$__compilerTemp1 .= '
				';
				$__vars['position'] = ($__vars['position'] + 1);
				$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
					'position' => $__vars['position'],
					'href' => $__vars['breadcrumb']['href'],
					'value' => $__vars['breadcrumb']['value'],
				), $__vars) . '
			';
			}
		}
	}
	$__compilerTemp1 .= '

		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		<ul class="p-breadcrumbs ' . ($__vars['variant'] ? ('p-breadcrumbs--' . $__templater->escape($__vars['variant'])) : '') . '"
			itemscope itemtype="https://schema.org/BreadcrumbList">
		' . $__compilerTemp1 . '
		</ul>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'crumb' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'href' => '!',
		'value' => '!',
		'position' => 0,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<a href="' . $__templater->escape($__vars['href']) . '" itemprop="item">
			<span itemprop="name">' . $__templater->escape($__vars['value']) . '</span>
		</a>
		';
	if ($__vars['position']) {
		$__finalCompiled .= '<meta itemprop="position" content="' . $__templater->escape($__vars['position']) . '" />';
	}
	$__finalCompiled .= '
	</li>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<!DOCTYPE html>
<html id="XF" lang="' . $__templater->escape($__vars['xf']['language']['language_code']) . '" dir="' . $__templater->escape($__vars['xf']['language']['text_direction']) . '"
	data-app="public"
	data-template="' . $__templater->escape($__vars['template']) . '"
	data-container-key="' . $__templater->escape($__vars['containerKey']) . '"
	data-content-key="' . $__templater->escape($__vars['contentKey']) . '"
	data-logged-in="' . ($__vars['xf']['visitor']['user_id'] ? 'true' : 'false') . '"
	data-cookie-prefix="' . $__templater->escape($__vars['xf']['cookie']['prefix']) . '"
	data-csrf="' . $__templater->filter($__templater->func('csrf_token', array(), false), array(array('escape', array('js', )),), true) . '"
	class="has-no-js ' . ($__vars['template'] ? ('template-' . $__templater->escape($__vars['template'])) : '') . ' page_' . $__templater->escape($__vars['pageMode']) . ' page_' . $__templater->escape($__vars['containerKey']) . ' ' . $__templater->includeTemplate('nl_body_classes', $__vars) . '"
	' . ($__vars['xf']['runJobs'] ? ' data-run-jobs=""' : '') . '>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

	';
	$__vars['siteName'] = $__vars['xf']['options']['boardTitle'];
	$__finalCompiled .= '
	';
	$__vars['h1'] = $__templater->preEscaped($__templater->func('page_h1', array($__vars['siteName'])));
	$__finalCompiled .= '
	';
	$__vars['description'] = $__templater->preEscaped($__templater->func('page_description'));
	$__finalCompiled .= '

	<title>' . $__templater->func('page_title', array('%s | %s', $__vars['xf']['options']['boardTitle'], $__vars['pageNumber'])) . '</title>

	';
	if ($__templater->isTraversable($__vars['head'])) {
		foreach ($__vars['head'] AS $__vars['headTag']) {
			$__finalCompiled .= '
		' . $__templater->escape($__vars['headTag']) . '
	';
		}
	}
	$__finalCompiled .= '

	';
	if ((!$__vars['head']['meta_site_name']) AND !$__templater->test($__vars['siteName'], 'empty', array())) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'site_name', array(
			'siteName' => $__vars['siteName'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_type']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'type', array(
			'type' => 'website',
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_title']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'title', array(
			'title' => ($__templater->func('page_title', array(), false) ?: $__vars['siteName']),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_description']) AND (!$__templater->test($__vars['description'], 'empty', array()) AND $__vars['pageDescriptionMeta'])) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'description', array(
			'description' => $__vars['description'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_share_url']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'share_url', array(
			'shareUrl' => $__vars['xf']['fullUri'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_image_url']) AND $__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'image_url', array(
			'imageUrl' => $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), false),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '

	';
	if ($__templater->func('property', array('nlGoogleFonts', ), false) != null) {
		$__finalCompiled .= '
		' . $__templater->func('property', array('nlGoogleFonts', ), true) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['bgColor'] OR $__vars['bgImage']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('bodytag_macros', 'page_inline_styles', array(
			'bgColor' => $__vars['bgColor'],
			'bgImage' => $__vars['bgImage'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
	';
	if ($__templater->func('property', array('metaThemeColor', ), false)) {
		$__finalCompiled .= '
		<meta name="theme-color" content="' . $__templater->func('parse_less_color', array($__templater->func('property', array('metaThemeColor', ), false), ), true) . '" />
	';
	}
	$__finalCompiled .= '

	' . $__templater->callMacro('helper_js_global', 'head', array(
		'app' => 'public',
	), $__vars) . '

	';
	if ($__templater->func('property', array('publicFaviconUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="icon" type="image/png" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicFaviconUrl', ), false), true, ), true) . '" sizes="32x32" />
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="apple-touch-icon" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), true) . '" />
	';
	}
	$__finalCompiled .= '
	' . $__templater->includeTemplate('google_analytics', $__vars) . '
</head>
<body data-template="' . $__templater->escape($__vars['template']) . '">

<div class="p-pageWrapper" id="top">

';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
				';
	if ($__vars['xf']['visitor']['is_moderator'] AND $__vars['xf']['session']['unapprovedCounts']['total']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('link', array('approval-queue', ), true) . '" class="p-staffBar-link badgeContainer badgeContainer--highlighted" data-badge="' . $__templater->filter($__vars['xf']['session']['unapprovedCounts']['total'], array(array('number', array()),), true) . '">
						' . 'Fila de aprovação' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_moderator'] AND ((!$__vars['xf']['options']['reportIntoForumId']) AND $__vars['xf']['session']['reportCounts']['total'])) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('link', array('reports', ), true) . '"
						class="p-staffBar-link badgeContainer badgeContainer--visible ' . ((($__vars['xf']['session']['reportCounts']['total'] AND ($__vars['xf']['session']['reportCounts']['lastBuilt'] > $__vars['xf']['session']['reportLastRead'])) OR $__vars['xf']['session']['reportCounts']['assigned']) ? ' badgeContainer--highlighted' : '') . '"
						data-badge="' . ($__vars['xf']['session']['reportCounts']['assigned'] ? (($__templater->filter($__vars['xf']['session']['reportCounts']['assigned'], array(array('number', array()),), true) . ' / ') . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) : $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) . '"
						title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->func('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">
						' . 'Relatórios' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
							' . '
							';
	if ($__vars['xf']['visitor']['is_moderator']) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->func('link', array('approval-queue', ), true) . '" class="menu-linkRow">' . 'Fila de aprovação' . '</a>
							';
	}
	$__compilerTemp2 .= '
							';
	if ($__vars['xf']['visitor']['is_moderator'] AND (!$__vars['xf']['options']['reportIntoForumId'])) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->func('link', array('reports', ), true) . '" class="menu-linkRow" title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->func('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">' . 'Relatórios' . '</a>
							';
	}
	$__compilerTemp2 .= '
							' . '
							';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
					<a class="p-staffBar-link menuTrigger" data-xf-click="menu" data-xf-key="alt+m" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">' . 'Moderador' . '</a>
					<div class="menu" data-menu="menu" aria-hidden="true">
						<div class="menu-content">
							<h4 class="menu-header">' . 'Ferramentas de moderação' . '</h4>
							' . $__compilerTemp2 . '
						</div>
					</div>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_admin']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('base_url', array('admin.php', ), true) . '" class="p-staffBar-link" target="_blank">' . 'Administrador' . '</a>
				';
	}
	$__compilerTemp1 .= '
			';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="p-staffBar">
		<div class="p-staffBar-inner hScroller" data-xf-init="h-scroller">
			<div class="hScroller-scroll">
			' . $__compilerTemp1 . '
			</div>
		</div>
	</div>
';
	}
	$__finalCompiled .= '

<div class="headerProxy"></div>
<header class="p-header" id="header">
	<div class="p-header-inner">
		<div class="p-header-content">

			<div class="p-header-logo p-header-logo--image ';
	if ($__templater->func('property', array('nlLogoPosition', ), false) == 'center') {
		$__finalCompiled .= 'p-header-logo--center';
	}
	$__finalCompiled .= '">
				<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
					<img src="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '"
						' . ($__templater->func('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
				</a>
			</div>

			' . $__templater->callAdsMacro('container_header', array(), $__vars) . '
		</div>
	</div>
</header>

';
	$__compilerTemp3 = '';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['navTree'])) {
		foreach ($__vars['navTree'] AS $__vars['navSection'] => $__vars['navEntry']) {
			if (($__vars['navSection'] != $__vars['xf']['app']['defaultNavigationId'])) {
				$__vars['i']++;
				$__compilerTemp3 .= '
						<li>
							' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navSection'],
					'nav' => $__vars['navEntry'],
					'selected' => ($__vars['navSection'] == $__vars['pageSection']),
					'shortcut' => $__vars['i'],
				), $__vars) . '
						</li>
					';
			}
		}
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['visitor']['user_id']) {
		$__compilerTemp4 .= '
						';
		if (($__vars['xf']['visitor']['user_state'] == 'rejected') OR ($__vars['xf']['visitor']['user_state'] == 'disabled')) {
			$__compilerTemp4 .= '
							<a href="' . $__templater->func('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user">
								' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>

							<a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '" class="p-navgroup-link">
								<span class="p-navgroup-linkText">' . 'Sair' . '</span>
							</a>
						';
		} else {
			$__compilerTemp4 .= '
							<a href="' . $__templater->func('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('m', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-expanded="false"
								aria-haspopup="true">
								' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>
							<div class="menu menu--structural menu--wide menu--account" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('account/visitor-menu', ), true) . '"
								data-load-target=".js-visitorMenuBody">
								<div class="menu-content js-visitorMenuBody">
									<div class="menu-row">
										' . 'Carregando' . $__vars['xf']['language']['ellipsis'] . '
									</div>
								</div>
							</div>

							<a href="' . $__templater->func('link', array('conversations', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--conversations js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter(',', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Inbox', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('conversations/popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-convMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Conversas' . '</h3>
									<div class="js-convMenuBody">
										<div class="menu-row">' . 'Carregando' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->func('link', array('conversations', ), true) . '">' . 'Mostrar todos' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										';
			if ($__templater->method($__vars['xf']['visitor'], 'canStartConversation', array())) {
				$__compilerTemp4 .= '
											<span class="menu-footer-opposite">
												<a href="' . $__templater->func('link', array('conversations/add', ), true) . '">' . 'Iniciar uma nova conversa' . '</a>
											</span>
										';
			}
			$__compilerTemp4 .= '
									</div>
								</div>
							</div>

							<a href="' . $__templater->func('link', array('account/alerts', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Alertas', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('account/alerts-popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-alertsMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Alertas' . '</h3>
									<div class="js-alertsMenuBody">
										<div class="menu-row">' . 'Carregando' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->func('link', array('account/alerts', ), true) . '">' . 'Mostrar todos' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										<span class="menu-footer-opposite">
											<a href="' . $__templater->func('link', array('account/preferences', ), true) . '">' . 'Preferências' . '</a>
										</span>
									</div>
								</div>
							</div>
						';
		}
		$__compilerTemp4 .= '
					';
	} else {
		$__compilerTemp4 .= '
						<a href="' . $__templater->func('link', array('login', ), true) . '" class="p-navgroup-link p-navgroup-link--textual p-navgroup-link--logIn"
							data-xf-click="overlay" data-follow-redirects="on">
							<span class="p-navgroup-linkText">' . 'Entrar' . '</span>
						</a>
						';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__compilerTemp4 .= '
							<a href="' . $__templater->func('link', array('register', ), true) . '" class="p-navgroup-link p-navgroup-link--textual p-navgroup-link--register"
								data-xf-click="overlay" data-follow-redirects="on">
								<span class="p-navgroup-linkText">' . 'Registrar-se' . '</span>
							</a>
						';
		}
		$__compilerTemp4 .= '
					';
	}
	$__compilerTemp5 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
		$__compilerTemp5 .= '
						<a href="' . $__templater->func('link', array('search', ), true) . '"
							class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search"
							data-xf-click="menu"
							data-xf-key="' . $__templater->filter('/', array(array('for_attr', array()),), true) . '"
							aria-label="' . $__templater->filter('Pesquisar', array(array('for_attr', array()),), true) . '"
							aria-expanded="false"
							aria-haspopup="true"
							title="' . $__templater->filter('Pesquisar', array(array('for_attr', array()),), true) . '">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Pesquisar' . '</span>
						</a>
						<div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
							<form action="' . $__templater->func('link', array('search/search', ), true) . '" method="post"
								class="menu-content"
								data-xf-init="quick-search">

								<h3 class="menu-header">' . 'Pesquisar' . '</h3>
								' . '
								<div class="menu-row">
									';
		if ($__vars['searchConstraints']) {
			$__compilerTemp5 .= '
										<div class="inputGroup inputGroup--joined">
											' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Pesquisar' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Pesquisar',
				'data-menu-autofocus' => 'true',
			)) . '
											';
			$__compilerTemp6 = array(array(
				'value' => '',
				'label' => 'Todo o fórum',
				'_type' => 'option',
			));
			if ($__templater->isTraversable($__vars['searchConstraints'])) {
				foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
					$__compilerTemp6[] = array(
						'value' => $__templater->filter($__vars['constraint'], array(array('json', array()),), false),
						'label' => $__templater->escape($__vars['constraintName']),
						'_type' => 'option',
					);
				}
			}
			$__compilerTemp5 .= $__templater->formSelect(array(
				'name' => 'constraints',
				'class' => 'js-quickSearch-constraint',
				'aria-label' => 'Search within',
			), $__compilerTemp6) . '
										</div>
									';
		} else {
			$__compilerTemp5 .= '
										' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Pesquisar' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Pesquisar',
				'data-menu-autofocus' => 'true',
			)) . '
									';
		}
		$__compilerTemp5 .= '
								</div>

								' . '
								<div class="menu-row">
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'c[title_only]',
			'label' => 'Pesquisar somente títulos',
			'_type' => 'option',
		))) . '
								</div>
								' . '
								<div class="menu-row">
									<div class="inputGroup">
										<span class="inputGroup-text" id="ctrl_search_menu_by_member">' . 'Por' . $__vars['xf']['language']['label_separator'] . '</span>
										<input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Membro', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
									</div>
								</div>
								<div class="menu-footer">
									<span class="menu-footer-controls">
										' . $__templater->button('', array(
			'type' => 'submit',
			'class' => 'button--primary',
			'icon' => 'search',
		), '', array(
		)) . '
										' . $__templater->button('Pesquisa avançada' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->func('link', array('search', ), false),
		), '', array(
		)) . '
									</span>
								</div>

								' . $__templater->func('csrf_input') . '
							</form>
						</div>
					';
	}
	$__vars['navHtml'] = $__templater->preEscaped('
	<nav class="p-nav">
		<div class="p-nav-inner">
			<a class="p-nav-menuTrigger" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0">
				<i aria-hidden="true"></i>
				<span class="p-nav-menuText">' . 'Menu' . '</span>
			</a>

			<div class="p-nav-smallLogo">
				<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
					<img src="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '"
					' . ($__templater->func('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
				</a>
			</div>

			<div class="p-nav-scroller hScroller" data-xf-init="h-scroller" data-auto-scroll=".p-navEl.is-selected">
				<div class="hScroller-scroll">
					<ul class="p-nav-list js-offCanvasNavSource">
					' . $__compilerTemp3 . '
					</ul>
				</div>
			</div>

			<div class="p-nav-opposite">
				<div class="p-navgroup p-account ' . ($__vars['xf']['visitor']['user_id'] ? 'p-navgroup--member' : 'p-navgroup--guest') . '">
					' . $__compilerTemp4 . '
				</div>

				<div class="p-navgroup p-discovery' . ((!$__templater->method($__vars['xf']['visitor'], 'canSearch', array())) ? ' p-discovery--noSearch' : '') . '">
					<a href="' . $__templater->func('link', array('whats-new', ), true) . '"
						class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--whatsnew"
						aria-label="' . $__templater->filter('O que há de novo', array(array('for_attr', array()),), true) . '"
						title="' . $__templater->filter('O que há de novo', array(array('for_attr', array()),), true) . '">
						<i aria-hidden="true"></i>
						<span class="p-navgroup-linkText">' . 'O que há de novo' . '</span>
					</a>

					' . $__compilerTemp5 . '
				</div>
			</div>
		</div>
	</nav>
');
	$__finalCompiled .= '
';
	$__compilerTemp7 = '';
	if (!$__templater->test($__vars['selectedNavChildren'], 'empty', array())) {
		$__compilerTemp7 .= '
		<div class="p-sectionLinks">
			<div class="p-sectionLinks-inner hScroller" data-xf-init="h-scroller">
				<div class="hScroller-scroll">
					<ul class="p-sectionLinks-list">
					';
		$__vars['i'] = 0;
		if ($__templater->isTraversable($__vars['selectedNavChildren'])) {
			foreach ($__vars['selectedNavChildren'] AS $__vars['navId'] => $__vars['navEntry']) {
				$__vars['i']++;
				$__compilerTemp7 .= '
						<li>
							' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navId'],
					'nav' => $__vars['navEntry'],
					'shortcut' => 'alt+' . $__vars['i'],
				), $__vars) . '
						</li>
					';
			}
		}
		$__compilerTemp7 .= '
					</ul>
				</div>
			</div>
		</div>
	';
	} else if ($__vars['selectedNavEntry']) {
		$__compilerTemp7 .= '
		<div class="p-sectionLinks p-sectionLinks--empty"></div>
	';
	}
	$__vars['subNavHtml'] = $__templater->preEscaped('
	' . $__compilerTemp7 . '
');
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('publicNavSticky', ), false) == 'primary') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--primary p-navController" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
	</div>
	' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
';
	} else if ($__templater->func('property', array('publicNavSticky', ), false) == 'all') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--all p-navController" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
		' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="p-navController">
	' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
	' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
	</div>
';
	}
	$__finalCompiled .= '

<div class="offCanvasMenu offCanvasMenu--nav js-headerOffCanvasMenu" data-menu="menu" aria-hidden="true" data-ocm-builder="navigation">
	<div class="offCanvasMenu-backdrop" data-menu-close="true"></div>
	<div class="offCanvasMenu-content">
		<div class="offCanvasMenu-header">
			' . 'Menu' . '
			<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . $__templater->filter('Fechar', array(array('for_attr', array()),), true) . '"></a>
		</div>
		';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			<div class="p-offCanvasAccountLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->func('link', array('account', ), true) . '" class="offCanvasMenu-link">
						' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
		))) . '
						' . $__templater->escape($__vars['xf']['visitor']['username']) . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
			</div>
		';
	} else {
		$__finalCompiled .= '
			<div class="p-offCanvasRegisterLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->func('link', array('login', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
						' . 'Entrar' . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
				';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
					<div class="offCanvasMenu-linkHolder">
						<a href="' . $__templater->func('link', array('register', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
							' . 'Registrar-se' . '
						</a>
					</div>
					<hr class="offCanvasMenu-separator" />
				';
		}
		$__finalCompiled .= '
			</div>
		';
	}
	$__finalCompiled .= '
		<div class="js-offCanvasNavTarget"></div>
	</div>
</div>

<div class="p-body">
	<div class="page_top">
	<div class="page_bot">
	<div class="p-body-inner">
		<!--XF:EXTRA_OUTPUT-->

		';
	if ($__vars['notices']['block']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'block',
			'notices' => $__vars['notices']['block'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		';
	if ($__vars['notices']['scrolling']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'scrolling',
			'notices' => $__vars['notices']['scrolling'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		' . $__templater->callAdsMacro('container_breadcrumb_top_above', array(), $__vars) . '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
	), $__vars) . '
		' . $__templater->callAdsMacro('container_breadcrumb_top_below', array(), $__vars) . '

		' . $__templater->callMacro('browser_warning_macros', 'javascript', array(), $__vars) . '
		' . $__templater->callMacro('browser_warning_macros', 'browser', array(), $__vars) . '

		';
	$__compilerTemp8 = '';
	$__compilerTemp8 .= '
				';
	$__compilerTemp9 = '';
	$__compilerTemp9 .= '
						';
	if (!$__vars['noH1']) {
		$__compilerTemp9 .= '
							<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
						';
	}
	$__compilerTemp9 .= '
						';
	$__compilerTemp10 = '';
	$__compilerTemp10 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
	if (strlen(trim($__compilerTemp10)) > 0) {
		$__compilerTemp9 .= '
							<div class="p-title-pageAction">' . $__compilerTemp10 . '</div>
						';
	}
	$__compilerTemp9 .= '
					';
	if (strlen(trim($__compilerTemp9)) > 0) {
		$__compilerTemp8 .= '
					<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
					' . $__compilerTemp9 . '
					</div>
				';
	}
	$__compilerTemp8 .= '

				';
	if (!$__templater->test($__vars['description'], 'empty', array())) {
		$__compilerTemp8 .= '
					<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
				';
	}
	$__compilerTemp8 .= '
			';
	if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
		$__finalCompiled .= '
			<div class="p-body-header">
				' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
			</div>
		';
	} else if (strlen(trim($__compilerTemp8)) > 0) {
		$__finalCompiled .= '
			<div class="p-body-header">
			' . $__compilerTemp8 . '
			</div>
		';
	}
	$__finalCompiled .= '

		<div class="p-body-main ' . ($__vars['sidebar'] ? 'p-body-main--withSidebar' : '') . ' ' . ($__vars['sideNav'] ? 'p-body-main--withSideNav' : '') . '">
			';
	if ($__vars['sideNav']) {
		$__finalCompiled .= '
				<div class="p-body-sideNav">
					<div class="p-body-sideNavTrigger">
						' . $__templater->button('
							' . ($__templater->escape($__vars['sideNavTitle']) ?: 'Navegação') . '
						', array(
			'class' => 'button--link',
			'data-xf-click' => 'off-canvas',
			'data-menu' => '#js-SideNavOcm',
		), '', array(
		)) . '
					</div>
					<div class="p-body-sideNavInner" data-ocm-class="offCanvasMenu offCanvasMenu--blocks" id="js-SideNavOcm" data-ocm-builder="sideNav">
						<div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
						<div data-ocm-class="offCanvasMenu-content">
							<div class="p-body-sideNavContent">
								' . $__templater->callAdsMacro('container_sidenav_above', array(), $__vars) . '
								';
		if ($__templater->isTraversable($__vars['sideNav'])) {
			foreach ($__vars['sideNav'] AS $__vars['sideNavHtml']) {
				$__finalCompiled .= '
									' . $__templater->escape($__vars['sideNavHtml']) . '
								';
			}
		}
		$__finalCompiled .= '
								' . $__templater->callAdsMacro('container_sidenav_below', array(), $__vars) . '
							</div>
						</div>
					</div>
				</div>
			';
	}
	$__finalCompiled .= '

			<div class="p-body-content">
				' . $__templater->callAdsMacro('container_content_above', array(), $__vars) . '
				<div class="p-body-pageContent">' . $__templater->filter($__vars['content'], array(array('raw', array()),), true) . '</div>
				' . $__templater->callAdsMacro('container_content_below', array(), $__vars) . '
			</div>

			';
	if ($__vars['sidebar']) {
		$__finalCompiled .= '
				<div class="p-body-sidebar">
					' . $__templater->callAdsMacro('container_sidebar_above', array(), $__vars) . '
					';
		if ($__templater->isTraversable($__vars['sidebar'])) {
			foreach ($__vars['sidebar'] AS $__vars['sidebarHtml']) {
				$__finalCompiled .= '
						' . $__templater->escape($__vars['sidebarHtml']) . '
					';
			}
		}
		$__finalCompiled .= '
					' . $__templater->callAdsMacro('container_sidebar_below', array(), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '
		</div>

		' . $__templater->callAdsMacro('container_breadcrumb_bottom_above', array(), $__vars) . '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
		'variant' => 'bottom',
	), $__vars) . '
		' . $__templater->callAdsMacro('container_breadcrumb_bottom_below', array(), $__vars) . '	
	</div>
	</div> <!-- end page bottom -->
	</div> <!-- end page top -->
</div>

<footer class="p-footer" id="footer">
	<div class="p-footer-wrapper">

	';
	$__compilerTemp11 = '';
	$__compilerTemp12 = '';
	$__compilerTemp12 .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
		$__compilerTemp12 .= '
							<li><a href="' . $__templater->func('link', array('misc/style', ), true) . '" data-xf-click="overlay"
								data-xf-init="tooltip" title="' . $__templater->filter('Seletor de estilos', array(array('for_attr', array()),), true) . '" rel="nofollow">
								' . $__templater->fontAwesome('fa-paint-brush', array(
		)) . ' ' . $__templater->escape($__vars['xf']['style']['title']) . '
							</a></li>
						';
	}
	$__compilerTemp12 .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
		$__compilerTemp12 .= '
							<li><a href="' . $__templater->func('link', array('misc/language', ), true) . '" data-xf-click="overlay"
								data-xf-init="tooltip" title="' . $__templater->filter('Seletor de idioma', array(array('for_attr', array()),), true) . '" rel="nofollow">
								' . $__templater->fontAwesome('fa-globe', array(
		)) . ' ' . $__templater->escape($__vars['xf']['language']['title']) . '</a></li>
						';
	}
	$__compilerTemp12 .= '
					';
	if (strlen(trim($__compilerTemp12)) > 0) {
		$__compilerTemp11 .= '
				<div class="p-footer-row-main">
					<ul class="p-footer-linkList">
					' . $__compilerTemp12 . '
					</ul>
				</div>
			';
	}
	$__compilerTemp13 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
		$__compilerTemp13 .= '
						';
		if ($__vars['xf']['contactUrl']) {
			$__compilerTemp13 .= '
							<li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] OR ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contato' . '</a></li>
						';
		}
		$__compilerTemp13 .= '
					';
	}
	$__compilerTemp14 = '';
	if ($__vars['xf']['tosUrl']) {
		$__compilerTemp14 .= '
						<li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Termos e regras' . '</a></li>
					';
	}
	$__compilerTemp15 = '';
	if ($__vars['xf']['privacyPolicyUrl']) {
		$__compilerTemp15 .= '
						<li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
					';
	}
	$__compilerTemp16 = '';
	if ($__vars['xf']['helpPageCount']) {
		$__compilerTemp16 .= '
						<li><a href="' . $__templater->func('link', array('help', ), true) . '">' . 'Ajuda' . '</a></li>
					';
	}
	$__compilerTemp17 = '';
	if ($__vars['xf']['homePageUrl']) {
		$__compilerTemp17 .= '
						<li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Inicio' . '</a></li>
					';
	}
	$__vars['footerLinksHtml'] = $__templater->preEscaped('
		<div class="p-footer-row p-footer-links">
			<div class="p-footer-inner">
			' . $__compilerTemp11 . '
			<div class="p-footer-row-opposite">
				<ul class="p-footer-linkList">
					' . $__compilerTemp13 . '

					' . $__compilerTemp14 . '

					' . $__compilerTemp15 . '

					' . $__compilerTemp16 . '

					' . $__compilerTemp17 . '

					<li><a href="' . $__templater->func('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
	)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
				</ul>
			</div>
			</div>
		</div>
	');
	$__finalCompiled .= '

	';
	$__compilerTemp18 = '';
	$__compilerTemp19 = '';
	$__compilerTemp19 .= '
				' . $__templater->func('copyright') . '
				' . '' . '
				' . $__templater->includeTemplate('nl_footer_copyright', $__vars) . '
			';
	if (strlen(trim($__compilerTemp19)) > 0) {
		$__compilerTemp18 .= '
			<div class="p-footer-row p-footer-copyright">
			<div class="p-footer-inner">
			' . $__compilerTemp19 . '
			</div>
			</div>
		';
	}
	$__vars['footerCopyrightHtml'] = $__templater->preEscaped('
		' . $__compilerTemp18 . '
	');
	$__finalCompiled .= '
	
	';
	$__compilerTemp20 = '';
	$__compilerTemp21 = '';
	$__compilerTemp21 .= '
				' . $__templater->callMacro('debug_macros', 'debug', array(
		'controller' => $__vars['controller'],
		'action' => $__vars['actionMethod'],
		'template' => $__vars['template'],
	), $__vars) . '
			';
	if (strlen(trim($__compilerTemp21)) > 0) {
		$__compilerTemp20 .= '
			<div class="p-footer-row p-footer-debug">
			<div class="p-footer-inner">
			' . $__compilerTemp21 . '
			</div>
			</div>
		';
	}
	$__vars['footerDebugHtml'] = $__templater->preEscaped('
		' . $__compilerTemp20 . '
	');
	$__finalCompiled .= '

		' . $__templater->filter($__vars['footerLinksHtml'], array(array('raw', array()),), true) . '

		' . $__templater->filter($__vars['footerCopyrightHtml'], array(array('raw', array()),), true) . '

		' . $__templater->filter($__vars['footerDebugHtml'], array(array('raw', array()),), true) . '

	</div>
</footer>

</div> <!-- closing p-pageWrapper -->

<div class="u-bottomFixer js-bottomFixTarget">
	';
	if ($__vars['notices']['floating']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'floating',
			'notices' => $__vars['notices']['floating'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['notices']['bottom_fixer']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'bottom_fixer',
			'notices' => $__vars['notices']['bottom_fixer'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
</div>

';
	if ($__templater->func('property', array('scrollJumpButtons', ), false)) {
		$__finalCompiled .= '
	<div class="u-scrollButtons js-scrollButtons" data-trigger-type="' . $__templater->func('property', array('scrollJumpButtons', ), true) . '">
		' . $__templater->button($__templater->fontAwesome('fa-arrow-up', array(
		)) . '<span class="u-srOnly">' . 'Topo' . '</span>', array(
			'href' => '#top',
			'class' => 'button--scroll',
			'data-xf-click' => 'scroll-to',
		), '', array(
		)) . '
		';
		if ($__templater->func('property', array('scrollJumpButtons', ), false) != 'up') {
			$__finalCompiled .= '
			' . $__templater->button($__templater->fontAwesome('fa-arrow-down', array(
			)) . '<span class="u-srOnly">' . 'Inferior' . '</span>', array(
				'href' => '#footer',
				'class' => 'button--scroll',
				'data-xf-click' => 'scroll-to',
			), '', array(
			)) . '
		';
		}
		$__finalCompiled .= '
	</div>
';
	}
	$__finalCompiled .= '

' . $__templater->callMacro('helper_js_global', 'body', array(
		'app' => 'public',
		'jsState' => $__vars['jsState'],
	), $__vars) . '

';
	if ($__templater->func('count', array($__vars['xf']['reactionsActive'], ), false) > 1) {
		$__finalCompiled .= '
	<script type="text/template" id="xfReactTooltipTemplate">
		<div class="tooltip-content-inner">
			<div class="reactTooltip">
				';
		if ($__templater->isTraversable($__vars['xf']['reactionsActive'])) {
			foreach ($__vars['xf']['reactionsActive'] AS $__vars['reactionId'] => $__vars['reaction']) {
				$__finalCompiled .= '
					' . $__templater->func('reaction', array(array(
					'id' => $__vars['reactionId'],
					'tooltip' => 'true',
				))) . '
				';
			}
		}
		$__finalCompiled .= '
			</div>
		</div>
	</script>
';
	}
	$__finalCompiled .= '

' . $__templater->filter($__vars['ldJsonHtml'], array(array('raw', array()),), true) . '

</body>
</html>

' . '

' . '

' . '

' . '

';
	return $__finalCompiled;
});