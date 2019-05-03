<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"station"}, "enable_max_depth"="true"},
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\StationRepository")
 */
class Station
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
     * @ORM\Column(name="exploitant", type="string", length=4, nullable=true)
     * @Groups("station")
     */
    private $exploitant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idrefliga", type="string", length=6, nullable=true)
     * @Groups("station")
     */
    private $idrefliga;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tertram", type="integer", nullable=true)
     * @Groups("station")
     */
    private $tertram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_com", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $resCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tramway", type="integer", nullable=true)
     * @Groups("station")
     */
    private $tramway;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tertrain", type="integer", nullable=true)
     * @Groups("station")
     */
    private $tertrain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reseau", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $reseau;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cod_ligf", type="integer", nullable=true)
     * @Groups("station")
     */
    private $codLigf;

    /**
     * @var float|null
     *
     * @ORM\Column(name="coordinates", type="float", precision=10, scale=0, nullable=true)
     * @Groups("station")
     */
    private $coordinates;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gares_id", type="integer", nullable=true)
     * @Groups("station")
     */
    private $garesId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rer", type="integer", nullable=true)
     * @Groups("station")
     */
    private $rer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_gare", type="string", length=38, nullable=true)
     * @Groups("station")
     */
    private $nomGare;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idf", type="integer", nullable=true)
     * @Groups("station")
     */
    private $idf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=8, nullable=true)
     * @Groups("station")
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ternavette", type="integer", nullable=true)
     * @Groups("station")
     */
    private $ternavette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomlong", type="string", length=54, nullable=true)
     * @Groups("station")
     */
    private $nomlong;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_ref_zdl", type="integer", nullable=true)
     * @Groups("station")
     */
    private $idRefZdl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metro", type="integer", nullable=true)
     * @Groups("station")
     */
    private $metro;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_mod", type="integer", nullable=true)
     * @Groups("station")
     */
    private $numMod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mode", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $mode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cod_resf", type="integer", nullable=true)
     * @Groups("station")
     */
    private $codResf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="principal", type="integer", nullable=true)
     * @Groups("station")
     */
    private $principal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="terval", type="integer", nullable=true)
     * @Groups("station")
     */
    private $terval;

    /**
     * @var float|null
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=true)
     * @Groups("station")
     */
    private $x;

    /**
     * @var float|null
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=true)
     * @Groups("station")
     */
    private $y;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objects_stations_type", type="string", length=18, nullable=true)
     * @Groups("station")
     */
    private $objectsStationsType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idrefligc", type="string", length=6, nullable=true)
     * @Groups("station")
     */
    private $idrefligc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ligne", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $ligne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="terfer", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $terfer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_stif", type="integer", nullable=true)
     * @Groups("station")
     */
    private $resStif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="termetro", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $termetro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="indice_lig", type="string", length=4, nullable=true)
     * @Groups("station")
     */
    private $indiceLig;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ligne_code", type="string", length=10, nullable=true)
     * @Groups("station")
     */
    private $ligneCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="val", type="integer", nullable=true)
     * @Groups("station")
     */
    private $val;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_iv", type="string", length=38, nullable=true)
     * @Groups("station")
     */
    private $nomIv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="terrer", type="string", length=5, nullable=true)
     * @Groups("station")
     */
    private $terrer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="train", type="integer", nullable=true)
     * @Groups("station")
     */
    private $train;

    /**
     * @var int|null
     *
     * @ORM\Column(name="navette", type="integer", nullable=true)
     * @Groups("station")
     */
    private $navette;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_psr", type="integer", nullable=true)
     * @Groups("station")
     */
    private $numPsr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fer", type="integer", nullable=true)
     * @Groups("station")
     */
    private $fer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QualiterAir", mappedBy="station")
     * @Groups("station")
     * @MaxDepth(1)
     */
    private $station;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sanitaire", mappedBy="sanitaire")
     * @Groups("station")
     * @MaxDepth(1)
     */
    private $sanitaire;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AccessMetro", mappedBy="station")
     * @Groups("station")
     * @MaxDepth(1)
     */
    private $access;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TraficAnnuelStationReseauFerre", mappedBy="traficStation")
     * @Groups("station")
     * @MaxDepth(1)
     */
    private $trafic;

    public function __construct()
    {
        $this->station = new ArrayCollection();
        $this->sanitaire = new ArrayCollection();
        $this->trafic_station = new ArrayCollection();
        $this->access = new ArrayCollection();
        $this->trafic = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExploitant(): ?string
    {
        return $this->exploitant;
    }

    public function setExploitant(?string $exploitant): self
    {
        $this->exploitant = $exploitant;

        return $this;
    }

    public function getIdrefliga(): ?string
    {
        return $this->idrefliga;
    }

    public function setIdrefliga(?string $idrefliga): self
    {
        $this->idrefliga = $idrefliga;

        return $this;
    }

    public function getTertram(): ?int
    {
        return $this->tertram;
    }

    public function setTertram(?int $tertram): self
    {
        $this->tertram = $tertram;

        return $this;
    }

    public function getResCom(): ?string
    {
        return $this->resCom;
    }

    public function setResCom(?string $resCom): self
    {
        $this->resCom = $resCom;

        return $this;
    }

    public function getTramway(): ?int
    {
        return $this->tramway;
    }

    public function setTramway(?int $tramway): self
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getTertrain(): ?int
    {
        return $this->tertrain;
    }

    public function setTertrain(?int $tertrain): self
    {
        $this->tertrain = $tertrain;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getCodLigf(): ?int
    {
        return $this->codLigf;
    }

    public function setCodLigf(?int $codLigf): self
    {
        $this->codLigf = $codLigf;

        return $this;
    }

    public function getCoordinates(): ?float
    {
        return $this->coordinates;
    }

    public function setCoordinates(?float $coordinates): self
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    public function getGaresId(): ?int
    {
        return $this->garesId;
    }

    public function setGaresId(?int $garesId): self
    {
        $this->garesId = $garesId;

        return $this;
    }

    public function getRer(): ?int
    {
        return $this->rer;
    }

    public function setRer(?int $rer): self
    {
        $this->rer = $rer;

        return $this;
    }

    public function getNomGare(): ?string
    {
        return $this->nomGare;
    }

    public function setNomGare(?string $nomGare): self
    {
        $this->nomGare = $nomGare;

        return $this;
    }

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function setIdf(?int $idf): self
    {
        $this->idf = $idf;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTernavette(): ?int
    {
        return $this->ternavette;
    }

    public function setTernavette(?int $ternavette): self
    {
        $this->ternavette = $ternavette;

        return $this;
    }

    public function getNomlong(): ?string
    {
        return $this->nomlong;
    }

    public function setNomlong(?string $nomlong): self
    {
        $this->nomlong = $nomlong;

        return $this;
    }

    public function getIdRefZdl(): ?int
    {
        return $this->idRefZdl;
    }

    public function setIdRefZdl(?int $idRefZdl): self
    {
        $this->idRefZdl = $idRefZdl;

        return $this;
    }

    public function getMetro(): ?int
    {
        return $this->metro;
    }

    public function setMetro(?int $metro): self
    {
        $this->metro = $metro;

        return $this;
    }

    public function getNumMod(): ?int
    {
        return $this->numMod;
    }

    public function setNumMod(?int $numMod): self
    {
        $this->numMod = $numMod;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getCodResf(): ?int
    {
        return $this->codResf;
    }

    public function setCodResf(?int $codResf): self
    {
        $this->codResf = $codResf;

        return $this;
    }

    public function getPrincipal(): ?int
    {
        return $this->principal;
    }

    public function setPrincipal(?int $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getTerval(): ?int
    {
        return $this->terval;
    }

    public function setTerval(?int $terval): self
    {
        $this->terval = $terval;

        return $this;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(?float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(?float $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getObjectsStationsType(): ?string
    {
        return $this->objectsStationsType;
    }

    public function setObjectsStationsType(?string $objectsStationsType): self
    {
        $this->objectsStationsType = $objectsStationsType;

        return $this;
    }

    public function getIdrefligc(): ?string
    {
        return $this->idrefligc;
    }

    public function setIdrefligc(?string $idrefligc): self
    {
        $this->idrefligc = $idrefligc;

        return $this;
    }

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(?string $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getTerfer(): ?string
    {
        return $this->terfer;
    }

    public function setTerfer(?string $terfer): self
    {
        $this->terfer = $terfer;

        return $this;
    }

    public function getResStif(): ?int
    {
        return $this->resStif;
    }

    public function setResStif(?int $resStif): self
    {
        $this->resStif = $resStif;

        return $this;
    }

    public function getTermetro(): ?string
    {
        return $this->termetro;
    }

    public function setTermetro(?string $termetro): self
    {
        $this->termetro = $termetro;

        return $this;
    }

    public function getIndiceLig(): ?string
    {
        return $this->indiceLig;
    }

    public function setIndiceLig(?string $indiceLig): self
    {
        $this->indiceLig = $indiceLig;

        return $this;
    }

    public function getLigneCode(): ?string
    {
        return $this->ligneCode;
    }

    public function setLigneCode(?string $ligneCode): self
    {
        $this->ligneCode = $ligneCode;

        return $this;
    }

    public function getVal(): ?int
    {
        return $this->val;
    }

    public function setVal(?int $val): self
    {
        $this->val = $val;

        return $this;
    }

    public function getNomIv(): ?string
    {
        return $this->nomIv;
    }

    public function setNomIv(?string $nomIv): self
    {
        $this->nomIv = $nomIv;

        return $this;
    }

    public function getTerrer(): ?string
    {
        return $this->terrer;
    }

    public function setTerrer(?string $terrer): self
    {
        $this->terrer = $terrer;

        return $this;
    }

    public function getTrain(): ?int
    {
        return $this->train;
    }

    public function setTrain(?int $train): self
    {
        $this->train = $train;

        return $this;
    }

    public function getNavette(): ?int
    {
        return $this->navette;
    }

    public function setNavette(?int $navette): self
    {
        $this->navette = $navette;

        return $this;
    }

    public function getNumPsr(): ?int
    {
        return $this->numPsr;
    }

    public function setNumPsr(?int $numPsr): self
    {
        $this->numPsr = $numPsr;

        return $this;
    }

    public function getFer(): ?int
    {
        return $this->fer;
    }

    public function setFer(?int $fer): self
    {
        $this->fer = $fer;

        return $this;
    }

    /**
     * @return Collection|QualiterAir[]
     */
    public function getStation(): Collection
    {
        return $this->station;
    }

    public function addStation(QualiterAir $station): self
    {
        if (!$this->station->contains($station)) {
            $this->station[] = $station;
            $station->setStation($this);
        }

        return $this;
    }

    public function removeStation(QualiterAir $station): self
    {
        if ($this->station->contains($station)) {
            $this->station->removeElement($station);
            // set the owning side to null (unless already changed)
            if ($station->getStation() === $this) {
                $station->setStation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sanitaire[]
     */
    public function getSanitaire(): Collection
    {
        return $this->sanitaire;
    }

    public function addSanitaire(Sanitaire $sanitaire): self
    {
        if (!$this->sanitaire->contains($sanitaire)) {
            $this->sanitaire[] = $sanitaire;
            $sanitaire->setSanitaire($this);
        }

        return $this;
    }

    public function removeSanitaire(Sanitaire $sanitaire): self
    {
        if ($this->sanitaire->contains($sanitaire)) {
            $this->sanitaire->removeElement($sanitaire);
            // set the owning side to null (unless already changed)
            if ($sanitaire->getSanitaire() === $this) {
                $sanitaire->setSanitaire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AccessMetro[]
     */
    public function getAccess(): Collection
    {
        return $this->access;
    }

    public function addAccess(AccessMetro $access): self
    {
        if (!$this->access->contains($access)) {
            $this->access[] = $access;
            $access->setStation($this);
        }

        return $this;
    }

    public function removeAccess(AccessMetro $access): self
    {
        if ($this->access->contains($access)) {
            $this->access->removeElement($access);
            // set the owning side to null (unless already changed)
            if ($access->getStation() === $this) {
                $access->setStation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TraficAnnuelStationReseauFerre[]
     */
    public function getTrafic(): Collection
    {
        return $this->trafic;
    }

    public function addTrafic(TraficAnnuelStationReseauFerre $trafic): self
    {
        if (!$this->trafic->contains($trafic)) {
            $this->trafic[] = $trafic;
            $trafic->setTraficStation($this);
        }

        return $this;
    }

    public function removeTrafic(TraficAnnuelStationReseauFerre $trafic): self
    {
        if ($this->trafic->contains($trafic)) {
            $this->trafic->removeElement($trafic);
            // set the owning side to null (unless already changed)
            if ($trafic->getTraficStation() === $this) {
                $trafic->setTraficStation(null);
            }
        }

        return $this;
    }
}
