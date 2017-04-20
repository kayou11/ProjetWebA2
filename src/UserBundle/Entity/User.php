<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use SiteBundle\Entity\Image;
use Doctrine\Common\Annotations;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        $this->photos = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true, unique=true)
     */
    protected $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;

    /**
     * @ORM\ManyToMany(targetEntity="SiteBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinTable(name="user_image",
     *      joinColumns={@ORM\JoinColumn(name="image_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    protected $photos;

    /**
     * @ORM\ManyToMany(targetEntity="SiteBundle\Entity\Activity", cascade={"persist"}, inversedBy="users")
     * @ORM\JoinTable(name="activity_user",
     *      joinColumns={@ORM\JoinColumn(name="activity_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    protected $activity;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Formation")
     *
     */
    protected $formation;

    public function addPhoto(Image $photos)
    {
        // Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->photos[] = $photos;

        return $this;
    }

    public function removePhoto(Image $photos)
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->photos->removeElement($photos);
    }

    // Notez le pluriel, on récupère une liste de catégories ici !
    public function getPhoto()
    {
        return $this->photos;
    }

    // Notez le singulier, on ajoute une seule catégorie à la fois
    public function addActivity(User $activity)
    {
        // Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->activity[] = $activity;

        return $this;
    }

    public function removeActivity(User $activity)
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->activity->removeElement($activity);
    }

    // Notez le pluriel, on récupère une liste de catégories ici !

    public function getActivity()
    {
        return $this->activity;
    }

    public function getFormation()
    {
        return $this->formation;
    }

    public function setFormation(Formation $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set avatar
     *
     * @param string $name
     *
     * @return string
     */
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return string
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return string
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
}

