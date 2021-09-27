<?php

namespace Hiberus\Ruizalejos\Console;

use Hiberus\Ruizalejos\Block\Index;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RuizalejosCommand extends Command
{

    /**
     * @param Index $index;
     */
    public function __construct(//Index $index
    )
    {
       //$this->index = $index;
        parent::__construct();

    }

    protected function configure()
    {
        $this->setName('hiberus:ruizalejos')->setDescription('Mostrar datos');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /*$alumnos = $this->index->getAlumno();
        foreach ($alumnos as $al) {
            $output->writeln('<info> Nombre ' . $al->getFirstname() . 'Apellido' . $al->getLastname() . 'Nota' . $al->getMark() .'</info>');
        }*/
        $output->writeln('<info> Nombre Apellido Nota </info>');


    }
}
