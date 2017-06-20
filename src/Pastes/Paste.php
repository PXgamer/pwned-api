<?php

namespace pxgamer\PwnedApi\Pastes;

use pxgamer\PwnedApi\Model;

class Paste extends Model
{
    private $id;
    private $source;
    private $title;
    private $date;
    private $emailCount;

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