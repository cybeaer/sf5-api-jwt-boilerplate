<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $email;

    /**
     * User constructor.
     * @param $username
     */
    public function __construct($username) {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername() : string {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): self {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalt() : ?string {
        return null;
    }

    /**
     * @return string|null
     */
    public function getPassword() : ?string {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password) : self {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : string {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array|string[]
     */
    public function getRoles() : array {
        return ['ROLE_USER'];
    }

    public function eraseCredentials(){}
}