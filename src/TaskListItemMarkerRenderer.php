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

use League\CommonMark\ElementRendererInterface;
use League\CommonMark\Extension\TaskList\TaskListItemMarkerRenderer as CoreRenderer;
use League\CommonMark\HtmlElement;
use League\CommonMark\Inline\Element\AbstractInline;
use League\CommonMark\Inline\Renderer\InlineRendererInterface;

/**
 * @deprecated The league/commonmark-ext-task-list extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
 */
final class TaskListItemMarkerRenderer implements InlineRendererInterface
{
    private $coreRenderer;

    public function __construct()
    {
        @trigger_error(sprintf('league/commonmark-ext-task-list is deprecated; use %s from league/commonmark 1.3+ instead', CoreRenderer::class), E_USER_DEPRECATED);
        $this->coreRenderer = new CoreRenderer();
    }

    /**
     * @param AbstractInline           $inline
     * @param ElementRendererInterface $htmlRenderer
     *
     * @return HtmlElement|string|null
     */
    public function render(AbstractInline $inline, ElementRendererInterface $htmlRenderer)
    {
        return $this->coreRenderer->render($inline, $htmlRenderer);
    }
}
