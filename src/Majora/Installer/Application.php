<?php

namespace Majora\Installer;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * Class Application.
 *
 * @author LinkValue <contact@link-value.fr>
 */
class Application extends BaseApplication
{
    public function __construct()
    {
        parent::__construct('MajoraInstaller', '@git-version@');
    }
}
