<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ApiResource]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $text = null;

    #[ORM\Column]
    private ?bool $isDream = null;

    #[ORM\Column]
    private ?int $upVote = null;

    #[ORM\Column]
    private ?int $downVote = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function isDream(): ?bool
    {
        return $this->isDream;
    }

    public function setDream(bool $isDream): static
    {
        $this->isDream = $isDream;

        return $this;
    }

    public function getUpVote(): ?int
    {
        return $this->upVote;
    }

    public function setUpVote(int $upVote): static
    {
        $this->upVote = $upVote;

        return $this;
    }

    public function getDownVote(): ?int
    {
        return $this->downVote;
    }

    public function setDownVote(int $downVote): static
    {
        $this->downVote = $downVote;

        return $this;
    }
}
