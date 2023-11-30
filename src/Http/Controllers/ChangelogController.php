<?php

declare(strict_types=1);

namespace HenryAvila\Changelog\Http\Controllers;

use League\CommonMark\CommonMarkConverter;

class ChangelogController extends \App\Http\Controllers\Controller
{
    public function __invoke()
    {
        $changelogFile = public_path() . '/CHANGELOG.md';

        $changelogMarkdown = file_get_contents($changelogFile);

        return (new CommonMarkConverter())->convert($changelogMarkdown);
    }
}
