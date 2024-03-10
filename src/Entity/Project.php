<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\ProjectCategoryEnum;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name = null;


    #[Vich\UploadableField(mapping: 'project_image', fileNameProperty: 'picture')]
    private ?File $imageFile = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $picture = null;

    #[ORM\Column(type: 'text', length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: 'json')]
    private ?array $technos = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $category = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTime $startDate = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime $endDate = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTime $createdAt;

    #[ORM\Column(type: 'date')]
    private ?\DateTime $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->updatedAt = new \DateTime();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setPicture(?string $picture): void
    {
        $this->picture = $picture;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getTechnos(): ?array
    {
        return $this->technos;
    }

    public function setTechnos(array $technos): self
    {
        $this->technos = $technos;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }


    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
