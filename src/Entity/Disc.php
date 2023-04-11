<?php

namespace App\Entity;

use App\Repository\DiscRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscRepository::class)]
class Disc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un titre.',
        )]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Le titre doit comporter entre 1 et 50 caractères.',
        maxMessage: 'Le titre doit comporter entre 1 et 50 caractères.',
        )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\d &é\-èçà@+=%?,!]{1,50}$/',
        message: 'Le titre contient des caractères invalides.',
    )]
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir une année.',
    )]
    #[Assert\Length(
        min: 4,
        max: 4,
        minMessage: 'L\'année doit contenir 4 chiffres',
        maxMessage: 'L\'année doit contenir 4 chiffres',
    )]
    #[Assert\Regex(
        pattern: '/^[0123456789]{4}$/',
        message: 'L`année doit contenir 4 chiffres',
    )]
    #[ORM\Column(length: 4, nullable: true)]
    private ?string $year = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un label.',
        )]
    #[Assert\Length(
        min:2,
        max:50,
        minMessage: 'Le label doit comporter entre 2 et 4 caractères.',
        maxMessage: 'Le label doit comporter entre 2 et 4 caractères.',
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\d&é\-èçà@+=%?,! ]{1,50}$/',
        message: 'Le label contient des caractères invalide.',
    )]
    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un genre.',
        )]
    #[Assert\Length(
        min:2,
        max:50,
        minMessage: 'Le genre doit comporter entre 2 et 4 caractères.',
        maxMessage: 'Le genre doit comporter entre 2 et 4 caractères.',
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\d\/&é\-èçà@+=%?,! ]{1,50}$/',
        message: 'Le genre contient des caractères invalide.',
    )]
    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un prix.',
        )]
    #[ORM\Column]
    #[Assert\Type(
        type: 'int',
        message: 'Veuillez saisir un nombre.',
    )]
    private ?int $price = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un artiste.',
    )]
    #[ORM\ManyToOne(inversedBy: 'discs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Artist $artist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }
}
