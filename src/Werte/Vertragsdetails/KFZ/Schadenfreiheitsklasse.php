<?php

namespace Demv\Werte\Vertragsdetails\KFZ;

enum Schadenfreiheitsklasse: int
{
    case NULL             = 0;
    case EINS             = 1;
    case ZWEI             = 2;
    case DREI             = 3;
    case VIER             = 4;
    case FUENF            = 5;
    case SECHS            = 6;
    case SIEBEN           = 7;
    case ACHT             = 8;
    case NEUN             = 9;
    case ZEHN             = 10;
    case ELF              = 11;
    case ZWOELF           = 12;
    case DREIZEHN         = 13;
    case VIERZEHN         = 14;
    case FUENFZEHN        = 15;
    case SECHSZEHN        = 16;
    case SIEBZEHN         = 17;
    case ACHTZEHN         = 18;
    case NEUNZEHN         = 19;
    case ZWANZIG          = 20;
    case EINUNDZWANZIG    = 21;
    case ZWEIUNDZWANZIG   = 22;
    case DREIUNDZWANZIG   = 23;
    case VIERUNDZWANZIG   = 24;
    case FUENFUNDZWANZIG  = 25;
    case SECHSUNDZWANZIG  = 26;
    case SIEBENUNDZWANZIG = 27;
    case ACHTUNDZWANZIG   = 28;
    case NEUNUNDZWANZIG   = 29;
    case DREISSIG         = 30;
    case EINUNDREISSIG    = 31;
    case ZWEIUNDREISSIG   = 32;
    case DREIUNDREISSIG   = 33;
    case VIERUNDREISSIG   = 34;
    case FUENFUNDREISSIG  = 35;
    case SECHSUNDREISSIG  = 36;
    case SIEBENUNDREISSIG = 37;
    case ACHTUNDREISSIG   = 38;
    case NEUNUNDREISSIG   = 39;
    case VIERZIG          = 40;
    case EINUNDVIERZIG    = 41;
    case ZWEIUNDVIERZIG   = 42;
    case DREIUNDVIERZIG   = 43;
    case VIERUNDVIERZIG   = 44;
    case FUENFUNDVIERZIG  = 45;
    case SECHSUNDVIERZIG  = 46;
    case SIEBENUNDVIERZIG = 47;
    case ACHTUNDVIERZIG   = 48;
    case NEUNUNDVIERZIG   = 49;
    case FUENFZIG         = 50;
    case M                = 51;
    case S                = 52;
    case HALB             = 53;

    public function getLabel(): string
    {
        return match ($this) {
            self::NULL             => '0',
            self::EINS             => '1',
            self::ZWEI             => '2',
            self::DREI             => '3',
            self::VIER             => '4',
            self::FUENF            => '5',
            self::SECHS            => '6',
            self::SIEBEN           => '7',
            self::ACHT             => '8',
            self::NEUN             => '9',
            self::ZEHN             => '10',
            self::ELF              => '11',
            self::ZWOELF           => '12',
            self::DREIZEHN         => '13',
            self::VIERZEHN         => '14',
            self::FUENFZEHN        => '15',
            self::SECHSZEHN        => '16',
            self::SIEBZEHN         => '17',
            self::ACHTZEHN         => '18',
            self::NEUNZEHN         => '19',
            self::ZWANZIG          => '20',
            self::EINUNDZWANZIG    => '21',
            self::ZWEIUNDZWANZIG   => '22',
            self::DREIUNDZWANZIG   => '23',
            self::VIERUNDZWANZIG   => '24',
            self::FUENFUNDZWANZIG  => '25',
            self::SECHSUNDZWANZIG  => '26',
            self::SIEBENUNDZWANZIG => '27',
            self::ACHTUNDZWANZIG   => '28',
            self::NEUNUNDZWANZIG   => '29',
            self::DREISSIG         => '30',
            self::EINUNDREISSIG    => '31',
            self::ZWEIUNDREISSIG   => '32',
            self::DREIUNDREISSIG   => '33',
            self::VIERUNDREISSIG   => '34',
            self::FUENFUNDREISSIG  => '35',
            self::SECHSUNDREISSIG  => '36',
            self::SIEBENUNDREISSIG => '37',
            self::ACHTUNDREISSIG   => '38',
            self::NEUNUNDREISSIG   => '39',
            self::VIERZIG          => '40',
            self::EINUNDVIERZIG    => '41',
            self::ZWEIUNDVIERZIG   => '42',
            self::DREIUNDVIERZIG   => '43',
            self::VIERUNDVIERZIG   => '44',
            self::FUENFUNDVIERZIG  => '45',
            self::SECHSUNDVIERZIG  => '46',
            self::SIEBENUNDVIERZIG => '47',
            self::ACHTUNDVIERZIG   => '48',
            self::NEUNUNDVIERZIG   => '49',
            self::FUENFZIG         => '50',
            self::M                => 'M',
            self::S                => 'S',
            self::HALB             => '1/2',
        };
    }
}
