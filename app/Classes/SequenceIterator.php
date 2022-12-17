<?php

namespace Classes;

use Exception;

class SequenceIterator
{
    public $translator;

    public function __construct(Translator $translator) {
        $this->translator = $translator;
    }

    public function iterate($from, $until)
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