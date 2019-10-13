  
<?php

use Airline\Entities\Baggage;
use Airline\Entities\Cargo;
use PHPUnit\Framework\TestCase;
use AirlineMocks\FlightMock;
use Airline\Entities\Checkout;

final class CheckoutTest extends TestCase
{
    public function testGenerateExtract()
    {
        $flight = FlightMock::getFlightOutbound();
        $checkout = new Checkout($flight);

        $valorTotalEsperado = 115.99;

        $extract = $checkout->generateExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }

    public function testGenerateExtractInOut()
    {
        $flightOutbound = FlightMock::getFlightOutbound();
        $flightInbound = FlightMock::getFlightInbound();
        $checkout = new Checkout($flightOutbound, $flightInbound);

        $valorTotalEsperado = 251.98;

        $extract = $checkout->generateExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }

    public function testGenerateExtractWithBaggage()
    {
        $flight = FlightMock::getFlightOutbound();
        $baggage = new Baggage(60, 10, 'Mochila');

        $flight->addBaggage($baggage);

        $checkout = new Checkout($flight);

        $valorTotalEsperado = 175.99;

        $extract = $checkout->generateExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }

    public function testGenerateExtractWithCargo()
    {
        $flight = FlightMock::getFlightOutbound();
        $cargo = new Cargo(150.30, 10, 'Gato', true);

        $flight->addCargo($cargo);

        $checkout = new Checkout($flight);

        $valorTotalEsperado = 266.29;

        $extract = $checkout->generateExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }

    public function testGenerateDetailedExtractWithBaggage()
    {
        $flightOutbound = FlightMock::getFlightOutbound();
        $baggage = new Baggage(60, 10, 'Mochila');

        $flightOutbound->addBaggage($baggage);

        $checkout = new Checkout($flightOutbound);

        $valorTotalEsperado = 175.99;

        $extract = $checkout->generateDetailedExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }

    public function testGenerateDetailedExtractWithCargo()
    {
        $flight = FlightMock::getFlightOutbound();
        $cargo = new Cargo(150.30, 10, 'Gato', true);

        $flight->addCargo($cargo);

        $checkout = new Checkout($flight);

        $valorTotalEsperado = 266.29;

        $extract = $checkout->generateDetailedExtract();

        $this->assertEquals($valorTotalEsperado, $extract->valorTotal);
    }
}
