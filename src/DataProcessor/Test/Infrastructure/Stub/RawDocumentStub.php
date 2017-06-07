<?php

namespace Mpwar\DataProcessor\Test\Infrastructure\Stub;

use Mpwar\DataProcessor\Domain\Entity\RawDocument;

class RawDocumentStub extends Stub
{
    public static function random()
    {

        return self::create();
    }

    public static function create()
    {
        return new RawDocument();
    }
}