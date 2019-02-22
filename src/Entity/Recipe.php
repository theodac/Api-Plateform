<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/02/2019
 * Time: 15:22
 */

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ApiResource(
 *     itemOperations={
            "get",
 *          "put",
 *          "delete"
 *     },
 *     collectionOperations={
            "get",
 *          "post"
 *     }
 * )
 * @ORM\Table(
 *     name="recipes"
 * )
 * @ORM\Entity()
 * Class Recipe
 * @package App\Entity
 */
class Recipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @var int
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $url;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $name;
    /**
     * @ORM\Column(type="integer",nullable=false)
     * @var string
     */
    private $kcal;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $picture;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $description;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Recipe
     */
    public function setUrl($url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Recipe
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * @param mixed $kcal
     * @return Recipe
     */
    public function setKcal($kcal): self
    {
        $this->kcal = $kcal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     * @return Recipe
     */
    public function setPicture($picture): self
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Recipe
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}