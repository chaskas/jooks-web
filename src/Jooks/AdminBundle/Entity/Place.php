<?php

namespace Jooks\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;

    /**
    * @var string
    * @ORM\Column(name="name", type="string", unique=true, nullable=false))
    *
    **/
    protected $name;

    /**
    * @var string
    * @ORM\Column(name="website", type="string", unique=true, nullable=true))
    *
    **/
    protected $website;

    /**
    * @var string
    * @ORM\Column(name="facebook", type="string", unique=true, nullable=true))
    *
    **/
    protected $facebook;

    /**
    * @var string
    * @ORM\Column(name="twitter", type="string", unique=true, nullable=true))
    *
    **/
    protected $twitter;

    /**
    * @var string
    * @ORM\Column(name="phone", type="string", unique=true, nullable=true))
    *
    **/
    protected $phone;

    /**
    * @var string
    * @ORM\Column(name="contactName", type="string", unique=true, nullable=true))
    *
    **/

    protected $contactName;
    /**
    * @var string
    * @ORM\Column(name="contactPhone", type="string", unique=true, nullable=true))
    *
    **/
    protected $contactPhone;

    /**
    * @var string
    * @ORM\Column(name="contactEmail", type="string", unique=true, nullable=true))
    *
    **/
    protected $contactEmail;

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
     * Set name
     *
     * @param string $name
     * @return Place
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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
     * Set website
     *
     * @param string $website
     * @return Place
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

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Place
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    
        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Place
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    
        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Place
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Place
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    
        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Place
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    
        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Place
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }
}