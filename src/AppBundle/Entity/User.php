<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @Vich\Uploadable
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->updatedAt = new \DateTime();
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return User
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

        public function getUsername()
    {
        return ucfirst(parent::getUsername());
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
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
     * Set description
     *
     * @param string $description
     * @return User
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
     * Set from_login
     *
     * @param boolean $fromLogin
     * @return User
     */
    public function setFromLogin($fromLogin)
    {
        $this->from_login = $fromLogin;

        return $this;
    }

    /**
     * Get from_login
     *
     * @return boolean
     */
    public function getFromLogin()
    {
        return $this->from_login;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return User
     */
    public function setDateCreation($dateCreation)
    {
        $this->date_creation = $dateCreation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set info
     *
     * @param \TBN\UserBundle\Entity\UserInfo $info
     * @return User
     */
    public function setInfo(\TBN\UserBundle\Entity\UserInfo $info = null)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return \TBN\UserBundle\Entity\UserInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Add calendriers
     *
     * @param \TBN\AgendaBundle\Entity\Calendrier $calendriers
     * @return User
     */
    public function addCalendrier(\TBN\AgendaBundle\Entity\Calendrier $calendriers)
    {
        $this->calendriers[] = $calendriers;

        return $this;
    }

    /**
     * Remove calendriers
     *
     * @param \TBN\AgendaBundle\Entity\Calendrier $calendriers
     */
    public function removeCalendrier(\TBN\AgendaBundle\Entity\Calendrier $calendriers)
    {
        $this->calendriers->removeElement($calendriers);
    }

    /**
     * Get calendriers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCalendriers()
    {
        return $this->calendriers;
    }

    /**
     * Set site
     *
     * @param \TBN\MainBundle\Entity\Site $site
     * @return User
     */
    public function setSite(\TBN\MainBundle\Entity\Site $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \TBN\MainBundle\Entity\Site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set showSocials
     *
     * @param boolean $showSocials
     *
     * @return User
     */
    public function setShowSocials($showSocials)
    {
        $this->show_socials = $showSocials;

        return $this;
    }

    /**
     * Get showSocials
     *
     * @return boolean
     */
    public function getShowSocials()
    {
        return $this->show_socials;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return User
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    public function __toString()
    {
        return sprintf("#%s (%s)", $this->id ?: '?', $this->getUsername());
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return User
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
