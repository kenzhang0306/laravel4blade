<?php

class ProjectsController extends BaseController{

	public function getProjects()
	{

		return View::make('pages.projects');
	}

	public function getShow()
	{

		//$projects = Projects::paginate(10);
		//return View::make('pages.projects', array('projects' => $projects ));
	}


}