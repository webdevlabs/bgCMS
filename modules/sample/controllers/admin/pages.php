<?php
/**
 * Mod Sample Admin Pages Controller
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2017 Simeon Lyubenov. All rights reserved.
 */

namespace Modules\Sample\Controllers\Admin;
use System;
use Lang;
use DB;

class Sample extends System {
	private $tpl_dir;

public function __construct ($registry) {
	parent::__construct($registry);
	$this->tpl_dir=ROOT_DIR."/modules/sample/views/admin/";
	$this->template->assign('requri','modules.php?mod=sample&file=pages'); // used to compare url and set admin menu active style
	$this->template->assign('title',lang::$lang_vars['sample']['page_menu']);
}


}
