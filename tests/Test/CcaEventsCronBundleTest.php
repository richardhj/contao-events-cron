<?php

/**
 * This file is part of contao-community-alliance/events-cron.
 *
 * (c) 2013-2018 The Contao Community Alliance.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/events-cron
 * @author     Richard Henkenjohann <richardhenkenjohann@googlemail.com>
 * @copyright  2013-2018 The Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/events-cron/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace ContaoCommunityAlliance\Contao\Events\Cron\Test;

use ContaoCommunityAlliance\Contao\Events\Cron\CcaEventsCronBundle;
use ContaoCommunityAlliance\Contao\Events\Cron\DependencyInjection\CcaEventsCronExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Resource\ComposerResource;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class CcaEventsCronBundleTest
 *
 * @covers \ContaoCommunityAlliance\Contao\Events\Cron\CcaEventsCronBundle
 */
class CcaEventsCronBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new CcaEventsCronBundle();

        $this->assertInstanceOf(CcaEventsCronBundle::class, $bundle);
    }

    public function testReturnsTheContainerExtension()
    {
        $extension = (new CcaEventsCronBundle())->getContainerExtension();

        $this->assertInstanceOf(CcaEventsCronExtension::class, $extension);
    }

    /**
     * @covers \ContaoCommunityAlliance\Contao\Events\Cron\DependencyInjection\CcaEventsCronExtension::load
     */
    public function testLoadExtensionConfiguration()
    {
        $extension = (new CcaEventsCronBundle())->getContainerExtension();
        $container = new ContainerBuilder();

        $extension->load([], $container);

        $this->assertInstanceOf(ComposerResource::class, $container->getResources()[0]);
        $this->assertInstanceOf(FileResource::class, $container->getResources()[1]);
        $this->assertSame(
            \dirname(\dirname(__DIR__)) . '/src/Resources/config/services.yml',
            $container->getResources()[1]->getResource()
        );
    }
}
