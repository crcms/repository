<?php

namespace CrCms\Repository\Contracts;

/**
 * Interface RepositoryQueryRelate.
 */
interface RepositoryQueryRelate
{
    /**
     * @return QueryRelate
     */
    public function getQueryRelate(): QueryRelate;

    /**
     * @return QueryRelate
     */
    public function newQueryRelate(): QueryRelate;
}
