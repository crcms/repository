<?php

namespace CrCms\Repository\Contracts;

use CrCms\Repository\AbstractRepository;

/**
 * Interface QueryMagic.
 */
interface QueryMagic
{
    /**
     * @param QueryRelate        $queryRelate
     * @param AbstractRepository $repository
     *
     * @return QueryRelate
     */
    public function magic(QueryRelate $queryRelate, AbstractRepository $repository): QueryRelate;
}
