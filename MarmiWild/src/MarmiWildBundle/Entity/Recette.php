<?php

namespace MarmiWildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="MarmiWildBundle\Repository\RecetteRepository")
 */
class Recette
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
     * @ORM\Column(name="nomRecette", type="string", length=255)
     */
    private $nomRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string",length=255)
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="Ingredient", mappedBy="recettes", cascade={"persist"})
     */
    private $ingredient;

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
     * Set nomRecette
     *
     * @param string $nomRecette
     *
     * @return Recette
     */
    public function setNomRecette($nomRecette)
    {
        $this->nomRecette = $nomRecette;

        return $this;
    }

    /**
     * Get nomRecette
     *
     * @return string
     */
    public function getNomRecette()
    {
        return $this->nomRecette;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredient = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Recette
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add ingredient
     *
     * @param \MarmiWildBundle\Entity\Ingredient $ingredient
     *
     * @return Recette
     */
    public function addIngredient(\MarmiWildBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \MarmiWildBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\MarmiWildBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredient->removeElement($ingredient);
    }

    /**
     * Get ingredient
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
