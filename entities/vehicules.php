<?php
abstract class vehicules
{
    private $_idvehicule;
    private $_type;
    private $_marque;
    private $_model;
    private $_prix;
    private $_description;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {

    // On récupère le nom du setter correspondant à l'attribut.

            $method = 'set'.ucfirst($key);



            // Si le setter correspondant existe.

            if (method_exists($this, $method)) {

      // On appelle le setter.

                $this->$method($value);
            }
        }
    }

    public function setIdvehicule()
    {
        $this->_idvehicule = $vehicule;
    }

    public function setType()
    {
        $this->_type = $type;
    }

    public function setMarque()
    {
        $this->_marque = $marque;
    }

    public function setModel()
    {
        $this->_model = $model;
    }

    public function setPrix()
    {
        $this->_prix = $prix;
    }

    public function setDescription()
    {
        $this->_description = $description;
    }

    public function getIdvehicule()
    {
        return $this->_idvehicule;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function getDescription()
    {
        return $this->_description;
    }
}
