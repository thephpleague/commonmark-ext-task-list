<?php

/*
 * This file is part of the league/commonmark-ext-task-list package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Ext\TaskList;

use League\CommonMark\Extension\TaskList\TaskListItemMarkerParser as CoreParser;
use League\CommonMark\Inline\Parser\InlineParserInterface;
use League\CommonMark\InlineParserContext;

/**
 * @deprecated The league/commonmark-ext-task-list extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class TaskListItemMarkerParser implements InlineParserInterface
{
    private $coreParser;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-task-list is deprecated; use %s from league/commonmark 1.3+ instead', CoreParser::class), E_USER_DEPRECATED);
        $this->coreParser = new CoreParser();
    }

    /**
     * @return string[]
     */
    public function getCharacters(): array
    {
        return $this->coreParser->getCharacters();
    }

    /**
     * @param InlineParserContext $inlineContext
     *
     * @return bool
     */
    public function parse(InlineParserContext $inlineContext): bool
    {
        return $this->coreParser->parse($inlineContext);
    }
}
