<?php

class TDLController extends BaseController {

	

	public function index()
	{
		$list_tache = ToDoList::where('est_effectue_tache','0')->
		get();
		$list_tacheE = ToDoList::where('est_effectue_tache','1')
		->get();
		return View::make('tdl.TDL',compact('list_tache'),compact('list_tacheE'));
	}

	public function getTDl()
	{
		$list_tache = ToDoList::where('est_effectue_tache','0')->
		get();
		$list_tacheE = ToDoList::where('est_effectue_tache','1')
		->get();
		return View::make('tdl.TDL',compact('list_tache'),compact('list_tacheE'));
	}
   
	public function postTDL()
	{


		if (Input::get('typeAction')==0 || Input::get('typeAction')==1) {
				$id = Input::get('item');
				$tache = ToDoList::findOrFail ($id);
		}
		if (Input::get('typeAction')==0)
		{
			$tache->mark(); 
	
		}
		if (Input::get('typeAction')==1) 
		{
			$tache->delete();
		}
		
		if (Input::get('typeAction')==2) 
		{
			 	$rules =array('tf_new_tache' => 'required|min:3|max:128');
			 	$validator =  Validator::make(Input::all(),$rules);
				if ($validator->fails())
				{
					return Redirect::route("home")->withErrors($validator);
				}
				else
				{
					$tache = new ToDoList;
					$tache->nom_tache=Input::get('tf_new_tache');
					$tache->save(); 
				}
				
		}
		return Redirect::route("home");

		
	}

}
