<?php
namespace Zenit\Bundle\Session\Interfaces;

interface SessionInterface{
	public function forget();
	public function flush();
}