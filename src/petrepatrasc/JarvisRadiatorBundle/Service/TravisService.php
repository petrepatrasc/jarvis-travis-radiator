<?php

namespace petrepatrasc\JarvisRadiatorBundle\Service;


use Snide\Travis\Client;
use Snide\Travis\Model\Repository;

class TravisService {

    protected $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function retrieveRepositoryInformationAndBuildStatus($repositoryName) {
        $repository = new Repository($repositoryName);
        $project = $this->client->fetchRepository($repository);

        return $project;
    }
}