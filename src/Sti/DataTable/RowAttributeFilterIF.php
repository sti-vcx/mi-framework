<?php
namespace Sti\DataTable;

interface RowAttributeFilterIF
{
    public function calculateRowClass($row);

    public function calculateRowId($row);
}
