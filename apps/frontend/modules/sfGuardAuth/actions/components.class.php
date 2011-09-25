<?php

class sfGuardAuthComponents extends sfComponents{

	public function executeSignin(sfWebRequest $request){
		$this->form = new sfGuardFormSignin();
	}
}