<?php
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Andre Flemming <info(at)nixmuss-design.de>, NixMuss Design
 *
 *  All rights reserved
 *
 *  This script is part of the partyraum-ohligs.de project. The partyraum-ohligs.de project is
 *  closed software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace DasLampe\AfLightbox\Controller;

class FrontendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var \TYPO3\CMS\Core\Resource\ResourceFactory
     * @inject
     */
    protected $resourceFactory;

    public function renderAction() {

        $folder = explode(':', $this->settings['gallery']['flexform']['folderPath']);

        /*$images = \TYPO3\CMS\Core\Resource\Collection\FolderBasedFileCollection::create(
            array(
                'storage' => $folder[0],
                'folder' => $folder[1],
            ),
            true
        );*/

        $defaultStorage = $this->resourceFactory->getStorageObject($folder[0]);
        $folder = $defaultStorage->getFolder($folder[1]);
        $files = $defaultStorage->getFilesInFolder($folder);

        $this->view->assign("images", $files);
    }
}