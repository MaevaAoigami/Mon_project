<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/profile/facture')) {
            // facture
            if ($pathinfo === '/profile/facture') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateurController::factureAction',  '_route' => 'facture',);
            }

            // facturePDF
            if (0 === strpos($pathinfo, '/profile/facture/pdf') && preg_match('#^/profile/facture/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturePDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateurController::facturePDFAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/evenements')) {
                // admin_evenements
                if (rtrim($pathinfo, '/') === '/admin/evenements') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_evenements');
                    }

                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::indexAction',  '_route' => 'admin_evenements',);
                }

                // admin_evenements_show
                if (preg_match('#^/admin/evenements/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_evenements_show')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::showAction',));
                }

                // admin_evenements_new
                if ($pathinfo === '/admin/evenements/new') {
                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::newAction',  '_route' => 'admin_evenements_new',);
                }

                // admin_evenements_create
                if ($pathinfo === '/admin/evenements/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_evenements_create;
                    }

                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::createAction',  '_route' => 'admin_evenements_create',);
                }
                not_admin_evenements_create:

                // admin_evenements_edit
                if (preg_match('#^/admin/evenements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_evenements_edit')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::editAction',));
                }

                // admin_evenements_update
                if (preg_match('#^/admin/evenements/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_evenements_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_evenements_update')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::updateAction',));
                }
                not_admin_evenements_update:

                // admin_evenements_delete
                if (preg_match('#^/admin/evenements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_evenements_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_evenements_delete')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EvenementsController::deleteAction',));
                }
                not_admin_evenements_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categories')) {
                // admin_categories
                if (rtrim($pathinfo, '/') === '/admin/categories') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_categories');
                    }

                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'admin_categories',);
                }

                // admin_categories_show
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_show')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::showAction',));
                }

                // admin_categories_new
                if ($pathinfo === '/admin/categories/new') {
                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::newAction',  '_route' => 'admin_categories_new',);
                }

                // admin_categories_create
                if ($pathinfo === '/admin/categories/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_categories_create;
                    }

                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::createAction',  '_route' => 'admin_categories_create',);
                }
                not_admin_categories_create:

                // admin_categories_edit
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_edit')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::editAction',));
                }

                // admin_categories_update
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_categories_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_update')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::updateAction',));
                }
                not_admin_categories_update:

                // admin_categories_delete
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_categories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_delete')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CategoriesController::deleteAction',));
                }
                not_admin_categories_delete:

            }

        }

        if (0 === strpos($pathinfo, '/pages/danseuses')) {
            // pages_danseuses
            if (rtrim($pathinfo, '/') === '/pages/danseuses') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pages_danseuses');
                }

                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::indexAction',  '_route' => 'pages_danseuses',);
            }

            // pages_danseuses_show
            if (preg_match('#^/pages/danseuses/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_danseuses_show')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::showAction',));
            }

            // pages_danseuses_new
            if ($pathinfo === '/pages/danseuses/new') {
                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::newAction',  '_route' => 'pages_danseuses_new',);
            }

            // pages_danseuses_create
            if ($pathinfo === '/pages/danseuses/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pages_danseuses_create;
                }

                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::createAction',  '_route' => 'pages_danseuses_create',);
            }
            not_pages_danseuses_create:

            // pages_danseuses_edit
            if (preg_match('#^/pages/danseuses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_danseuses_edit')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::editAction',));
            }

            // pages_danseuses_update
            if (preg_match('#^/pages/danseuses/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pages_danseuses_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_danseuses_update')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::updateAction',));
            }
            not_pages_danseuses_update:

            // pages_danseuses_delete
            if (preg_match('#^/pages/danseuses/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pages_danseuses_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_danseuses_delete')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::deleteAction',));
            }
            not_pages_danseuses_delete:

            // pages_danseuses_validate
            if (preg_match('#^/pages/danseuses/(?P<id>[^/]++)/validate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_danseuses_validate')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesController::validateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/danseuses')) {
            // admin_danseuses
            if (rtrim($pathinfo, '/') === '/admin/danseuses') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_danseuses');
                }

                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::indexAction',  '_route' => 'admin_danseuses',);
            }

            if (0 === strpos($pathinfo, '/admin/danseuses/admin')) {
                // admin_danseuses_show
                if (preg_match('#^/admin/danseuses/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_danseuses_show')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::showAction',));
                }

                // admin_danseuses_edit
                if (preg_match('#^/admin/danseuses/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_danseuses_edit')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::editAction',));
                }

                // admin_danseuses_update
                if (preg_match('#^/admin/danseuses/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_danseuses_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_danseuses_update')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::updateAction',));
                }
                not_admin_danseuses_update:

                // admin_danseuses_delete
                if (preg_match('#^/admin/danseuses/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_danseuses_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_danseuses_delete')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::deleteAction',));
                }
                not_admin_danseuses_delete:

                // admin_danseuses_validate
                if (preg_match('#^/admin/danseuses/admin/(?P<id>[^/]++)/validate$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_danseuses_validate')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\DanseusesAdminController::validateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/pages/danseuses')) {
            // danseuse_galerie
            if (preg_match('#^/pages/danseuses/(?P<danseuse_id>[^/]++)/galerie/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'danseuse_galerie');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'danseuse_galerie')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\GalerieController::indexAction',));
            }

            // danseuse_galerie_new
            if (preg_match('#^/pages/danseuses/(?P<danseuse_id>[^/]++)/galerie/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'danseuse_galerie_new')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\GalerieController::createAction',));
            }

            // danseuse_galerie_create
            if (preg_match('#^/pages/danseuses/(?P<danseuse_id>[^/]++)/galerie/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_danseuse_galerie_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'danseuse_galerie_create')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\GalerieController::createAction',));
            }
            not_danseuse_galerie_create:

            // danseuse_galerie_delete
            if (preg_match('#^/pages/danseuses/(?P<danseuse_id>[^/]++)/galerie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_danseuse_galerie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'danseuse_galerie_delete')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\GalerieController::deleteAction',));
            }
            not_danseuse_galerie_delete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contact');
                }

                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ContactController::newAction',  '_route' => 'contact',);
            }

            // contact_create
            if ($pathinfo === '/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_create;
                }

                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ContactController::createAction',  '_route' => 'contact_create',);
            }
            not_contact_create:

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ProduitsController::homeAction',  '_route' => 'home',);
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ProduitsController::produitsAction',));
        }

        // produits
        if ($pathinfo === '/danseuses') {
            return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // presentation
            if (0 === strpos($pathinfo, '/presentation') && preg_match('#^/presentation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PresentationController::presentationAction',));
            }

            // panier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
            }

        }

        // ajouter
        if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::ajouterAction',));
        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/panier')) {
            // livraison
            if ($pathinfo === '/panier/livraison') {
                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
            }

            // validation
            if ($pathinfo === '/panier/validation') {
                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
            }

        }

        // validationCommande
        if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CommandeController::validationCommandeAction',));
        }

        // livraisonAdresseSuppression
        if (0 === strpos($pathinfo, '/panier/livraison/adresse/suppression') && preg_match('#^/panier/livraison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\PanierController::adresseSuppressionAction',));
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'AgenceBundle:Test:testFormulaire',  '_route' => 'test',);
        }

        // evenements
        if ($pathinfo === '/evenements') {
            return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\EventPresentationController::presentationAction',  '_route' => 'evenements',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // adminCommande
                if ($pathinfo === '/admin/commande') {
                    return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CommandeAdminController::commandesAction',  '_route' => 'adminCommande',);
                }

                // adminShowFacture
                if (0 === strpos($pathinfo, '/admin/show/facture') && preg_match('#^/admin/show/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\CommandeAdminController::showFactureAction',));
                }

            }

            // apropos
            if ($pathinfo === '/apropos') {
                return array (  '_controller' => 'Agence\\AgenceBundle\\Controller\\ContactController::aProposAction',  '_route' => 'apropos',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
