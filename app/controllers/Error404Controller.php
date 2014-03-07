<?php

class Error404Controller extends BaseController{

	public function get404()
	{

		return View::make('pages.404');
	}
}