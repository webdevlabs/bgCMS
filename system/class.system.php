<?php
/**
 * System Registry Access Pool class
 * use magic methods to provide access to registry pool objects
 *
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2016 Simeon Lyubenov. All rights reserved.
 * @license NON-EXCLUSIVE LICENSE / Non-redistributable code
 * @note Web Development Labs reserves all intellectual property rights, including copyrights and trademark rights.
 */

abstract class System {
	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
		//		var_dump(get_class_methods($registry));
		//		var_dump(debug_backtrace());
	}

	public function __get($key) {
		return $this->registry->get($key);
	}

	public function __set($key, $value) {
		$this->registry->set($key, $value);
	}

}
