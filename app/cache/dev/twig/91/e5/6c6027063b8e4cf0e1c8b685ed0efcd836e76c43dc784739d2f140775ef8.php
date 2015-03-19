<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_91e56c6027063b8e4cf0e1c8b685ed0efcd836e76c43dc784739d2f140775ef8 extends Twig_Template
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
        echo "
<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos danseuses</li>
        <li class=\"active\">
        \t";
        // line 6
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AgenceBundle:Categories:menu"), array());
        // line 7
        echo "        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }
}
