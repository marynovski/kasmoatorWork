<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/faktury')) {
            // faktury_stat_gov_nip
            if ('/faktury/stat_gov_nip' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FakturyController::statGovNipAjaxAction',  '_route' => 'faktury_stat_gov_nip',);
            }

            // faktury_index
            if ('/faktury' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FakturyController::indexAction',  '_route' => 'faktury_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'faktury_index'));
                }

                return $ret;
            }

            // faktury_new
            if ('/faktury/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FakturyController::newAction',  '_route' => 'faktury_new',);
            }

            // faktury_show
            if (preg_match('#^/faktury/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'faktury_show')), array (  '_controller' => 'AppBundle\\Controller\\FakturyController::showAction',));
            }

            // faktury_edit
            if (preg_match('#^/faktury/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'faktury_edit')), array (  '_controller' => 'AppBundle\\Controller\\FakturyController::editAction',));
            }

            // faktury_delete
            if (preg_match('#^/faktury/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'faktury_delete')), array (  '_controller' => 'AppBundle\\Controller\\FakturyController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/naszefirmy')) {
            // naszefirmy_index
            if ('/naszefirmy' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\NaszeFirmyController::indexAction',  '_route' => 'naszefirmy_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'naszefirmy_index'));
                }

                return $ret;
            }

            // naszefirmy_new
            if ('/naszefirmy/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\NaszeFirmyController::newAction',  '_route' => 'naszefirmy_new',);
            }

            // naszefirmy_show
            if (preg_match('#^/naszefirmy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'naszefirmy_show')), array (  '_controller' => 'AppBundle\\Controller\\NaszeFirmyController::showAction',));
            }

            // naszefirmy_edit
            if (preg_match('#^/naszefirmy/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'naszefirmy_edit')), array (  '_controller' => 'AppBundle\\Controller\\NaszeFirmyController::editAction',));
            }

            // naszefirmy_delete
            if (preg_match('#^/naszefirmy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'naszefirmy_delete')), array (  '_controller' => 'AppBundle\\Controller\\NaszeFirmyController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/wyplatygotowkowe')) {
            // wyplatygotowkowe_index
            if ('/wyplatygotowkowe' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::indexAction',  '_route' => 'wyplatygotowkowe_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'wyplatygotowkowe_index'));
                }

                return $ret;
            }

            // wyplatygotowkowe_new
            if ('/wyplatygotowkowe/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::newAction',  '_route' => 'wyplatygotowkowe_new',);
            }

            // wyplatygotowkowe_show
            if (preg_match('#^/wyplatygotowkowe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyplatygotowkowe_show')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::showAction',));
            }

            // wyplatygotowkowe_edit
            if (preg_match('#^/wyplatygotowkowe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyplatygotowkowe_edit')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::editAction',));
            }

            // wyplatygotowkowe_delete
            if (preg_match('#^/wyplatygotowkowe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyplatygotowkowe_delete')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/wyciagibankowe')) {
            // wyciagibankowe_index
            if ('/wyciagibankowe' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::indexAction',  '_route' => 'wyciagibankowe_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'wyciagibankowe_index'));
                }

                return $ret;
            }

            // wyciagibankowe_zaladuj_plik
            if ('/wyciagibankowe/zaladuj_plik' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::zaladujPlikAction',  '_route' => 'wyciagibankowe_zaladuj_plik',);
            }

            // wyciagibankowe_new
            if ('/wyciagibankowe/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::newAction',  '_route' => 'wyciagibankowe_new',);
            }

            // wyciagibankowe_show
            if (preg_match('#^/wyciagibankowe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyciagibankowe_show')), array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::showAction',));
            }

            // wyciagibankowe_edit
            if (preg_match('#^/wyciagibankowe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyciagibankowe_edit')), array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::editAction',));
            }

            // wyciagibankowe_delete
            if (preg_match('#^/wyciagibankowe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyciagibankowe_delete')), array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/projekty')) {
            // projekty_index
            if ('/projekty' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ProjektyController::indexAction',  '_route' => 'projekty_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'projekty_index'));
                }

                return $ret;
            }

            // projekty_new
            if ('/projekty/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProjektyController::newAction',  '_route' => 'projekty_new',);
            }

            // projekty_show
            if (preg_match('#^/projekty/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projekty_show')), array (  '_controller' => 'AppBundle\\Controller\\ProjektyController::showAction',));
            }

            // projekty_edit
            if (preg_match('#^/projekty/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projekty_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProjektyController::editAction',));
            }

            // projekty_delete
            if (preg_match('#^/projekty/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projekty_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProjektyController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
