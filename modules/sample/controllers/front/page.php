<?php
/**
 * Mod Sample Front Page Controller
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2016 Simeon Lyubenov. All rights reserved.
 * @license NON-EXCLUSIVE LICENSE / Non-redistributable code
 * @note Web Development Labs reserves all intellectual property rights, including copyrights and trademark rights.
 * @URI(page/{page.uri})
 */

namespace Modules\Sample\Controllers\Front;
use System;

class Sample extends System {
	private $tpl_dir;

public function __construct($registry) {
	parent::__construct($registry);
	$this->tpl_dir = ROOT_DIR.'/modules/pages/views/front/'; // enable if you want tpl inside mod views
}

public function index () {
	$request=$this->url->getRequest();
	if (!$this->template->isCached($this->tpl_dir.'page.tpl')) {
		$page_array = $this->pages->fetch_page('uri',$request[1]);
		$this->template->assign('page',$page_array);
		$this->template->assign('title', $page_array["title"]);
	}
	$this->template->display($this->tpl_dir.'page.tpl');
}

}
?>