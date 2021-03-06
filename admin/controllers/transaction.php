<?php
/**
 * @package      Crowdfundingfinance
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

JLoader::register('CrowdfundingControllerTransaction', CROWDFUNDING_PATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'transaction.php');

/**
 * Crowdfunding Finance transaction controller class.
 *
 * @package        Crowdfundingfinance
 * @subpackage     Components
 * @since          1.6
 */
class CrowdfundingfinanceControllerTransaction extends CrowdfundingControllerTransaction
{
    /**
     * Method to get a model object, loading it if required.
     *
     * @param    string $name   The model name. Optional.
     * @param    string $prefix The class prefix. Optional.
     * @param    array  $config Configuration array for model. Optional.
     *
     * @return   CrowdfundingfinanceModelTransaction    The model.
     * @since    1.5
     */
    public function getModel($name = 'Transaction', $prefix = 'CrowdfundingfinanceModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;
    }
}
