<?php

// These configurations are active in every environment.

return array(
    'router' => array(
        'short_urls' => true
    ),
    'modules' => array(
        'Templating',
        'Markdown'
    ),
    'Templating' => array(
        'codes' => array(
            404 => 'errors/error_404'
        )
    ),
    'document_root' => '{@root}/docs/'
);
