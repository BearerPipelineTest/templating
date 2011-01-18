<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Templating;

/**
 * TemplateNameParserInterface parses template name to a template name and an array of options.
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface TemplateNameParserInterface
{
    /**
     * Parses a template to a template name and an array of options.
     *
     * @param string $name A template name
     *
     * @return array An array composed of the template name and an array of options
     */
    function parse($name);
}
