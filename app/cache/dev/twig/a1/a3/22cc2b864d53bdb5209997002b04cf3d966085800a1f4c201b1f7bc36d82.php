<?php

/* AgenceBundle:Galerie:index.html.twig */
class __TwigTemplate_a1a322cc2b864d53bdb5209997002b04cf3d966085800a1f4c201b1f7bc36d82 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Galerie list</h1>

    <div class=\"container\">
    \t<div class=\"span9\">
    \t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("danseuse_galerie_new", array("danseuse_id" => (isset($context["danseuse_id"]) ? $context["danseuse_id"] : $this->getContext($context, "danseuse_id")))), "html", null, true);
        echo "\">Ajouter une photo</a>
    \t</div>
    \t<section>
\t\t\t<ul class=\"lb-album\">

\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 14
            echo "\t\t\t\t<li>

\t\t\t\t\t<a href=\"#image-1\">
\t\t\t\t\t\t<img style=\"width:200px\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["galerie"], "getAssetPath", array())), "html", null, true);
            echo "\" alt=\"image01\">
\t\t\t\t\t</a>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"#\">DELETE</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t</ul>
\t\t</section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Galerie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  62 => 17,  57 => 14,  53 => 13,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
