<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1d522c78575d55f0bbec60f4cc0aca8780c2a2b26cc4c8fcafa859ea47013dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
<div class=\"enregistrement\">
<div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4 login\">
                        <h4>Vous n'etes pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer de proceder aux visionnage des profiles.
                        </em>
                        <br /><br /><br><br>
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"bouton\">S'inscrire</a>
                    </div>

                    <!-- ici se trouve la connexion du site interber -->

                    <!-- ici je compte mettre un slider --> 

                    
                    <div class=\"span4 offset2 login\">
                        <h4>Connexion</h4>

                        <!-- path ici requiere c'est pour le path et faire la redirection de la page --> 
                        <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t\t    <label for=\"username\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t\t    <label for=\"password\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t    <input class=\"bouton\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 51,  103 => 47,  96 => 43,  91 => 41,  87 => 40,  82 => 38,  78 => 37,  63 => 25,  47 => 11,  41 => 9,  39 => 8,  36 => 7,  11 => 3,);
    }
}
