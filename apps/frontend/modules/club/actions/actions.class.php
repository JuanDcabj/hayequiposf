<?php

/**
 * club actions.
 *
 * @package    hayequiposf
 * @subpackage club
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clubActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $user = $this->getUser();
    if (!$user->isAuthenticated())
    {
      return $this->redirect('@sf_guard_signin');
    }
    
    $this->ultimas= HistoriaTable::getUltimas();
   
    
  }
}
