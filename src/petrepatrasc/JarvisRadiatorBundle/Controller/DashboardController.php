<?php

namespace petrepatrasc\JarvisRadiatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{

    public function indexAction()
    {
        $repositoryInformation = array();
        $repositories = array(
            'petrepatrasc/starcraft-connection-layer',
            'petrepatrasc/blizzard-starcraft-api'
        );

        foreach ($repositories as $repository) {
            $repositoryInformation[] = $this->get('jarvis.travis')->retrieveRepositoryInformationAndBuildStatus($repository);
        }

        var_dump($repositoryInformation[0]);

        return $this->render('JarvisRadiatorBundle:Dashboard:dashboard.html.twig', array(
            'repositories' => $repositoryInformation
        ));
    }
} 