<?php

namespace Sarfraznawaz2005\ComposerConfirm;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

class ConfirmPlugin implements PluginInterface, EventSubscriberInterface
{
    protected $io;
    protected $composer;

    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            ScriptEvents::PRE_INSTALL_CMD => array(
                array('preInstall', -10000),
            ),
            ScriptEvents::PRE_UPDATE_CMD => array(
                array('preUpdate', -10000),
            ),
        );
    }

    /**
     * @param Event $event
     */
    public function preInstall(Event $event)
    {
        $this->confirm('install');
    }

    /**
     * @param Event $event
     */
    public function preUpdate(Event $event)
    {
        $this->confirm('update');
    }

    /**
     * @param $type
     */
    private function confirm($type)
    {
        if (!$this->io->confirm("<fg=yellow>Are you sure you want to $type ?</>")) {
            $this->io->writeln("<fg=yellow>Skipped</>");
            exit;
        }
    }
}