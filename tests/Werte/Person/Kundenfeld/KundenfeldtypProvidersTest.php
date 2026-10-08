<?php

declare(strict_types=1);

namespace Demv\Werte\Tests\Person\Kundenfeld;

use Demv\Werte\AbstractProvider;
use Demv\Werte\Exception\EntryNotFoundException;
use Demv\Werte\Person\Kundenfeld\Berufsfeldtypen;
use Demv\Werte\Person\Kundenfeld\Familienfeldtypen;
use Demv\Werte\Person\Kundenfeld\Kontaktfeldtypen;
use Demv\Werte\Person\Kundenfeld\Kundenfeldtyp;
use Demv\Werte\Person\Kundenfeld\Risikofeldtypen;
use PHPUnit\Framework\TestCase;

class KundenfeldtypProvidersTest extends TestCase
{
    private const KONTAKTFELDTYPEN = [
        1  => 'E-Mail(Arbeit)',
        2  => 'Mobil(Arbeit)',
        3  => 'Telefon(Arbeit)',
        4  => 'Fax(Arbeit)',
        5  => 'E-Mail(Privat)',
        6  => 'Mobil(Privat)',
        7  => 'Telefon(Privat)',
        8  => 'Fax(Privat)',
        9  => 'weitere E-Mail',
        10 => 'weitere Telefonnummer',
        11 => 'Facebook',
        12 => 'Twitter',
        13 => 'Sonstiges',
        24 => 'Skype',
        28 => 'Homepage (Privat)',
        29 => 'Homepage (Arbeit)',
        38 => 'E-Mail',
        39 => 'Telefon',
        40 => 'Mobil',
        41 => 'Fax',
    ];

    private const BERUFSFELDTYPEN = [
        14 => 'Nebenjob',
        15 => 'Weiterer Beruf',
        16 => 'Berufsstatus frei',
        17 => 'Bruttomonatseinkommen',
        18 => 'Nettomonatseinkommen',
        19 => 'Arbeitgeber',
        20 => 'Kontakt Arbeitgeber',
        21 => 'Sonstiges',
        25 => 'Kindergeldnummer',
        26 => 'Kindergeldaktenzeichen',
        27 => 'Familienkasse',
        30 => 'Erlernter Beruf',
        31 => 'Beschäftigt seit',
        34 => 'Branche',
        35 => 'Gewinn',
        36 => 'Zu versteuerndes Einkommen',
        37 => 'Betriebsart',
    ];

    private const RISIKOFELDTYPEN = [
        22 => 'Sonstiges',
        32 => 'Führerschein',
        33 => 'Führerschein seit',
    ];

    private const FAMILIENFELDTYPEN = [
        23 => 'Sonstiges',
    ];

    /**
     * @return array<string, array{AbstractProvider<Kundenfeldtyp>, array<int, string>}>
     */
    public static function providerExpectedTables(): array
    {
        return [
            'Kontaktfeldtypen'  => [new Kontaktfeldtypen(), self::KONTAKTFELDTYPEN],
            'Berufsfeldtypen'   => [new Berufsfeldtypen(), self::BERUFSFELDTYPEN],
            'Risikofeldtypen'   => [new Risikofeldtypen(), self::RISIKOFELDTYPEN],
            'Familienfeldtypen' => [new Familienfeldtypen(), self::FAMILIENFELDTYPEN],
        ];
    }

    /**
     * @return array<string, array{AbstractProvider<Kundenfeldtyp>}>
     */
    public static function providerProviders(): array
    {
        return [
            'Kontaktfeldtypen'  => [new Kontaktfeldtypen()],
            'Berufsfeldtypen'   => [new Berufsfeldtypen()],
            'Risikofeldtypen'   => [new Risikofeldtypen()],
            'Familienfeldtypen' => [new Familienfeldtypen()],
        ];
    }

    /**
     * @return list<AbstractProvider<Kundenfeldtyp>>
     */
    private function getProviders(): array
    {
        return [new Kontaktfeldtypen(), new Berufsfeldtypen(), new Risikofeldtypen(), new Familienfeldtypen()];
    }

    /**
     * @param array<int, Kundenfeldtyp> $fieldTypes
     * @return array<int, string>
     */
    private function getNamesById(array $fieldTypes): array
    {
        $namesById = [];
        foreach ($fieldTypes as $fieldTypeId => $fieldType) {
            $namesById[$fieldTypeId] = $fieldType->getName();
        }

        return $namesById;
    }

    /**
     * @dataProvider providerExpectedTables
     * @param AbstractProvider<Kundenfeldtyp> $provider
     * @param array<int, string> $expectedNamesById
     */
    public function testMembersMatchClientFieldTypeTable(AbstractProvider $provider, array $expectedNamesById): void
    {
        $this->assertSame($expectedNamesById, $this->getNamesById($provider->getAll()));
    }

    /**
     * @dataProvider providerExpectedTables
     * @param AbstractProvider<Kundenfeldtyp> $provider
     * @param array<int, string> $expectedNamesById
     */
    public function testIdOfEveryMemberEqualsItsKey(AbstractProvider $provider, array $expectedNamesById): void
    {
        $ids = array_map(static fn (Kundenfeldtyp $fieldType): int => $fieldType->getId(), $provider->getAll());

        $this->assertSame(array_keys($expectedNamesById), array_values($ids));
        $this->assertSame(array_keys($ids), array_values($ids));
    }

    /**
     * @dataProvider providerProviders
     * @param AbstractProvider<Kundenfeldtyp> $provider
     */
    public function testGetOneThrowsForUnknownId(AbstractProvider $provider): void
    {
        $this->expectException(EntryNotFoundException::class);

        $provider->getOne(999);
    }

    /**
     * @dataProvider providerExpectedTables
     * @param AbstractProvider<Kundenfeldtyp> $provider
     * @param array<int, string> $expectedNamesById
     */
    public function testExistsOnlyForOwnIds(AbstractProvider $provider, array $expectedNamesById): void
    {
        $this->assertFalse($provider->exists(999));
        foreach (array_keys($expectedNamesById) as $fieldTypeId) {
            $this->assertTrue($provider->exists($fieldTypeId));
        }
    }

    public function testIdsAreDisjointAcrossProviders(): void
    {
        $allIds = [];
        foreach ($this->getProviders() as $provider) {
            $allIds = array_merge($allIds, array_keys($provider->getAll()));
        }

        $this->assertCount(41, $allIds);
        $this->assertSame($allIds, array_values(array_unique($allIds)));

        sort($allIds);
        $this->assertSame(range(1, 41), $allIds);
    }

    public function testWeitereKontaktfeldtypenExcludeMainContactTypesInIdOrder(): void
    {
        $provider = new Kontaktfeldtypen();

        $ids = array_map(
            static fn (Kundenfeldtyp $fieldType): int => $fieldType->getId(),
            $provider->getWeitereKontaktfeldtypen()
        );

        $this->assertSame([...range(1, 13), 24, 28, 29], $ids);
        $this->assertCount(20, $provider->getAll());
        foreach ([38, 39, 40, 41] as $mainContactTypeId) {
            $this->assertTrue($provider->exists($mainContactTypeId));
        }
    }

    public function testGetHauptkontaktfeldtypenReturnsOnlyMainContactTypesInIdOrder(): void
    {
        $ids = array_map(
            static fn (Kundenfeldtyp $fieldType): int => $fieldType->getId(),
            (new Kontaktfeldtypen())->getHauptkontaktfeldtypen()
        );

        $this->assertSame([38, 39, 40, 41], $ids);
    }

    public function testBetriebsartConstantPointsToBetriebsart(): void
    {
        $fieldType = (new Berufsfeldtypen())->getOne(Berufsfeldtypen::BETRIEBSART);

        $this->assertSame(37, Berufsfeldtypen::BETRIEBSART);
        $this->assertSame('Betriebsart', $fieldType->getName());
    }
}
