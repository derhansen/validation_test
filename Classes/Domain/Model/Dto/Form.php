<?php

namespace Derhansen\ValidationTest\Domain\Model\Dto;

class Form
{
    /**
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\Validate("StringLength", options={"maximum": 3})
     */
    protected string $data = '';

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {
        $this->data = $data;
    }
}