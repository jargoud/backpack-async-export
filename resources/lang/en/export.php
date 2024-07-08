<?php

return [
    'name' => [
        'singular' => 'export',
        'plurial' => 'exports',
    ],
    'columns' => [
        'user_id' => 'User',
        'export_type' => 'Type',
        'filename' => 'Filename',
        'status' => 'Status',
        'error' => 'Error',
        'completed_at' => 'Completed at',
    ],
    'buttons' => [
        'exports' => 'Export',
        'download' => 'Download',
    ],
    'notifications' => [
        'queued' => 'Export launched! Results will be available when ready on "Export" tab',
        'sync' => 'Export launched in sync! Results available on "Export" tab',
    ],
    'errors' => [
        'global-export' => 'Error during export',
    ],
];
