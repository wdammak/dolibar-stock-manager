<?php


namespace App\Repository;


final class ProductRepository
{
    /**
     * @var DbManager
     */
    private $dbManager;

    /**
     * @param DbManager $dbManager
     */
    public function __construct(DbManager $dbManager)
    {
        $this->dbManager = $dbManager;
    }
}