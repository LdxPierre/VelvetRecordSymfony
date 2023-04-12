<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(
        message: 'Veuillez saisir un nom d\'artiste.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\d &é\-è_çà@âẑêŷûîôŝĝĥĵŵĉ!ÂẐÊŶÛÎÔŜĜĤĴŴĈëẗÿüïöḧẅẍÄËŸÜÏÖḦẄẌ]{1,255}$/',
        message: 'Le nom d\'artiste contient des caractères invalides.',
    )]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'artist', targetEntity: Disc::class)]
    private Collection $discs;

    public function __construct()
    {
        $this->discs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Disc>
     */
    public function getDiscs(): Collection
    {
        return $this->discs;
    }

    public function addDisc(Disc $disc): self
    {
        if (!$this->discs->contains($disc)) {
            $this->discs->add($disc);
            $disc->setArtist($this);
        }

        return $this;
    }

    public function removeDisc(Disc $disc): self
    {
        if ($this->discs->removeElement($disc)) {
            // set the owning side to null (unless already changed)
            if ($disc->getArtist() === $this) {
                $disc->setArtist(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
