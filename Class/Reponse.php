<?php
class Reponse

{
    private $IdReponse;
    private $Reponse;
    private $Verif;
    private $IdQuestion;

    /**
     * Get the value of IdReponse
     */ 
    public function getIdReponse()
    {
        return $this->IdReponse;
    }

    /**
     * Set the value of IdReponse
     *
     * @return  self
     */ 
    public function setIdReponse($IdReponse)
    {
        $this->IdReponse = $IdReponse;

        return $this;
    }

    /**
     * Get the value of Reponse
     */ 
    public function getReponse()
    {
        return $this->Reponse;
    }

    /**
     * Set the value of Reponse
     *
     * @return  self
     */ 
    public function setReponse($Reponse)
    {
        $this->Reponse = $Reponse;

        return $this;
    }

    /**
     * Get the value of Verif
     */ 
    public function getVerif()
    {
        return $this->Verif;
    }

    /**
     * Set the value of Verif
     *
     * @return  self
     */ 
    public function setVerif($Verif)
    {
        $this->Verif = $Verif;

        return $this;
    }

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
}

?>