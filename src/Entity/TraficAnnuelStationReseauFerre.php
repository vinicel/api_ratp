<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\TraficAnnuelStationReseauFerreRepository")
 */
class TraficAnnuelStationReseauFerre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("station")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     * @Groups("station")
     */
    private $rang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rseau", type="string", length=6, nullable=true)
     * @Groups("station")
     */
    private $rseau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="station", type="string", length=35, nullable=true)
     * @Groups("station")
     */
    private $station;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trafic", type="integer", nullable=true)
     * @Groups("station")
     */
    private $trafic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correspondance_1", type="string", length=4, nullable=true)
     * @Groups("station")
     */
    private $correspondance1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correspondance_2", type="string", length=4, nullable=true)
     * @Groups("station")
     */
    private $correspondance2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correspondance_3", type="string", length=4, nullable=true)
     * @Groups("station")
     */
    private $correspondance3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correspondance_4", type="string", length=2, nullable=true)
     * @Groups("station")
     */
    private $correspondance4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correspondance_5", type="string", length=2, nullable=true)
     * @Groups("station")
     */
    private $correspondance5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=27, nullable=true)
     * @Groups("station")
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arrondissementpour_paris", type="string", length=2, nullable=true)
     * @Groups("station")
     */
    private $arrondissementpourParis;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Station", inversedBy="trafic")
     * @ORM\JoinColumn(nullable=false)
     */
    private $traficStation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getRseau(): ?string
    {
        return $this->rseau;
    }

    public function setRseau(?string $rseau): self
    {
        $this->rseau = $rseau;

        return $this;
    }

    public function getStation(): ?string
    {
        return $this->station;
    }

    public function setStation(?string $station): self
    {
        $this->station = $station;

        return $this;
    }

    public function getTrafic(): ?int
    {
        return $this->trafic;
    }

    public function setTrafic(?int $trafic): self
    {
        $this->trafic = $trafic;

        return $this;
    }

    public function getCorrespondance1(): ?string
    {
        return $this->correspondance1;
    }

    public function setCorrespondance1(?string $correspondance1): self
    {
        $this->correspondance1 = $correspondance1;

        return $this;
    }

    public function getCorrespondance2(): ?string
    {
        return $this->correspondance2;
    }

    public function setCorrespondance2(?string $correspondance2): self
    {
        $this->correspondance2 = $correspondance2;

        return $this;
    }

    public function getCorrespondance3(): ?string
    {
        return $this->correspondance3;
    }

    public function setCorrespondance3(?string $correspondance3): self
    {
        $this->correspondance3 = $correspondance3;

        return $this;
    }

    public function getCorrespondance4(): ?string
    {
        return $this->correspondance4;
    }

    public function setCorrespondance4(?string $correspondance4): self
    {
        $this->correspondance4 = $correspondance4;

        return $this;
    }

    public function getCorrespondance5(): ?string
    {
        return $this->correspondance5;
    }

    public function setCorrespondance5(?string $correspondance5): self
    {
        $this->correspondance5 = $correspondance5;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getArrondissementpourParis(): ?string
    {
        return $this->arrondissementpourParis;
    }

    public function setArrondissementpourParis(?string $arrondissementpourParis): self
    {
        $this->arrondissementpourParis = $arrondissementpourParis;

        return $this;
    }

    public function getTraficStation(): ?Station
    {
        return $this->traficStation;
    }

    public function setTraficStation(?Station $traficStation): self
    {
        $this->traficStation = $traficStation;

        return $this;
    }
}
