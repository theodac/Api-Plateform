<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 18/02/2019
 * Time: 14:16
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
 *     name="objectifs_has_user"
 * )
 * @ORM\Entity()
 * Class User_Objectifs
 * @package App\Entity
 */
class User_Objectifs
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="checked", type="boolean")
     */
    private $checked;
    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="Objectifs", inversedBy="objectifs_has_user")
     */
    protected $objectifs;
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="objectifHasUser")
     */
    protected $user;

    /**
     * @return mixed
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * @param mixed $checked
     * @return User_Objectifs
     */
    public function setChecked($checked): self
    {
        $this->checked = $checked;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return User_Objectifs
     */
    public function setDate($date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjectifs()
    {
        return $this->objectifs;
    }

    /**
     * @param mixed $objectifs
     * @return User_Objectifs
     */
    public function setObjectifs($objectifs): self
    {
        $this->objectifs = $objectifs;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return User_Objectifs
     */
    public function setUser($user): self
    {
        $this->user = $user;
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