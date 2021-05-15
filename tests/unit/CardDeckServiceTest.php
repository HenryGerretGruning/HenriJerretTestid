<?php

declare(strict_types=1);

namespace Tests\integration;

use App\Service\CardDeckService;

class CardDeckServiceTest extends TestCase
{

    public function testGetDeck()
    {
        $cardDeck = CardDeckService::getDeck();

        $this->assertCount(52, $cardDeck);
        $this->assertEquals('3S', $cardDeck[1]);
        $this->assertEquals('3H', $cardDeck[14]);
    }

    public function testGetShuffledDeck()
    {
        $cardDeck = CardDeckService::getShuffledDeck(CardDeckService::getDeck());

        $this->assertCount(52, $cardDeck);
        $this->assertFalse('3S' === $cardDeck[1]);
        $this->assertFalse('3H' === $cardDeck[14]);
    }

}