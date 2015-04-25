<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function selectAction($param = null) {
		if(!$param)
			$param = 'index';
		return call_user_func(array($this, $param));
	}

  protected function reportJSONError($st) {
    return \Response::json(['error' => $st], 400);
  }
}
