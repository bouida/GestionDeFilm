<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // film
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'film');
            }

            return array (  '_controller' => 'FilmBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'film',);
        }

        if (0 === strpos($pathinfo, '/acteur')) {
            // acteur_ajout
            if ($pathinfo === '/acteur/ajout') {
                return array (  '_controller' => 'FilmBundle\\Controller\\ActeurController::ajoutAction',  '_route' => 'acteur_ajout',);
            }

            // acteur
            if ($pathinfo === '/acteur') {
                return array (  '_controller' => 'FilmBundle\\Controller\\ActeurController::afficheAction',  '_route' => 'acteur',);
            }

            // acteur_modif
            if (0 === strpos($pathinfo, '/acteur/modif') && preg_match('#^/acteur/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acteur_modif')), array (  '_controller' => 'FilmBundle\\Controller\\ActeurController::modifierAction',));
            }

            // acteur_supp
            if (0 === strpos($pathinfo, '/acteur/supp') && preg_match('#^/acteur/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acteur_supp')), array (  '_controller' => 'FilmBundle\\Controller\\ActeurController::supprimerAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
