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
     * @ORM\ManyToMany(targetEntity="Recette", mappedBy="ingredients", cascade={"persist"})
     */
    private $recette;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recette = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recette
     *
     * @param \MarmiWildBundle\Entity\Recette $recette
     *
     * @return Ingredient
     */
    public function addRecette(\MarmiWildBundle\Entity\Recette $recette)
    {
        $this->recette[] = $recette;

        return $this;
    }

    /**
     * Remove recette
     *
     * @param \MarmiWildBundle\Entity\Recette $recette
     */
    public function removeRecette(\MarmiWildBundle\Entity\Recette $recette)
    {
        $this->recette->removeElement($recette);
    }

    /**
     * Get recette
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecette()
    {
        return $this->recette;
    }
}
