<?php

namespace MyVendor\MyProject\Component\Endpoint;

use Ulrack\Web\Common\Endpoint\InputInterface;
use Ulrack\Web\Common\Endpoint\OutputInterface;
use Ulrack\Web\Common\Endpoint\EndpointInterface;

class DefaultEndpoint implements EndpointInterface
{
    /**
     * Invokes the endpoint.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    public function __invoke(
        InputInterface $input,
        OutputInterface $output
    ): void {
        $output->setContentType('application/json');
        $output->setOutput(['message' => 'Welcome to Ulrack!']);
    }
}