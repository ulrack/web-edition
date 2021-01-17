<?php

namespace MyVendor\MyProject\Component\Router;

use Ulrack\Web\Common\Router\RouterInterface;
use Ulrack\Web\Common\Endpoint\InputInterface;
use Ulrack\Web\Common\Endpoint\OutputInterface;

class DefaultRouter implements RouterInterface
{
    /**
     * Determines whether the router accepts the request.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return bool
     */
    public function accepts(
        InputInterface $input,
        OutputInterface $output
    ): bool {
        return true;
    }

    /**
     * Resolves the request to an endpoint, executes it and renders the response.
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
        $input->setParameter('endpoint', 'services.default.endpoint');
    }
}