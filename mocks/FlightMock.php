<?php

namespace AirlineMocks;

use Airline\Entities\Flight;
use DateTime;

class FlightMock
{
    public static function getFlightOutbound()
    {
        $flightNumber = '125';
        $cia = 'Azul';
        $departureAirport = 'CNF';
        $arrivalAirport = 'SDU';
        $departureTime = DateTime::createFromFormat('Y-m-d H:i:s', '2019-10-13 14:00:00');
        $arrivalTime = DateTime::createFromFormat('Y-m-d H:i:s', '2019-10-13 15:00:00');
        $valorTotal = 115.99;

        $flight = new Flight($flightNumber, $cia, $departureAirport, $arrivalAirport, $departureTime, $arrivalTime, $valorTotal);


        return $flight;
    }

    public static function getFlightInbound()
    {
        $flightNumber = '128';
        $cia = 'Azul';
        $departureAirport = 'SDU';
        $arrivalAirport = 'CNF';
        $departureTime = DateTime::createFromFormat('Y-m-d H:i:s', '2019-10-14 17:00:00');
        $arrivalTime = DateTime::createFromFormat('Y-m-d H:i:s', '2019-10-14 18:00:00');
        $valorTotal = 135.99;

        $flight = new Flight($flightNumber, $cia, $departureAirport, $arrivalAirport, $departureTime, $arrivalTime, $valorTotal);


        return $flight;
    }
}
