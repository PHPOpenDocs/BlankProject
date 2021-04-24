<?php

declare(strict_types = 1);

namespace Blank;

use OpenDocs\Breadcrumb;
use OpenDocs\Breadcrumbs;

use OpenDocs\CopyrightInfo;
use OpenDocs\MarkdownRenderer\MarkdownRenderer;
use OpenDocs\Page;
use OpenDocs\PrevNextLinks;
use OpenDocs\Section;



class Pages
{

    public function index(

    ) {

        $contents = "Hello, I am the happy funtime text.";
        return new Page(
            'PHP for people who know how to code.',
            createDefaultEditInfo(),
            [],
            new PrevNextLinks(null, null),
            $contents,
            new CopyrightInfo(
                'Danack',
                'https://github.com/PHPOpenDocs/Blank/blob/master/LICENSE'
            ),
            $breadcrumbs = new Breadcrumbs()
        );
    }
}
