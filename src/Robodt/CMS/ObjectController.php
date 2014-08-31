<?php

/**
 * Robodt - Component based CMS
 * @author      Zomnium
 * @link        http://www.zomnium.com
 * @copyright   2014 Zomnium, Tim van Bergenhenegouwen
 */

namespace Robodt\CMS;

interface ObjectController
{
	public function __construct();

	public function create();

	public function save();

	public function get();

	public function find();

	public function delete();
}
