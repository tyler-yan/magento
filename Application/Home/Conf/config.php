<?php
	return array(
		'URL_ROUTER_ON'   => true, //开启路由
		'URL_ROUTE_RULES' => array( //定义路由规则

		    'blog/:id\d'    => 'Blog/read',
		   	 'web/:id\d'	=> 'Web/read',
		),


	);
