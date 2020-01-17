<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Serializable;
use Exception;

/**
 * Class Client
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, unique=true)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     * @Assert\Email(message="Email address not valid")
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
     * @Assert\NotBlank
     *
     * @Assert\Length(min=6)
     */
    private $plainPassword;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $created_at;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $updated_at;

    /**
     * @var string|null
     *
     * @ORM\Column(type="array")
     */
    private $roles = 'ROLE_USER';

    /**
     * @var Collection|User[]
     *
     * @ORM\OneToMany(targetEntity="User", mappedBy="client")
     */
    private $user;

    /**
     * Client constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->created_at = new DateTimeImmutable();
        $this->updated_at = new DateTimeImmutable();
        $this->user = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
        return $this->created_at;
    }

    /**
     * @param DateTimeImmutable|null $created_at
     */
    public function setCreatedAt(?DateTimeImmutable $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?DateTimeImmutable
    {
        return $this->updated_at;
    }

    /**
     * @param DateTimeImmutable|null $updated_at
     */
    public function setUpdatedAt(?DateTimeImmutable $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return string|null
     */
    public function getRoles(): ?string
    {
        return $this->roles;
    }

    /**
     * @param string|null $roles
     */
    public function setRoles(?string $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return User[]|Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User[]|Collection $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }
}