<?php
namespace NMCAD\MediaNmcad\Controller;

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
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mediaRepository
     *
     * @var \NMCAD\MediaNmcad\Domain\Repository\MediaRepository
     * @inject
     */
    protected $mediaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \NMCAD\MediaNmcad\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\NMCAD\MediaNmcad\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action recommend
     *
     * @return void
     */
    public function recommendAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
