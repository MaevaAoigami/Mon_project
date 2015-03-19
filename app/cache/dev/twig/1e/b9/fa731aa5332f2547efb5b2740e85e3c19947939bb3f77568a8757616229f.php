<?php

/* UtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_1eb9fa731aa5332f2547efb5b2740e85e3c19947939bb3f77568a8757616229f extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"container\">
\t<div class=\"row\">

\t\t<div class=\"span9\">

\t\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashmessage"]) {
            // line 10
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["flashmessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashmessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t
\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashmessage"]) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-error\">
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $context["flashmessage"], "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashmessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t\t\t<h2>Factures</h2>

\t\t\t<form>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Prix TTC</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

\t\t\t\t\t\t";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 34
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\"><center>Aucune facture actuellement</center></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 38
        echo "
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 40
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Référence : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturePDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  112 => 40,  108 => 39,  105 => 38,  99 => 34,  97 => 33,  82 => 20,  73 => 17,  70 => 16,  66 => 15,  63 => 14,  54 => 11,  51 => 10,  47 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}
