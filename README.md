Jarvis, an information radiator for Travis CI
=============================================

Jarvis allows your team to quickly check up on the status of your Travis builds. It's intended use is as an information radiator (wallboard).

View the [live demo](http://jarvis.dreamlabs.ro/) here.

Currently supports strictly open source (public) builds, but there are plans to extend to private builds in the future.

In order to configure the list that is required, simple edit your parameters.yml file and add the required builds under
the *travis_repositories* key.

    travis_repositories:
            - petrepatrasc/ScrumManagerWeb
            - petrepatrasc/blizzard-starcraft-api
            - scnakandala/sep_2013
            - globesoft/dam-o-sansa-viitorului
            - apache/sling
            - globesoft/scrum-manager-web
            - crm-stars/stars-poc
            - petrepatrasc/starcraft-connection-layer