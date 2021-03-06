<?php

namespace Api\Http\Controllers\Manga;

use Api\Http\Controllers\RestController;
use Api\Http\Controllers\Traits\RestIndexTrait;
use Api\Http\Controllers\Traits\RestShowTrait;
use Core\Chapter\ChapterManager;

class ChaptersController extends RestController
{
    use RestIndexTrait;
    use RestShowTrait;

    protected static $query = [
        'id',
        'volume',
        'number',
        'title',
        'released_at',
        'created_at',
        'updated_at',
        'prev',
        'next',
        'scans',
        'resources',
        'manga.id',
        'manga.title',
        'manga.slug',
        'manga.genres',
        'manga.cover',
    ];

    protected static $fillable = [];

    /**
     * Construct.
     *
     * @param ChapterManager $manager
     */
    public function __construct(ChapterManager $manager)
    {
        $this->manager = $manager;
        parent::__construct();
    }

    /**
     * Find one by identifier.
     *
     * @param mixed $key
     *
     * @return Chapter
     */
    public function findOneByIdentifier($key)
    {
        return $this->manager->repository->findOneByIdOrSlug($key);
    }

    /**
     * Create a new instance for query.
     *
     * @return QueryBuilder
     */
    public function getQuery()
    {
        return $this->manager->repository->getQuery()->leftJoin('manga as manga', 'manga.id', '=', 'chapters.manga_id')->select('chapters.*');
    }

    /**
     * Parse the key before using it in the query.
     *
     * @param string $key
     *
     * @return string
     */
    public function parseKey($key)
    {
        if ($key === 'number') {
            return \DB::raw('CAST(number as DECIMAL(10,5))');
        }

        return parent::parseKey($key);
    }
}
