<?php

namespace Classes;

use Exception;

class SequenceIterator
{
    public $translator;

    public function __construct(Translator $translator) {
        $this->translator = $translator;
    }

    /**
     * @throws Exception
     */
    public function iterate($from, $until): string
    {
        $result = '';
        if ($from < 0 || $until < 0) {
            throw new Exception('$from and $until must be positive');
        }

        for ($current = $from; $current <= $until; $current++) {
            $result .= $this->translator->translate($current) . "\n";
        }

        return $result;
    }
}