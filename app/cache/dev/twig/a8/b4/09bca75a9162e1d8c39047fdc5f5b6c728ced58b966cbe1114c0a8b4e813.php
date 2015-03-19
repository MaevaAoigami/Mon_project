<?php

/* ::modulesUsed/nav.html.twig */
class __TwigTemplate_a8b409bca75a9162e1d8c39047fdc5f5b6c728ced58b966cbe1114c0a8b4e813 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Danseuses</a></li>
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pages_danseuses");
            echo "\">Profil</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Commande <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Mon panier</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("facture");
            echo "\">Mes factures</a></li>
          </ul>
        </li>
        ";
        }
        // line 32
        echo "        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("evenements");
        echo "\">Evénements</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">A propos <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("apropos");
        echo "\">A propos de nous</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Nous contacter</a></li>
          </ul>
        </li>
      ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">ADMIN <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("admin_danseuses");
            echo "\">Danseuses</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("admin_evenements");
            echo "\">Evénements</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("admin_categories");
            echo "\">Catégories</a></li>
          </ul>
        </li>
      </ul>
      ";
        }
        // line 54
        echo "      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
        ";
        } else {
            // line 58
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
          <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
        ";
        }
        // line 61
        echo "        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 61,  134 => 59,  129 => 58,  123 => 56,  121 => 55,  118 => 54,  110 => 49,  105 => 47,  100 => 45,  95 => 42,  93 => 41,  87 => 38,  82 => 36,  74 => 32,  67 => 28,  62 => 26,  57 => 23,  55 => 22,  52 => 21,  46 => 19,  44 => 18,  40 => 17,  31 => 11,  19 => 1,);
    }
}
