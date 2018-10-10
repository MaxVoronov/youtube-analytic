<?php declare(strict_types=1);

namespace App\Entity;

class ChannelStatistics
{
    protected $viewCount;
    protected $videoCount;
    protected $subscriberCount;

    public function __construct(int $viewCount = 0, int $videoCount = 0, int $subscriberCount = 0)
    {
        $this->viewCount = $viewCount;
        $this->videoCount = $videoCount;
        $this->subscriberCount = $subscriberCount;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * @return int
     */
    public function getVideoCount(): int
    {
        return $this->videoCount;
    }

    /**
     * @return int
     */
    public function getSubscriberCount(): int
    {
        return $this->subscriberCount;
    }
}
