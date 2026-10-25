<?php

namespace App\Entity;

use App\Repository\MeasurementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasurementRepository::class)]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'measurements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(length: 255)]
    private ?\DateTime $date = null;

    #[ORM\Column]
    private ?int $temperature = null;

    #[ORM\Column]
    private ?int $atmospheric_pressure = null;

    #[ORM\Column(length: 255)]
    private ?string $cloudiness = null;

    #[ORM\Column(length: 4)]
    private ?string $chance_of_rain = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(int $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getAtmosphericPressure(): ?int
    {
        return $this->atmospheric_pressure;
    }

    public function setAtmosphericPressure(int $atmospheric_pressure): static
    {
        $this->atmospheric_pressure = $atmospheric_pressure;

        return $this;
    }

    public function getCloudiness(): ?string
    {
        return $this->cloudiness;
    }

    public function setCloudiness(string $cloudiness): static
    {
        $this->cloudiness = $cloudiness;

        return $this;
    }

    public function getChanceOfRain(): ?string
    {
        return $this->chance_of_rain;
    }

    public function setChanceOfRain(string $chance_of_rain): static
    {
        $this->chance_of_rain = $chance_of_rain;

        return $this;
    }
}
