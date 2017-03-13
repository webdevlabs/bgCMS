<?php
/**
 * Custom Sample mod
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2016 Simeon Lyubenov. All rights reserved.
 * @license NON-EXCLUSIVE LICENSE / Non-redistributable code
 * @note Web Development Labs reserves all intellectual property rights, including copyrights and trademark rights.
 */

namespace Modules\Sample\Models;
use System, Lang, DB;

class Admin extends System {

	/**
	 * Admin Menu Builder content
	 *
	 * @return array
	 */
public function admin_menu () {
	$admin_menu=array(
	'title'=>lang::$lang_vars['sample']['page_menu'],
	'links'=>'modules.php?mod=sample&file=anysamplecontroller',
	'priority'=>'5',
	'icon'=>'fa fa-sticky-note'
	);
	return $admin_menu;
}

}
?>