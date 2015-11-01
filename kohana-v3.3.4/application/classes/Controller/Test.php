<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {
	public function __construct(REQUEST $request, RESPONSE $response) {
		parent::__construct($request, $response);
		
		$this->player = Model::factory('Player');
	} // __construct
	
	public function action_index() {
//		$model = Model::factory('player');

		$data = $this->player->get_stuff();

		$this->response->body(var_dump($data));
	}
} // Controller_Test

