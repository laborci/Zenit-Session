<?php
namespace Zenit\Bundle\Session\Interfaces;

interface SessionEventInterface{
	public function set($event, $data = true);
	public function get($event);
}