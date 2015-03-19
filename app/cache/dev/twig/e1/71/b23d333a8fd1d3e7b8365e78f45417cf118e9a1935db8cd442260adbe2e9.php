<?php

/* ::modulesUsed/footer.html.twig */
class __TwigTemplate_e171b23d333a8fd1d3e7b8365e78f45417cf118e9a1935db8cd442260adbe2e9 extends Twig_Template
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
        echo "<footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
        
            <div class=\"row\">
                <div class=\"span4 offset1\">
                    <h4>Informations</h4>
                    <ul class=\"nav nav-stacked\">
                        <!-- va me chercher dans mon controler PagesBundle : dans mon Controller et dans la methode menu -->
                        
                    </ul>
                </div> 

                <div class=\"span4\">
                    <h4>Notre Agence</h4>
                    <p><i class=\"icon-map-marker\"></i>&nbsp;Levallois 92300 - 12 rue Jacques Ibert</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p>Chris Eric & Maëva Ridard</p>
                    <p><i class=\"icon-phone\"></i>&nbsp;Tel: 06 59 41 18 35</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2014 - Agence Opérationnel</p>
                </div>
            </div>
        </div>
    </footer>   ";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
