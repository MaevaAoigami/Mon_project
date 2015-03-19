<?php

/* AgenceBundle:Default:evenements/evenements.html.twig */
class __TwigTemplate_3fafd10d1d2fe78e50f70acc8358ff50eee64c60d8e7c0741b5467070a909b23 extends Twig_Template
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
        echo "
<div class=\"container\">
    <div class=\"row\">
\t<div class=\"span3\">
        ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "    </div>

    <div class=\"span9\">
        <div class=\"row\">
            <div class=\"span5\">
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 15
            echo "                ";
            if ((twig_length_filter($this->env, $context["event"]) != 0)) {
                // line 16
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["event"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "image", array()), "name", array()), "html", null, true);
                echo "\">
            </div>

            <div class=\"span4\">
                <h4>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</h4>
                <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
                echo "</p>
                <p>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateHour", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
            </div>
            ";
            } else {
                // line 25
                echo "                Il n'y a pas d'événements pour le moment.
            ";
            }
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:evenements/evenements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  89 => 27,  85 => 25,  79 => 22,  75 => 21,  71 => 20,  61 => 16,  58 => 15,  54 => 14,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
