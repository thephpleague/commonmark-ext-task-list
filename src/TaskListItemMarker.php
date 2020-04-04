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

use League\CommonMark\Inline\Element\AbstractInline;

@trigger_error('league/commonmark-ext-task-list is deprecated; use League\CommonMark\Extension\TaskList\TaskListItemMarker from league/commonmark 1.3+ instead', E_USER_DEPRECATED);
class_alias('League\CommonMark\Extension\TaskList\TaskListItemMarker', 'League\CommonMark\Ext\TaskList\TaskListItemMarker');

if (false) {
    /**
     * @deprecated The league/commonmark-ext-task-list extension is now deprecated. All functionality has been moved into league/commonmark 1.3+, so use that instead.
     */
    final class TaskListItemMarker extends AbstractInline
    {
        protected $checked = false;

        public function __construct(bool $isCompleted)
        {
            $this->checked = $isCompleted;
        }

        public function isChecked(): bool
        {
            return $this->checked;
        }

        public function setChecked(bool $checked): self
        {
            $this->checked = $checked;

            return $this;
        }
    }
}
