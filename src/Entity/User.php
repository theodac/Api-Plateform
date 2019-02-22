<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


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
 *     name="users"
 * )
 * @ORM\Entity()
 * @ORM\EntityListeners("App\EventListener\UserListener")
 * Class User
 * @package App\Entity
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @var int
     */
    private $id;
    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return User
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return User
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $mail;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $password;
    /**
     * @ORM\Column( type="integer",nullable=true)
     */
    private $size;

    /**
     * @ORM\Column( type="datetime",nullable=true)
     */
    private $birthday;

    /**
     * @var
     * @ORM\Column(type="integer",nullable=true)
     */
    private $weight;
    /**
     * @var
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $sportPerWeek = false;
    /**
     * @var
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $dumbbell;
    /**
     * @var
     * @ORM\Column(type="boolean" , nullable=true)
     */
    private $drawbar;
    /**
     * @var
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $weightbar;
    /**
     * @var
     * @ORM\Column(type="string",nullable=true)
     */
    private $hereFor;
    /**
     * @var
     * @ORM\Column(type="string" , nullable=true)
     */
    private $step;
    /**
     * @var
     * @ORM\OneToMany(targetEntity="Session_Exercise", mappedBy="user")
     */
    private $exerciseHasUser;

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     * @return User
     */
    public function setSize($size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     * @return User
     */
    public function setBirthday($birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     * @return User
     */
    public function setWeight($weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSportPerWeek()
    {
        return $this->sportPerWeek;
    }

    /**
     * @param mixed $sportPerWeek
     * @return User
     */
    public function setSportPerWeek($sportPerWeek): self
    {
        $this->sportPerWeek = $sportPerWeek;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDumbbell()
    {
        return $this->dumbbell;
    }

    /**
     * @param mixed $dumbbell
     * @return User
     */
    public function setDumbbell($dumbbell): self
    {
        $this->dumbbell = $dumbbell;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDrawbar()
    {
        return $this->drawbar;
    }

    /**
     * @param mixed $drawbar
     * @return User
     */
    public function setDrawbar($drawbar): self
    {
        $this->drawbar = $drawbar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeightbar()
    {
        return $this->weightbar;
    }

    /**
     * @param mixed $weightbar
     * @return User
     */
    public function setWeightbar($weightbar): self
    {
        $this->weightbar = $weightbar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHereFor()
    {
        return $this->hereFor;
    }

    /**
     * @param mixed $hereFor
     * @return User
     */
    public function setHereFor($hereFor): self
    {
        $this->hereFor = $hereFor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param mixed $step
     * @return User
     */
    public function setStep($step): self
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExerciseHasUser()
    {
        return $this->exerciseHasUser;
    }

    /**
     * @param mixed $exerciseHasUser
     * @return User
     */
    public function setExerciseHasUser($exerciseHasUser): self
    {
        $this->exerciseHasUser = $exerciseHasUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjectifHasUser()
    {
        return $this->objectifHasUser;
    }

    /**
     * @param mixed $objectifHasUser
     * @return User
     */
    public function setObjectifHasUser($objectifHasUser): self
    {
        $this->objectifHasUser = $objectifHasUser;
        return $this;
    }
    /**
     * @var
     * @ORM\OneToMany(targetEntity="User_Objectifs", mappedBy="user")
     */
    private $objectifHasUser;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return User
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
      return   uniqid('',true);
    }

    public function getUsername()
    {
        return $this->mail;
    }

    public function eraseCredentials()
    {

    }

}
