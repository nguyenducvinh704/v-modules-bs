<?php
return [
	[
		'name' => 'dashboard',
		'priority' => 1,
		'title' => 'Dashboard',
		'url' => '/admin/dashboard',
		'icon' => 'fa fa-dashboard fa-fw',
	],
	[
		'name' => 'media',
		'priority' => 2,
		'title' => 'Media',
		'url' => '/admin/media',
		'icon' => 'fa fa-image fa-fw',
	],
    [
		'name' => 'blog',
		'priority' => 3,
		'title' => 'Blog',
		'url' => '/admin/blog',
		'icon' => 'fa fa-shield fa-fw',
		'sub' => [
			['priority' => 1, 'name' => ['posts'], 'title' => 'Posts', 'url' => '/admin/blog/posts'],
			['priority' => 2, 'name' => ['categories'], 'title' => 'Categories', 'url' => '/admin/blog/categories'],
			['priority' => 3, 'name' => ['tags'], 'title' => 'Tags', 'url' => '/admin/blog/tag'],
		]
	],
	[
		'name' => 'system',
		'priority' => 8,
		'title' => 'Administration',
		'url' => '/admin/system',
		'icon' => 'fa fa-user fa-fw',
		'sub' => [
			['priority' => 1, 'name' => ['users'], 'title' => 'Users', 'url' => '/admin/system/users'],
            ['priority' => 2, 'name' => ['roles'], 'title' => 'Roles and permissions', 'url' => '/admin/system/roles'],
		]
	],

	[
		'name' => ['settings.view'],
		'priority' => 99,
		'title' => 'Settings',
		'url' => '/admin/settings',
		'icon' => 'fa fa-cogs fa-fw',
		// 'sub' => [
		// 	['priority' => 5, 'name' => 'settings_general_access', 'title' => 'General', 'url' => '/admin/general'],
		// 	['priority' => 6, 'name' => 'settings_notice_access', 'title' => 'Notice - Maintenance', 'url' => '/admin/notice'],
		// 	['priority' => 7, 'name' => 'settings_seo_access', 'title' => 'SEO OnPage', 'url' => '/admin/seo'],
		// ]
	],
];
