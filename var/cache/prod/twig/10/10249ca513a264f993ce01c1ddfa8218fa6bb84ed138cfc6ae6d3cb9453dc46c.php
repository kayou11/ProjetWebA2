<?php

/* SiteBundle:Pages:archives.html.twig */
class __TwigTemplate_fdce83fe089bed75aee8bce2a328353b844fcf35112527b9b3b60a0039c2c611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:archives.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Archives";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\">
        <h2>Archives</h2>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 14
            echo "            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</p>
                    <p>Date : 20/04/2017</p>
                    <p>Nombre d'inscrits : 100<p>
                </div>
            </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  69 => 22,  63 => 19,  56 => 14,  52 => 13,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Pages:archives.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/archives.html.twig");
    }
}
