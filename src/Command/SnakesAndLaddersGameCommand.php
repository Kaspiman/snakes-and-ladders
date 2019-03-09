<?php

namespace App\Command;

use App\Controller\GameController;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SnakesAndLaddersGameCommand extends Command
{
    protected static $defaultName = 'snakes-and-ladders-game:play';
    /**
     * @var GameController
     */
    private $gameController;

    public function __construct(GameController $gameController)
    {
        $this->gameController = $gameController;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = $this->gameController->run();

        foreach ($result as $step) {
            $output->writeln($step);
        }
    }
}
