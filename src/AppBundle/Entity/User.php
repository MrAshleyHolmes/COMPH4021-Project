<?php

namespace AppBundle\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * Turn off UniqueEntity if using same email and username, this can be set as one argument
 *
 * @UniqueEntity("username", message="That username is already in use")
 * @UniqueEntity("email", message="That email is already in use")
 */
class User implements UserInterface
{
    /**
     * @var
     *
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles;

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
     * @ORM\Column(name="username", type="string", length=80)
     * @Assert\NotBlank(message="You must have a username");
     * @Assert\Regex("/^[A-Za-z0-9_.\-]+$/", message = "
     * Name must be only letters and/or numbers with optional periods, dashes, and underscores")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=80)
     * @Assert\NotBlank(message="Firstname is required");
     * @Assert\Regex("/^[A-Za-z_._ \-'']+$/", message = "
     * Name must be only letters and optional dashes, and apostrophes")
     */
    private $firstname;


    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=80)
     * @Assert\NotBlank(message="Lastname is required");
     * @Assert\Regex("/^[A-Za-z_._ \-'']+$/", message = "
     * Name must be only letters and optional dashes, and apostrophe")
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80)
     * @Assert\NotBlank(message="Email is required");
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=80)
     * @Assert\NotBlank(message="Password is required");
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_admin", type="boolean")
     */
    private $isAdmin;

    /**
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param $isAdmin
     * @return $this
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * @return null
     */
    public function getSalt()
    {
        return null;
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
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
     *
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
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {

    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    /**
     * @param $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
