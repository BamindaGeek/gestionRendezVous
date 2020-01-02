
<?php
class connexion{
    private $loginOrEmail;
    private $password;
    private $remember;
    private $periode;
    private $statut;
    private $createdOn;
    private $createdBy;
    private $updatedOn;
    private $updatedBy ;


    /**
     * create class contructor
     */ 
    function __construct($loginOrEmail,$password,$remember,$statut){
        
        $this->password = MD5($password);
        $this->loginOrEmail = $loginOrEmail;
        $this->remember = $remember;
        $this->statut = $statut;
        
    }
    /**
     * Get the value of loginOrEmail
     */ 
    public function getLoginOrEmail()
    {
        return $this->loginOrEmail;
    }

    /**
     * Set the value of loginOrEmail
     *
     * @return  self
     */ 
    public function setLoginOrEmail($loginOrEmail)
    {
        $this->loginOrEmail = $loginOrEmail;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = MD5($password);

        return $this;
    }

    /**
     * Get the value of remember
     */ 
    public function getRemember()
    {
        return $this->remember;
    }

    /**
     * Set the value of remember
     *
     * @return  self
     */ 
    public function setRemember($remember)
    {
        $this->remember = $remember;

        return $this;
    }

    /**
     * Get the value of periode
     */ 
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set the value of periode
     *
     * @return  self
     */ 
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of createdOn
     */ 
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set the value of createdOn
     *
     * @return  self
     */ 
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get the value of createdBy
     */ 
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set the value of createdBy
     *
     * @return  self
     */ 
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get the value of updatedOn
     */ 
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set the value of updatedOn
     *
     * @return  self
     */ 
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get the value of updatedBy
     */ 
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set the value of updatedBy
     *
     * @return  self
     */ 
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }
}

?>