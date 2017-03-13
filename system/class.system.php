<?php
/**
 * System Registry Pool Access class
 * use magic methods to provide access to registry pool objects
 *
 * @package bgCMS
 * @author Simeon Lyubenov (ShakE) <office@webdevlabs.com>
 * @link https://www.webdevlabs.com
 * @copyright Copyright (c) 2017 Simeon Lyubenov. All rights reserved.
  */

abstract class System {
	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function __get($key) {
		return $this->registry->get($key);
	}

	public function __set($key, $value) {
		$this->registry->set($key, $value);
	}

}
