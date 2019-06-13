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
 * @ORM\Entity(repositoryClass="App\Repository\AccessMetroRepository")
 */
class AccessMetro
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
     * @ORM\Column(name="idptar", type="integer", nullable=true)
     * @Groups("station")
     */
    private $idptar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomptar", type="string", length=57, nullable=true)
     * @Groups("station")
     */
    private $nomptar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stif", type="bigint", nullable=true)
     * @Groups("station")
     */
    private $stif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     * @Groups("station")
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     * @Groups("station")
     */
    private $y;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coord", type="string", length=28, nullable=true)
     * @Groups("station")
     */
    private $coord;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ufr", type="integer", nullable=true)
     * @Groups("station")
     */
    private $ufr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annonce_sonore_prochain_passage", type="integer", nullable=true)
     * @Groups("station")
     */
    private $annonceSonoreProchainPassage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annonce_visuelle_prochain_passage", type="integer", nullable=true)
     * @Groups("station")
     */
    private $annonceVisuelleProchainPassage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annonce_sonore_situations_perturbees", type="integer", nullable=true)
     * @Groups("station")
     */
    private $annonceSonoreSituationsPerturbees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annonce_visuelle_situations_perturbees", type="integer", nullable=true)
     * @Groups("station")
     */
    private $annonceVisuelleSituationsPerturbees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="paqt", type="integer", nullable=true)
     * @Groups("station")
     */
    private $paqt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accessibilite_quai_train", type="integer", nullable=true)
     * @Groups("station")
     */
    private $accessibiliteQuaiTrain;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Station", inversedBy="access")
     * @ORM\JoinColumn(nullable=false)
     */
    private $station;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdptar(): ?int
    {
        return $this->idptar;
    }

    public function setIdptar(?int $idptar): self
    {
        $this->idptar = $idptar;

        return $this;
    }

    public function getNomptar(): ?string
    {
        return $this->nomptar;
    }

    public function setNomptar(?string $nomptar): self
    {
        $this->nomptar = $nomptar;

        return $this;
    }

    public function getStif(): ?int
    {
        return $this->stif;
    }

    public function setStif(?int $stif): self
    {
        $this->stif = $stif;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getCoord(): ?string
    {
        return $this->coord;
    }

    public function setCoord(?string $coord): self
    {
        $this->coord = $coord;

        return $this;
    }

    public function getUfr(): ?int
    {
        return $this->ufr;
    }

    public function setUfr(?int $ufr): self
    {
        $this->ufr = $ufr;

        return $this;
    }

    public function getAnnonceSonoreProchainPassage(): ?int
    {
        return $this->annonceSonoreProchainPassage;
    }

    public function setAnnonceSonoreProchainPassage(?int $annonceSonoreProchainPassage): self
    {
        $this->annonceSonoreProchainPassage = $annonceSonoreProchainPassage;

        return $this;
    }

    public function getAnnonceVisuelleProchainPassage(): ?int
    {
        return $this->annonceVisuelleProchainPassage;
    }

    public function setAnnonceVisuelleProchainPassage(?int $annonceVisuelleProchainPassage): self
    {
        $this->annonceVisuelleProchainPassage = $annonceVisuelleProchainPassage;

        return $this;
    }

    public function getAnnonceSonoreSituationsPerturbees(): ?int
    {
        return $this->annonceSonoreSituationsPerturbees;
    }

    public function setAnnonceSonoreSituationsPerturbees(?int $annonceSonoreSituationsPerturbees): self
    {
        $this->annonceSonoreSituationsPerturbees = $annonceSonoreSituationsPerturbees;

        return $this;
    }

    public function getAnnonceVisuelleSituationsPerturbees(): ?int
    {
        return $this->annonceVisuelleSituationsPerturbees;
    }

    public function setAnnonceVisuelleSituationsPerturbees(?int $annonceVisuelleSituationsPerturbees): self
    {
        $this->annonceVisuelleSituationsPerturbees = $annonceVisuelleSituationsPerturbees;

        return $this;
    }

    public function getPaqt(): ?int
    {
        return $this->paqt;
    }

    public function setPaqt(?int $paqt): self
    {
        $this->paqt = $paqt;

        return $this;
    }

    public function getAccessibiliteQuaiTrain(): ?int
    {
        return $this->accessibiliteQuaiTrain;
    }

    public function setAccessibiliteQuaiTrain(?int $accessibiliteQuaiTrain): self
    {
        $this->accessibiliteQuaiTrain = $accessibiliteQuaiTrain;

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
