<?php
Class Questionnaire 
{
    private $IdQuestionnaire;
    private $Titre;
    private $IdUtilisateur;

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

    /**
     * Get the value of Titre
     */ 
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set the value of Titre
     *
     * @return  self
     */ 
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;

        return $this;
    }

    /**
     * Get the value of IdUtilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->IdUtilisateur;
    }

    /**
     * Set the value of IdUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur($IdUtilisateur)
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }
}




?>