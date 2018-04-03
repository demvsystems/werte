<?php

namespace Demv\Werte\Tests\Altersvorsorge;

use Demv\Werte\Altersvorsorge\Prioritaeten;
use Demv\Werte\Altersvorsorge\Prioritaeten\ArbeitgeberUnabhaengig;
use Demv\Werte\Altersvorsorge\Prioritaeten\EinmaligeAuszahlungVorRentenbeginn;
use Demv\Werte\Altersvorsorge\Prioritaeten\FuerImmobilienerwerbVerfuegbar;
use Demv\Werte\Altersvorsorge\Prioritaeten\Harz4Sicher;
use Demv\Werte\Altersvorsorge\Prioritaeten\LebenslangeGarantierteRente;
use Demv\Werte\Altersvorsorge\Prioritaeten\NichtFamiliaereVererbung;
use Demv\Werte\Altersvorsorge\Prioritaeten\StaatlichFoerderbar;
use Demv\Werte\Altersvorsorge\Prioritaeten\VorRentenbeginnVerfuegbar;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Tests\ProviderTestTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class AnlegerOrientierungenTest
 * @package Demv\Werte\Tests\Altersvorsorge
 */
final class PrioritaetenTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @return Prioritaeten
     */
    private function getAnlegerOrientierungen(): Prioritaeten
    {
        return new Prioritaeten();
    }

    public function testGetAll(): void
    {
        $adressTypen = $this->getAnlegerOrientierungen();
        $this->assertCount(8, $adressTypen->getAll());
    }

    private function statements()
    {
        return [
            ArbeitgeberUnabhaengig::ID             => 'Die Altersvorsorge soll unabhängig vom Arbeitgeber aufgebaut werden.',
            EinmaligeAuszahlungVorRentenbeginn::ID => 'Vor Rentenbeginn soll die Option bestehen, das Kapital einmalig auszahlen zu lassen.',
            FuerImmobilienerwerbVerfuegbar::ID     => 'Die Anlage soll zum Immobilienerwerb eingesetzt werden können.',
            Harz4Sicher::ID                        => 'Die Anlage soll „Hartz IV“ sicher sein.',
            LebenslangeGarantierteRente::ID        => 'Die Auszahlung soll als lebenslange, garantierte Rente erfolgen.',
            NichtFamiliaereVererbung::ID           => 'Im Todesfall soll das angesparte Kapital auch außerhalb von Ehepartner oder Kindern vererbt werden.',
            StaatlichFoerderbar::ID                => 'Es sollen staatliche Förderungen genutzt werden (Steuerersparnis, Zulagen).',
            VorRentenbeginnVerfuegbar::ID          => 'Vor Rentenbeginn soll die Option bestehen, das Kapital einmalig auszahlen zu lassen.',
        ];
    }

    /**
     * @throws EntryNotFoundException
     */
    public function testStatements()
    {
        foreach ($this->statements() as $id => $statement) {
            $this->assertEquals($statement, $this->getAnlegerOrientierungen()->getOne($id)->getStatement());
        }
    }

    public function testGetArbeitgeberUnabhaengig(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), ArbeitgeberUnabhaengig::class);
    }

    public function testGetEinmaligeAuszahlungVorRentenbeginn(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), EinmaligeAuszahlungVorRentenbeginn::class);
    }

    public function testGetFuerImmobilienerwerbVerfuegbar(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), FuerImmobilienerwerbVerfuegbar::class);
    }

    public function testGetHarz4Sicher(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), Harz4Sicher::class);
    }

    public function testGetLebenslangeGarantierteRente(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), LebenslangeGarantierteRente::class);
    }

    public function testGetNichtFamiliaereVererbung(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), NichtFamiliaereVererbung::class);
    }

    public function testGetStaatlichFoerderbar(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), StaatlichFoerderbar::class);
    }

    public function testGetVorRentenbeginnVerfuegbar(): void
    {
        $this->checkGetOne($this->getAnlegerOrientierungen(), VorRentenbeginnVerfuegbar::class);
    }

    /**
     * @throws EntryNotFoundException
     */
    public function testNotFound(): void
    {
        $this->expectException(EntryNotFoundException::class);
        $this->getAnlegerOrientierungen()->getOne(9);
    }
}
