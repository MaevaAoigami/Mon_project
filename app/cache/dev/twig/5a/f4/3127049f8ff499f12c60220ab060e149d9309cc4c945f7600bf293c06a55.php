<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_5af43127049f8ff499f12c60220ab060e149d9309cc4c945f7600bf293c06a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'motsClefs' => array($this, 'block_motsClefs'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'connection' => array($this, 'block_connection'),
            'utilisateurs' => array($this, 'block_utilisateurs'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsClefs', $context, $blocks);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_lightbox.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo_lightbox.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.86080.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <!-- ici se trouve la navigation
    =============================== -->   
    ";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('connection', $context, $blocks);
        // line 33
        echo "    <!-- BODY
    ========= -->
    ";
        // line 35
        $this->displayBlock('utilisateurs', $context, $blocks);
        // line 37
        echo "    
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "




    ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Agence Opérationnel";
    }

    // line 6
    public function block_motsClefs($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo " ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_nav($context, array $blocks = array())
    {
        echo " 
        ";
        // line 27
        $this->env->loadTemplate("::modulesUsed/nav.html.twig")->display($context);
        // line 28
        echo "    ";
    }

    // line 30
    public function block_connection($context, array $blocks = array())
    {
        echo " 
        ";
        // line 31
        $this->env->loadTemplate("::modulesUsed/utilisateurs.html.twig")->display($context);
        // line 32
        echo "    ";
    }

    // line 35
    public function block_utilisateurs($context, array $blocks = array())
    {
        echo " 
    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        echo " 
    ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        echo " 
        ";
        // line 46
        $this->env->loadTemplate("::modulesUsed/footer.html.twig")->display($context);
        // line 47
        echo "    ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 52,  210 => 47,  208 => 46,  203 => 45,  196 => 38,  189 => 35,  185 => 32,  183 => 31,  178 => 30,  174 => 28,  172 => 27,  167 => 26,  162 => 20,  156 => 7,  150 => 6,  144 => 5,  138 => 53,  136 => 52,  131 => 50,  127 => 49,  124 => 48,  122 => 45,  115 => 40,  113 => 38,  110 => 37,  108 => 35,  104 => 33,  102 => 30,  99 => 29,  97 => 26,  88 => 21,  86 => 20,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
