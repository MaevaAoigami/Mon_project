<?php

/* AgenceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_ad94bce56f4dd041d5684ffae5bf4c33270ecf8840d1cd8f6fa978d4076f6087 extends Twig_Template
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
            <ul class=\"thumbnails\">

                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["danseuse"]) {
            // line 15
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["danseuse"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["danseuse"], "image", array()), "name", array()), "html", null, true);
            echo "\" >
                            <div class=\"caption\">
                                <h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["danseuse"], "nom", array()), "html", null, true);
            echo "</h4>
                                <h5>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["danseuse"], "prix", array()), $this->getAttribute($this->getAttribute($context["danseuse"], "tva", array()), "multiplicate", array())), "html", null, true);
            echo " €</h5>

                                <a class=\"bouton\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["danseuse"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                ";
            // line 23
            if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["danseuse"], "id", array()), array(), "array", true, true)) {
                // line 24
                echo "                                    <a class=\"bouton\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["danseuse"], "id", array()))), "html", null, true);
                echo "\">Ajouter à ma demande</a>
                                ";
            }
            // line 26
            echo "
                            </div>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['danseuse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
            
            <div class=\"pagination\">
                ";
        // line 33
        echo $this->env->getExtension('knp_pagination')->render((isset($context["danseuses"]) ? $context["danseuses"] : $this->getContext($context, "danseuses")));
        echo "
            </div>
            <!-- <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div> -->

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AgenceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  99 => 30,  90 => 26,  84 => 24,  82 => 23,  78 => 22,  73 => 20,  69 => 19,  62 => 17,  58 => 15,  54 => 14,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
