<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\Serializer\Annotation as Serializer;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Exception;

/**
 * Class User
 *
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 *
 * @Hateoas\Relation(
 *     "read",
 *      href=@Hateoas\Route(
 *          "user_read",
 *          parameters = {"id" = "expr(object.getId())"}
 *      )
 * )
 * @Hateoas\Relation(
 *     "update",
 *      href=@Hateoas\Route(
 *          "user_update",
 *          parameters = {"id" = "expr(object.getId())"}
 *      )
 * )
 * @Hateoas\Relation(
 *     "delete",
 *      href=@Hateoas\Route(
 *          "user_delete",
 *          parameters = {"id" = "expr(object.getId())"}
 *      )
 * )
 * @Serializer\ExclusionPolicy("all")
 */
class User extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"write_user", "list_user"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, unique=true)
     *
     * @Assert\NotBlank(message="This value should not be blank")
     * @Assert\Email(message="Email address not valid")
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"write_user", "list_user"})
     */
    private $email;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"detail_user", "list_user"})
     */
    private $createdAt;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"detail_user", "list_user"})
     */
    private $updatedAt;

    /**
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client", cascade={"persist"})
     */
    private $client;

    /**
     * @throws Exception
     *
     * @codeCoverageIgnore
     */
    public function init(): void
    {
        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
}
