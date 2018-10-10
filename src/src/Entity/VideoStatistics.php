<?php declare(strict_types=1);

namespace App\Entity;

class VideoStatistics
{
    protected $likeCount;
    protected $dislikeCount;
    protected $commentCount;
    protected $favoriteCount;

    public function __construct(
        int $likeCount = 0,
        int $dislikeCount = 0,
        int $commentCount = 0,
        int $favoriteCount = 0
    ) {
        $this->likeCount = $likeCount;
        $this->dislikeCount = $dislikeCount;
        $this->commentCount = $commentCount;
        $this->favoriteCount = $favoriteCount;
    }

    /**
     * @return int
     */
    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    /**
     * @return int
     */
    public function getDislikeCount(): int
    {
        return $this->dislikeCount;
    }

    /**
     * @return int
     */
    public function getCommentCount(): int
    {
        return $this->commentCount;
    }

    /**
     * @return int
     */
    public function getFavoriteCount(): int
    {
        return $this->favoriteCount;
    }
}
