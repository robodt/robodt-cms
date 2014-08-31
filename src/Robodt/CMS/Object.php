<?php

/**
 * Robodt - Component based CMS
 * @author      Zomnium
 * @link        http://www.zomnium.com
 * @copyright   2014 Zomnium, Tim van Bergenhenegouwen
 */

namespace Robodt\CMS;

interface Object
{
	private $data;

	public function __construct();

	public function render();

	public function get();

	public function set();
}
