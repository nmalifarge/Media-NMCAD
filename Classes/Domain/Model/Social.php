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
 * Réseaux sociaux
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * titre
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * identifiant
     *
     * @var int
     * @validate NotEmpty
     */
    protected $accountName = 0;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the accountName
     *
     * @return int $accountName
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets the accountName
     *
     * @param int $accountName
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
}
