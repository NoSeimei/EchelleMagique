<?php
Class Login
{

private $IdLogin;
private $Login;
private $Mdp;


/**
 * Get the value of IdLogin
 */ 
public function getIdLogin()
{
return $this->IdLogin;
}

/**
 * Get the value of Login
 */ 
public function getLogin()
{
return $this->Login;
}

/**
 * Set the value of Login
 *
 * @return  self
 */ 
public function setLogin($Login)
{
$this->Login = $Login;

return $this;
}

/**
 * Get the value of Mdp
 */ 
public function getMdp()
{
return $this->Mdp;
}

/**
 * Set the value of Mdp
 *
 * @return  self
 */ 
public function setMdp($Mdp)
{
$this->Mdp = $Mdp;

return $this;
}
}
?>