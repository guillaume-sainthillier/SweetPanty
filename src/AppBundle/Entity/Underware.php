<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pant
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnderwareRepository")
 */
class Underware extends Pant
{
    /**
     * @return UnderwareFeature
     */
    public function getFeature()
    {
        return parent::getFeature();
    }
}
