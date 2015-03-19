<?php

/* AgenceBundle:Default:modulesUsed/panier.html.twig */
class __TwigTemplate_5c9c7ef9afedbf90df8e4434380963a979fa7f31990018c43d2b69fedd93fae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Votre demande</li>
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                    Aucune danseuse dans votre commande
                ";
        } elseif ((        // line 8
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                    Vous avez 1 danseuse dans votre demande
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " danseuses dans votre demande
                ";
        }
        // line 13
        echo "            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  40 => 11,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
