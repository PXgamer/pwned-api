<?php

namespace pxgamer\PwnedApi\Pastes;

use pxgamer\PwnedApi\Model;

/**
 * Class Paste
 */
class Paste extends Model
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $source;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $date;
    /**
     * @var int
     */
    private $emailCount;

    /**
     * @param $oPaste
     * @return $this
     */
    public function populateFields($oPaste)
    {
        $this->id = $oPaste->Id ?? null;
        $this->source = $oPaste->Source ?? null;
        $this->title = $oPaste->Title ?? null;
        $this->date = $oPaste->Date ?? null;
        $this->emailCount = $oPaste->EmailCount ?? null;

        return $this;
    }
}
