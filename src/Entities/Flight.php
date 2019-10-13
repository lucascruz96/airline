<?php

namespace Airline\Entities;

use DateTime;

class Flight
{
    private $flightNumber;
    private $cia;
    private $departureAirport;
    private $arrivalAirport;
    private $departureTime;
    private $arrivalTime;
    private $valorTotal;
    private $baggages;
    private $cargos;

    public function __construct(
        string $flightNumber,
        string $cia,
        string $departureAirport,
        string $arrivalAirport,
        DateTime $departureTime,
        DateTime $arrivalTime,
        float $valorTotal
    ) {
        $this->flightNumber = $flightNumber;
        $this->cia = $cia;
        $this->departureAirport = $departureAirport;
        $this->arrivalAirport = $arrivalAirport;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->valorTotal = $valorTotal;
        $this->baggages = array();
        $this->cargos = array();
    }

    public function addBaggage(Baggage $baggage)
    {
        array_push($this->baggages, $baggage);

        $this->valorTotal += $baggage->getPrice();
    }

    public function addCargo(Cargo $cargo)
    {
        array_push($this->cargos, $cargo);

        $this->valorTotal += $cargo->getPrice();
    }

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function getCia()
    {
        return $this->cia;
    }

    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getBaggages()
    {
        return $this->baggages;
    }

    public function getCargos()
    {
        return $this->cargos;
    }

    public function getBaggageDetails()
    {
        $baggageDetails = array();

        if (count($this->baggages) > 0) {
            foreach ($this->baggages as $baggage) {
                $baggageDetails[] = [
                    'Bagagem' => $baggage->getDescription(),
                    'Peso' => $baggage->getWeight() . 'KG',
                    'Valor Unitario' => $baggage->getPrice()
                ];
            }
        }

        return $baggageDetails;
    }


    public function getCargoDetails()
    {
        $cargoDetails = array();

        if (count($this->cargos) > 0) {
            foreach ($this->cargos as $cargo) {
                $cargoDetails[] = [
                    'Carga' => $cargo->getDescription(),
                    'Carga Viva' => ($cargo->isAlive() ? 'Sim' : 'Não'),
                    'Peso' => $cargo->getWeight() . 'KG',
                    'Valor Unitario' => $cargo->getPrice()
                ];
            }
        }

        return $cargoDetails;
    }
}
