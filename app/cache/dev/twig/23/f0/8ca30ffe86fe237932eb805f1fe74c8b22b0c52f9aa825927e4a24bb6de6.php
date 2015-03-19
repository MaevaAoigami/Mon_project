<?php

/* AgenceBundle:Default:panier/panier.html.twig */
class __TwigTemplate_23f08ca30ffe86fe237932eb805f1fe74c8b22b0c52f9aa825927e4a24bb6de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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
        // line 4
        $context["totalHT"] = 0;
        // line 5
        $context["totalTTC"] = 0;
        // line 7
        $context["refTva"] = array();
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["danseuse"]) {
            // line 9
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danseuse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"span3\">
                ";
        // line 17
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 18
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AgenceBundle:Panier:menu"), array());
        // line 19
        echo "                </div>
\t\t\t\t<div class=\"span9\">

                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    <h2>Votre Demande</h2>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Nombre de jours</th>
                                <th>Prestation journalière</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses"))) == 0)) {
            // line 39
            echo "                                <tr>
                                    <td colspan=\"4\">Aucune danseuse dans votre demande.</td>
                                </tr>
                            ";
        }
        // line 43
        echo "
                            ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["danseuse"]) {
            // line 45
            echo "                            <tr>
                                <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["danseuse"], "id", array()))), "html", null, true);
            echo "\" method=\"GET\">
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["danseuse"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                        </select>&nbsp;
                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["danseuse"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                    </td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "prix", array()), "html", null, true);
            echo " €</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, ($this->getAttribute($context["danseuse"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["danseuse"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                                </form>
                            </tr>

                            ";
            // line 61
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["danseuse"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["danseuse"], "id", array()), array(), "array")));
            // line 62
            echo "
                            ";
            // line 63
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["danseuse"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["danseuse"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "multiplicate", array())));
            // line 64
            echo "
                            ";
            // line 65
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["danseuse"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["danseuse"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "multiplicate", array())))));
            // line 66
            echo "                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danseuse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tbody>
                    </table>
                ";
        // line 70
        if ((twig_length_filter($this->env, (isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses"))) != 0)) {
            // line 71
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>
                    
                    ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 76
                echo "                        <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ":</dt>
                        <dd>";
                // line 77
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo "€</dd>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    
                    <dt>Total:</dt>
                    <dd>";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider ma demande</a>
                ";
        }
        // line 86
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes recherches</a>
            </div>
\t\t
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 86,  228 => 84,  222 => 81,  218 => 79,  210 => 77,  205 => 76,  201 => 75,  196 => 73,  192 => 71,  190 => 70,  186 => 68,  179 => 66,  177 => 65,  174 => 64,  172 => 63,  169 => 62,  167 => 61,  160 => 57,  156 => 56,  151 => 54,  148 => 53,  133 => 51,  129 => 50,  123 => 47,  119 => 46,  116 => 45,  112 => 44,  109 => 43,  103 => 39,  101 => 38,  88 => 27,  79 => 24,  76 => 23,  72 => 22,  67 => 19,  64 => 18,  62 => 17,  56 => 13,  53 => 12,  49 => 2,  43 => 9,  39 => 8,  37 => 7,  35 => 5,  33 => 4,  11 => 2,);
    }
}
