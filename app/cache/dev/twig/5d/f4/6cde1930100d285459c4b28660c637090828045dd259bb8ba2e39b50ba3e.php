<?php

/* AgenceBundle:Evenements:index.html.twig */
class __TwigTemplate_5df46cde1930100d285459c4b28660c637090828045dd259bb8ba2e39b50ba3e extends Twig_Template
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
        echo "<h1>Evenements list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Location</th>
                <th>Datehour</th>
                <th>Danseuses</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) == 0)) {
            // line 20
            echo "            <tr>
                <td colspan=\"6\">Aucune danseuse dans votre panier.</td>
            </tr>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_evenements_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dateHour", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateHour", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                    ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "danseuses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["danseuse"]) {
                // line 34
                echo "
                    ";
                // line 35
                if ((twig_length_filter($this->env, $context["danseuse"]) == 0)) {
                    // line 36
                    echo "                        Aucune danseuse présente sur cet évènement.
                    ";
                }
                // line 38
                echo "                        <li> ";
                echo twig_escape_filter($this->env, $context["danseuse"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danseuse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </ul>
                </td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_evenements_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_evenements_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_evenements_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Evenements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  143 => 54,  131 => 48,  125 => 45,  118 => 40,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  88 => 30,  84 => 29,  80 => 28,  74 => 27,  71 => 26,  67 => 25,  64 => 24,  58 => 20,  56 => 19,  39 => 4,  36 => 3,  11 => 1,);
    }
}
