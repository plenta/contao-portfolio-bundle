<?php

declare(strict_types=1);

/*
 * Contao Portfolio Bundle for Contao Open Source CMS.
 * @copyright  Copyright (c) 2020, Erdmann & Freunde
 * @author     Erdmann & Freunde <https://erdmann-freunde.de>
 * @license    MIT
 * @link       http://github.com/erdmannfreunde/contao-grid
 */

namespace EuF\PortfolioBundle\Models;

/**
 * Reads and writes portfolio items.
 */
class PortfolioModel extends \Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected static $strTable = 'tl_portfolio';
}
