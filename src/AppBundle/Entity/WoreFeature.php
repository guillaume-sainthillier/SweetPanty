<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WoreFeature
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WoreFeatureRepository")
 */
abstract class WoreFeature extends Feature
{
    /**
     * @var int
     *
     * @ORM\Column(name="wore_duration", type="integer")
     */
    private $wore_duration;


    /**
     * Set woreDuration
     *
     * @param integer $woreDuration
     *
     * @return WoreFeature
     */
    public function setWoreDuration($woreDuration)
    {
        $this->wore_duration = $woreDuration;

        return $this;
    }

    /**
     * Get woreDuration
     *
     * @return integer
     */
    public function getWoreDuration()
    {
        return $this->wore_duration;
    }
}
