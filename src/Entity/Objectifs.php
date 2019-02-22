<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/02/2019
 * Time: 15:20
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
 *     name="objectifs"
 * )
 * @ORM\Entity()
 * Class Objectifs
 * @package App\Entity
 */
class Objectifs
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
    private $name;
    /**
     * @ORM\Column(type="integer",nullable=false)
     * @var string
     */
    private $difficulties;
    /**
     * @ORM\Column(name="badge", type="string",length=255,nullable=false)
     */
    private $badge;
    /**
     * @ORM\OneToMany(targetEntity="User_Objectifs", mappedBy="objectifs")
     */
    protected $objectifs_has_user;

    /**
     * @return mixed
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param mixed $badge
     * @return Objectifs
     */
    public function setBadge($badge): self
    {
        $this->badge = $badge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjectifsHasUser()
    {
        return $this->objectifs_has_user;
    }

    /**
     * @param mixed $objectifs_has_user
     * @return Objectifs
     */
    public function setObjectifsHasUser($objectifs_has_user): self
    {
        $this->objectifs_has_user = $objectifs_has_user;
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
     * @return Objectifs
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDifficulties()
    {
        return $this->difficulties;
    }

    /**
     * @param mixed $difficulties
     * @return Objectifs
     */
    public function setDifficulties($difficulties): self
    {
        $this->difficulties = $difficulties;
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