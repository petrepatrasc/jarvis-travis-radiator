<?php

namespace petrepatrasc\JarvisRadiatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{

    public function indexAction()
    {
        $repositoryInformation = array();

        $repositories = $this->container->getParameter('travis_repositories');

        foreach ($repositories as $repository) {
            $repositoryInformation[] = $this->get('jarvis.travis')->retrieveRepositoryInformationAndBuildStatus($repository);
        }

        return $this->render('JarvisRadiatorBundle:Dashboard:dashboard.html.twig', array(
            'repositories' => $repositoryInformation
        ));
    }
} 