<?php 
class ToDoList extends Eloquent
{
	protected $table = 'tache';

	public function mark()
	{
		$this->est_effectue_tache = $this->est_effectue_tache ? false : true;
		$this->save();

	}
} 