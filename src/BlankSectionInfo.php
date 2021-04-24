<?php

declare(strict_types = 1);

namespace Blank;

use OpenDocs\GetRoute;
use OpenDocs\SectionInfo;

class BlankSectionInfo implements SectionInfo
{
    public function getRoutes()
    {

// best_practice_base_exceptions.md
// best_practice_interfaces_for_external_apis.md
// php_for_people_who_know_how_to_code.md
// recommended_libraries.md

        return [

            new GetRoute('', 'Blank\Pages::getIndexPage'),
        ];
    }
}
