<?php

namespace MarmiWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="MarmiWildBundle\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomIngredient", type="string", length=255)
     */
    private $nomIngredient;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomIngredient
     *
     * @param string $nomIngredient
     *
     * @return Ingredient
     */
    public function setNomIngredient($nomIngredient)
    {
        $this->nomIngredient = $nomIngredient;

        return $this;
    }

    /**
     * Get nomIngredient
     *
     * @return string
     */
    public function getNomIngredient()
    {
        return $this->nomIngredient;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Ingredient
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}

