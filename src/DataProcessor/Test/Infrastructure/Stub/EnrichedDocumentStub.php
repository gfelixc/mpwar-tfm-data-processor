<?php

namespace Mpwar\DataProcessor\Test\Infrastructure\Stub;

use Mpwar\DataProcessor\Domain\EnrichedDocument\EnrichedDocument;
use Mpwar\DataProcessor\Domain\Entity\RawDocument;
use Mpwar\DataProcessor\Domain\EnrichedDocument\Content;

class EnrichedDocumentStub extends Stub
{
    public static function random()
    {

        return self::create(RawDocumentStub::random());
    }

    public static function create(RawDocument $rawDocument)
    {
        return EnrichedDocument::fromRawDocument($rawDocument);
    }

    public static function customContent(RawDocument $rawDocument, Content $content)
    {
        $enrichedDocument = self::create($rawDocument);
        $enrichedDocument->setContent($content);
        return $enrichedDocument;
    }
}