<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\SERIALIZER\Annotation as SERIALIZER;
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
 * @SERIALIZER\ExclusionPolicy("all")
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
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_user", "list_user"})
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
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_user", "list_user"})
     */
    private $email;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_user", "list_user"})
     */
    private $created_at;

    /**
     * @var DateTimeImmutable|null
     *
     * @ORM\Column(type="datetime_immutable")
     *
     * @SERIALIZER\Expose()
     * @SERIALIZER\Groups({"detail_user", "list_user"})
     */
    private $updated_at;

    /**
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client", cascade={"persist"})
     */
    private $client;

    /**
     * User constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->created_at = new DateTimeImmutable();
        $this->updated_at = new DateTimeImmutable();
        parent::__construct();
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
