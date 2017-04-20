<?php

/* SiteBundle:Pages:listeactivites.html.twig */
class __TwigTemplate_71af832df5b183b2a56592df173ef2e585a9dabff0d73e795f2516ffc1ca300b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:listeactivites.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Activité Prévues";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\">
        <h2>Activité Prévues</h2>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 14
            echo "                <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                    <div class=\"col-md-2\">
                        <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"\"><h2 class=\"BodyTitle\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</h2></a>
                    </div>
                    <div class=\"col-md-1\">
                        <p>Lieu : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "location", array()), "html", null, true);
            echo "</p>
                        <p>Date : 20/04/2017</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:listeactivites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  69 => 22,  63 => 19,  56 => 14,  52 => 13,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Pages:listeactivites.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/listeactivites.html.twig");
    }
}
