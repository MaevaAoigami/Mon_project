<?php

/* AgenceBundle:Default:home.html.twig */
class __TwigTemplate_f07f13433a76b61fc029a4d408d09337c28fc17b4ad661b8ed1d17ff20865452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'connection' => array($this, 'block_connection'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
        <ul class=\"cb-slideshow\">
            <li><span>Image 01</span><div><h3>trans·miss·ion</h3></div></li>
            <li><span>Image 02</span><div><h3>dan·ser</h3></div></li>
            <li><span>Image 03</span><div><h3>gen·e·rer</h3></div></li>
            <li><span>Image 04</span><div><h3>bal·ancer</h3></div></li>
            <li><span>Image 05</span><div><h3>qui·e·tude</h3></div></li>
            <li><span>Image 06</span><div><h3>tri·om·ph·ant</h3></div></li>
        </ul>
        
        <!-- changer la page home contre autre chose --> 
        <div class=\"jumbotron\">
            <div class=\"block\">
\t  \t\t<h1>Opérationnel</h1>
\t  \t\t<p>La danse est l'une des formes les plus parfaites de communication avec l'intelligence infinie</p>
\t  \t\t<p><a class=\"bouton\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("apropos");
        echo "\" role=\"button\">en savoir plus</a></p>
            
            </div>
\t\t</div>

";
    }

    // line 29
    public function block_connection($context, array $blocks = array())
    {
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  76 => 29,  66 => 22,  49 => 7,  46 => 6,  39 => 3,  11 => 1,);
    }
}
