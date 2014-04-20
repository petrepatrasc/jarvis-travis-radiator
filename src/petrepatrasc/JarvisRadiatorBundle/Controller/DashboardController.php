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
            'petrepatrasc/ScrumManagerWeb',
            'petrepatrasc/blizzard-starcraft-api',
            'scnakandala/sep_2013',
            'globesoft/dam-o-sansa-viitorului',
            'apache/sling',
            'globesoft/scrum-manager-web',
            'crm-stars/stars-poc',
            'petrepatrasc/starcraft-connection-layer',
        );

        foreach ($repositories as $repository) {
            $repositoryInformation[] = $this->get('jarvis.travis')->retrieveRepositoryInformationAndBuildStatus($repository);
        }

        return $this->render('JarvisRadiatorBundle:Dashboard:dashboard.html.twig', array(
            'repositories' => $repositoryInformation
        ));
    }
} 