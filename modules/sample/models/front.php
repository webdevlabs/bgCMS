<?php
/**
 * Custom Sample mod
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2017 Simeon Lyubenov. All rights reserved.
 */

namespace Modules\Sample\Models;
use System, Lang, DB;

class Front extends System {
  
	/**
	 * Fetch page database details
	 *
	 * @param string $colname column name
	 * @param string|int $id
	 * @param string $select_lang lang_name
	 * @return array
	 * @usage $page_data=$this->sample->fetch_page('`pages`.`pid`',$_GET['pid'])
	 * @usage $page_data=$this->sample->fetch_page('`uri`',$request[1]);
	 */
 function fetch_page ($colname,$id,$select_lang=false) {
			if (!$select_lang) { $select_lang=lang::$language; }
			$page_array=DB::row("SELECT * from `mod_pages` LEFT JOIN `mod_pages_text` USING (page_id)
				WHERE
					$colname=:id
					AND (`lang`='".lang::$default_lang."' OR `lang`='".$select_lang."')
					AND `mod_pages`.`active`='1'
				ORDER BY FIELD(lang,'".$select_lang."','".lang::$default_lang."') LIMIT 1",array(":id"=>$id));
		return $page_array;
 }

}
?>
