<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_show;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reservation_number;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateShow(): ?\DateTimeInterface
    {
        return $this->date_show;
    }

    public function setDateShow(?\DateTimeInterface $date_show): self
    {
        $this->date_show = $date_show;

        return $this;
    }

    public function getReservationNumber(): ?int
    {
        return $this->reservation_number;
    }

    public function setReservationNumber(?int $reservation_number): self
    {
        $this->reservation_number = $reservation_number;

        return $this;
    }
}
