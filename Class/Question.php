<?php
Class Question
{
private $IdQuestion;
private $Question;
private $Points;
private $IdQuestionnaire;

/**
 * Get the value of IdQuestion
 */ 
public function getIdQuestion()
{
return $this->IdQuestion;
}

/**
 * Set the value of IdQuestion
 *
 * @return  self
 */ 
public function setIdQuestion($IdQuestion)
{
$this->IdQuestion = $IdQuestion;

return $this;
}

/**
 * Get the value of Question
 */ 
public function getQuestion()
{
return $this->Question;
}

/**
 * Set the value of Question
 *
 * @return  self
 */ 
public function setQuestion($Question)
{
$this->Question = $Question;

return $this;
}

/**
 * Get the value of Points
 */ 
public function getPoints()
{
return $this->Points;
}

/**
 * Set the value of Points
 *
 * @return  self
 */ 
public function setPoints($Points)
{
$this->Points = $Points;

return $this;
}

/**
 * Get the value of IdQuestionnaire
 */ 
public function getIdQuestionnaire()
{
return $this->IdQuestionnaire;
}

/**
 * Set the value of IdQuestionnaire
 *
 * @return  self
 */ 
public function setIdQuestionnaire($IdQuestionnaire)
{
$this->IdQuestionnaire = $IdQuestionnaire;

return $this;
}
}

?>