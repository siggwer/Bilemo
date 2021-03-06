<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Exception;

/**
 * Class Client
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client extends AbstractEntity implements UserInterface
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, unique=true)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     * @Assert\Email(message="Email   address not valid")
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     */
    private $password;

    /**
     * @var string|null
     *
     * @Assert\NotBlank(message="This value should not be blank")
     *
     * @Assert\Length(min=6)
     */
    private $plainPassword;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(type="json")
     */
    private $roles = 'ROLE_USER';

    /**
     * Client constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
        parent::__construct();
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param string|null $plainPassword
     */
    public function setPlainPassword(?string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeImmutable|null $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeImmutable|null $updatedAt
     */
    public function setUpdatedAt(?DateTimeImmutable $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return array|string|null
     */
    public function getRoles()
    {
        // return $this->roles;
        $roles = $this->roles;

        return array_unique((array)$roles);
    }

    /**
     * @param string|null $roles
     */
    public function setRoles(?string $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @inheritDoc
     *
     * @codeCoverageIgnore
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * @inheritDoc
     *
     * @codeCoverageIgnore
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
