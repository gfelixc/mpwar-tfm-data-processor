<?php

namespace Mpwar\DataProcessor\Domain;

interface DocumentFactory
{
    public function build(
        SourceId $sourceDocumentId,
        SourceKeyword $sourceKeyword,
        SourceName $sourceName,
        Content $content,
        CreatedAt $createdAt,
        Author $author,
        AuthorLocation $authorLocation,
        Language $language
    ): Document;
}
