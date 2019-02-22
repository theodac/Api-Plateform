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
 *     name="exercise"
 * )
 * @ORM\Entity()
 * Class Exercise
 * @package App\Entity
 */
class Exercise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @var int
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=55,nullable=false)
     * @var string
     */
    private $name;
    /**
     * @ORM\Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $video_url;
    /**
     * @ORM\Column(type="integer",nullable=false)
     * @var string
     */
    private $difficulties;
    /**
     * @ORM\OneToMany(targetEntity="Session_Exercise", mappedBy="exercise")
     */
    protected $exercise_has_user;

    /**
     * @return mixed
     */
    public function getExerciseHasUser()
    {
        return $this->exercise_has_user;
    }

    /**
     * @param mixed $exercise_has_user
     * @return Exercise
     */
    public function setExerciseHasUser($exercise_has_user): self
    {
        $this->exercise_has_user = $exercise_has_user;
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
     * @return Exercise
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVideoUrl()
    {
        return $this->video_url;
    }

    /**
     * @param mixed $video_url
     * @return Exercise
     */
    public function setVideoUrl($video_url): self
    {
        $this->video_url = $video_url;
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
     * @return Exercise
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