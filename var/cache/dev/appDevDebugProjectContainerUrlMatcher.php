<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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

            // faktury_czy_zaplacono
            if ('/faktury/czy_zaplacono' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FakturyController::czyZaplaconoAjaxAction',  '_route' => 'faktury_czy_zaplacono',);
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

        elseif (0 === strpos($pathinfo, '/operacje')) {
            if (0 === strpos($pathinfo, '/operacje/nieprzypisane')) {
                // operacje_nieprzypisane
                if ('/operacje/nieprzypisane' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::nieprzypisaneOperacjeAction',  '_route' => 'operacje_nieprzypisane',);
                }

                // operacje_ustaw_kategorie
                if (preg_match('#^/operacje/nieprzypisane/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operacje_ustaw_kategorie')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::ustawKategorieAction',));
                }

            }

            // operacje_index
            if ('/operacje' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::indexAction',  '_route' => 'operacje_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'operacje_index'));
                }

                return $ret;
            }

            // operacje_new
            if ('/operacje/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::newAction',  '_route' => 'operacje_new',);
            }

            // operacje_show
            if (preg_match('#^/operacje/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operacje_show')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::showAction',));
            }

            // operacje_edit
            if (preg_match('#^/operacje/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operacje_edit')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::editAction',));
            }

            // operacje_delete
            if (preg_match('#^/operacje/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operacje_delete')), array (  '_controller' => 'AppBundle\\Controller\\OperacjeController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            // platnosci
            if ('/platnosci' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PlatnosciController::indexAction',  '_route' => 'platnosci',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'platnosci'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/podatki')) {
                // podatki_index
                if ('/podatki' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PodatkiController::indexAction',  '_route' => 'podatki_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', 'podatki_index'));
                    }

                    return $ret;
                }

                // podatki_new
                if ('/podatki/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PodatkiController::newAction',  '_route' => 'podatki_new',);
                }

                // podatki_show
                if (preg_match('#^/podatki/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'podatki_show')), array (  '_controller' => 'AppBundle\\Controller\\PodatkiController::showAction',));
                }

                // podatki_edit
                if (preg_match('#^/podatki/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'podatki_edit')), array (  '_controller' => 'AppBundle\\Controller\\PodatkiController::editAction',));
                }

                // podatki_delete
                if (preg_match('#^/podatki/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'podatki_delete')), array (  '_controller' => 'AppBundle\\Controller\\PodatkiController::deleteAction',));
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

            // operacje_zaladuj_plik
            if ('/wyciagibankowe/zaladuj_plik' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\WyciagiBankoweController::zaladujPlikAction',  '_route' => 'operacje_zaladuj_plik',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
