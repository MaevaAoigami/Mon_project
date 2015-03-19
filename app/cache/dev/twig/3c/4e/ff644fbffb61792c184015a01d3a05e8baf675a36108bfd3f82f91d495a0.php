<?php

/* AgenceBundle:Danseuses:index.html.twig */
class __TwigTemplate_3c4eff644fbffb61792c184015a01d3a05e8baf675a36108bfd3f82f91d495a0 extends Twig_Template
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
        echo "<h1>Liste des danseuses</h1>

        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pages_danseuses_new");
        echo "\">
                    Créer votre profil
                </a>
            </li>
        </ul>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Disponibilité</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) == 0)) {
            // line 28
            echo "            <tr>
                <td colspan=\"6\">Aucune danseuse dans votre liste.</td>
            </tr>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 39
            if (($this->getAttribute($context["entity"], "disponible", array()) == 0)) {
                // line 40
                echo "                        Non !
                    ";
            } else {
                // line 42
                echo "                        Oui !
                    ";
            }
            // line 43
            echo " 
                </td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categories", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages_danseuses_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"bouton\" >Voir le profil</a>
                    </li>
                    <li>
                        <a href =\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages_danseuses_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"bouton\">Modifier</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("danseuse_galerie", array("danseuse_id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"bouton\">Ajouter une photo dans votre galerie</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

        
    ";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Danseuses:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 61,  131 => 55,  125 => 52,  119 => 49,  112 => 45,  108 => 43,  104 => 42,  100 => 40,  98 => 39,  93 => 37,  89 => 36,  85 => 35,  82 => 34,  78 => 33,  75 => 32,  69 => 28,  67 => 27,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
