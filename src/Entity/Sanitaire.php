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
 * @ORM\Entity(repositoryClass="App\Repository\SanitaireRepository")
 */
class Sanitaire
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
     * @ORM\Column(name="ligne", type="string", length=2, nullable=true)
     * @Groups("station")
     
     */
    private $ligne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="station", type="string", length=39, nullable=true)
     * @Groups("station")
     
     */
    private $station;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accessibleaupublic", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $accessibleaupublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tarif_gratuit_payant", type="string", length=7, nullable=true)
     * @Groups("station")
     
     */
    private $tarifGratuitPayant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acces_passe_navigoou_ticket_t", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $accesPasseNavigoouTicketT;

    /**
     * @var string|null
     *
     * @ORM\Column(name="acces_boutonpoussoir", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $accesBoutonpoussoir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enzonecontrolee", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $enzonecontrolee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horszonecontroleestation", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $horszonecontroleestation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="horszonecontroleevoiepublique", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $horszonecontroleevoiepublique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accessibilite_pmr", type="string", length=3, nullable=true)
     * @Groups("station")
     
     */
    private $accessibilitePmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localisation", type="string", length=111, nullable=true)
     * @Groups("station")
     
     */
    private $localisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coord_geo", type="string", length=28, nullable=true)
     * @Groups("station")
     
     */
    private $coordGeo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gestionnaire", type="string", length=23, nullable=true)
     * @Groups("station")
     
     */
    private $gestionnaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Station", inversedBy="sanitaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sanitaire;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getStation(): ?string
    {
        return $this->station;
    }

    public function setStation(?string $station): self
    {
        $this->station = $station;

        return $this;
    }

    public function getAccessibleaupublic(): ?string
    {
        return $this->accessibleaupublic;
    }

    public function setAccessibleaupublic(?string $accessibleaupublic): self
    {
        $this->accessibleaupublic = $accessibleaupublic;

        return $this;
    }

    public function getTarifGratuitPayant(): ?string
    {
        return $this->tarifGratuitPayant;
    }

    public function setTarifGratuitPayant(?string $tarifGratuitPayant): self
    {
        $this->tarifGratuitPayant = $tarifGratuitPayant;

        return $this;
    }

    public function getAccesPasseNavigoouTicketT(): ?string
    {
        return $this->accesPasseNavigoouTicketT;
    }

    public function setAccesPasseNavigoouTicketT(?string $accesPasseNavigoouTicketT): self
    {
        $this->accesPasseNavigoouTicketT = $accesPasseNavigoouTicketT;

        return $this;
    }

    public function getAccesBoutonpoussoir(): ?string
    {
        return $this->accesBoutonpoussoir;
    }

    public function setAccesBoutonpoussoir(?string $accesBoutonpoussoir): self
    {
        $this->accesBoutonpoussoir = $accesBoutonpoussoir;

        return $this;
    }

    public function getEnzonecontrolee(): ?string
    {
        return $this->enzonecontrolee;
    }

    public function setEnzonecontrolee(?string $enzonecontrolee): self
    {
        $this->enzonecontrolee = $enzonecontrolee;

        return $this;
    }

    public function getHorszonecontroleestation(): ?string
    {
        return $this->horszonecontroleestation;
    }

    public function setHorszonecontroleestation(?string $horszonecontroleestation): self
    {
        $this->horszonecontroleestation = $horszonecontroleestation;

        return $this;
    }

    public function getHorszonecontroleevoiepublique(): ?string
    {
        return $this->horszonecontroleevoiepublique;
    }

    public function setHorszonecontroleevoiepublique(?string $horszonecontroleevoiepublique): self
    {
        $this->horszonecontroleevoiepublique = $horszonecontroleevoiepublique;

        return $this;
    }

    public function getAccessibilitePmr(): ?string
    {
        return $this->accessibilitePmr;
    }

    public function setAccessibilitePmr(?string $accessibilitePmr): self
    {
        $this->accessibilitePmr = $accessibilitePmr;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getCoordGeo(): ?string
    {
        return $this->coordGeo;
    }

    public function setCoordGeo(?string $coordGeo): self
    {
        $this->coordGeo = $coordGeo;

        return $this;
    }

    public function getGestionnaire(): ?string
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(?string $gestionnaire): self
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    public function getSanitaire(): ?Station
    {
        return $this->sanitaire;
    }

    public function setSanitaire(?Station $sanitaire): self
    {
        $this->sanitaire = $sanitaire;

        return $this;
    }
}
