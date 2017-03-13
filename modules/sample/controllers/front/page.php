<?php
/**
 * Mod Sample Front Page Controller
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2017 Simeon Lyubenov. All rights reserved.
 * @URI(page/{page.uri})
 */

namespace Modules\Sample\Controllers\Front;
use System;

class Page extends System {
	private $tpl_dir;

public function __construct($registry) {
	parent::__construct($registry);
	$this->tpl_dir = ROOT_DIR.'/modules/sample/views/front/'; // enable if you want tpl inside mod views
}

public function index () {
	$request=$this->url->getRequest();
	if (!$this->template->isCached($this->tpl_dir.'page.tpl')) {
		$page_array = $this->sample->fetch_page('uri',$request[1]);
		$this->template->assign('page',$page_array);
		$this->template->assign('title', $page_array["title"]);
	}
	$this->template->display($this->tpl_dir.'page.tpl');
}

}
