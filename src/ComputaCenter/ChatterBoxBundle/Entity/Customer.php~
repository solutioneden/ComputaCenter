<?php

namespace ComputaCenter\ChatterBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="Customer")
 * @ORM\Entity
 */
class Customer
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
     * @ORM\Column(name="firstName", type="string")
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="lastName", type="string")
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var array
     * @ORM\Column(name="socialAccounts", type="array")
     */
    private $socialAccounts;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set socialAccounts
     *
     * @param array $socialAccounts
     * @return Customer
     */
    public function setSocialAccounts($socialAccounts)
    {
        $this->socialAccounts = $socialAccounts;
    
        return $this;
    }

    /**
     * Get socialAccounts
     *
     * @return array 
     */
    public function getSocialAccounts()
    {
        return $this->socialAccounts;
    }
}