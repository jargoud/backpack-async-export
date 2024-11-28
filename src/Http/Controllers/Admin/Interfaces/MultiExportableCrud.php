<?php

namespace Thomascombe\BackpackAsyncExport\Http\Controllers\Admin\Interfaces;

interface MultiExportableCrud
{
    public const QUERY_PARAM = 'export';
    public const DEFAULT_EXPORT_NAME = 'default';

    /**
     * @return array<string, mixed>
     */
    public function getAvailableExports(): array;
}
