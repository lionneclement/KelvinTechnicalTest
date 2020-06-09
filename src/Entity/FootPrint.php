<?php

namespace App\Entity;

use App\Repository\FootPrintRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FootPrintRepository::class)
 */
class FootPrint
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\NotNull
     */
    private $expenseType;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     * @Assert\Positive(
     *     message = "Cette valeur devrait être positive."
     * )
     * Carbon footprint per grams
     */
    private $ratio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpenseType(): ?string
    {
        return $this->expenseType;
    }

    public function setExpenseType(string $expenseType): self
    {
        $this->expenseType = $expenseType;

        return $this;
    }

    public function getRatio(): ?int
    {
        return $this->ratio;
    }

    public function setRatio(int $ratio): self
    {
        $this->ratio = $ratio;

        return $this;
    }
}
