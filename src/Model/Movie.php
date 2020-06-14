<?php

namespace App\Model;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *     collectionOperations={},
 *     itemOperations={"get",
 *     "get_details": {
 *             "method": "GET",
 *             "path": "/movies/{id}",
 *             "controller": MovieController::class
 *         }
 * }
 * )
 */
class Movie
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string|null
     */
    public $imdbId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string|null
     */
    public $posterPath;

    /**
     * @var string
     */
    public $year;

    /**
     * @var float
     */
    public $rating;

    /**
     * @var int
     */
    public $ratingCount;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getImdbId(): ?string
    {
        return $this->imdbId;
    }

    /**
     * @param string|null $imdbId
     */
    public function setImdbId(?string $imdbId): void
    {
        $this->imdbId = $imdbId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string|null $posterPath
     */
    public function setPosterPath(?string $posterPath): void
    {
        $this->posterPath = $posterPath;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     */
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getRatingCount(): int
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     */
    public function setRatingCount(int $ratingCount): void
    {
        $this->ratingCount = $ratingCount;
    }
}
