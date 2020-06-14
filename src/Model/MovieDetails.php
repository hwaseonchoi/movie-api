<?php

namespace App\Model;

class MovieDetails
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
     * @return string|null
     */
    public function getImdbId(): ?string
    {
        return $this->imdbId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @return int
     */
    public function getRatingCount(): int
    {
        return $this->ratingCount;
    }
}
