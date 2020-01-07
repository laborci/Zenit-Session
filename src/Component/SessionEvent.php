<?php namespace Zenit\Bundle\Session\Component;


use Zenit\Bundle\Session\Interfaces\SessionEventInterface;
use Zenit\Core\ServiceManager\Component\Service;
use Zenit\Core\ServiceManager\Interfaces\SharedService;

class SessionEvent extends Session implements SharedService, SessionEventInterface{

	use Service;

	protected $events = [];

	public function set($event, $data = true){
		if(!is_array($this->events)) $this->events = [];
		if(!array_key_exists($event, $this->events))$this->events[$event] = $data;
		$this->flush();
	}

	public function get($event){
		if(!is_array($this->events)) $this->events = [];
		if(!count($this->events) || !array_key_exists($event, $this->events)) return false;
		$events = $this->events[$event];
		unset($this->events[$event]);
		$this->flush();
		return $events;
	}

}