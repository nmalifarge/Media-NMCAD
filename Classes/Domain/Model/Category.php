<?php
namespace NMCAD\MediaNmcad\Domain\Model;

/***
 *
 * This file is part of the "Media_NMCAD" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Nathan Malifarge <nathan.malifarge@etu.u-bordeaux.fr>
 *           Matthieu Cormelier <matthieu.cormelier@etu.u-bordeaux.fr>
 *           Antoine Dethier <antoine.dethier@etu.u-bordeaux.fr>
 *
 ***/

/**
 * Catégorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
