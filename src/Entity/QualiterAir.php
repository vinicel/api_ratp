<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"station"}, "enable_max_depth"="true"},
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\QualiterAirRepository")
 */
class QualiterAir
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("station")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateheure", type="string", length=25, nullable=true)
     * @Groups("station")
     */
    private $dateheure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $no;

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_o2", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $nO2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_m10", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $pM10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_m2_5", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $pM25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c_o2", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $cO2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="temp", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $temp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="humi", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $humi;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Station", inversedBy="station")
     * @ORM\JoinColumn(nullable=false)
     */
    private $station;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateheure(): ?string
    {
        return $this->dateheure;
    }

    public function setDateheure(?string $dateheure): self
    {
        $this->dateheure = $dateheure;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(?string $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getNO2(): ?string
    {
        return $this->nO2;
    }

    public function setNO2(?string $nO2): self
    {
        $this->nO2 = $nO2;

        return $this;
    }

    public function getPM10(): ?string
    {
        return $this->pM10;
    }

    public function setPM10(?string $pM10): self
    {
        $this->pM10 = $pM10;

        return $this;
    }

    public function getPM25(): ?string
    {
        return $this->pM25;
    }

    public function setPM25(?string $pM25): self
    {
        $this->pM25 = $pM25;

        return $this;
    }

    public function getCO2(): ?string
    {
        return $this->cO2;
    }

    public function setCO2(?string $cO2): self
    {
        $this->cO2 = $cO2;

        return $this;
    }

    public function getTemp(): ?string
    {
        return $this->temp;
    }

    public function setTemp(?string $temp): self
    {
        $this->temp = $temp;

        return $this;
    }

    public function getHumi(): ?string
    {
        return $this->humi;
    }

    public function setHumi(?string $humi): self
    {
        $this->humi = $humi;

        return $this;
    }

    public function getStation(): ?Station
    {
        return $this->station;
    }

    public function setStation(?Station $station): self
    {
        $this->station = $station;

        return $this;
    }
}
