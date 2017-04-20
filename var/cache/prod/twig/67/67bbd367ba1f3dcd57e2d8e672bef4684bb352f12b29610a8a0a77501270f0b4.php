<?php

/* SiteBundle:Pages:membresbde.html.twig */
class __TwigTemplate_e3097d63c41c3e813d852fb3d4e791e8c77856382526a558d0eb1ca0c9ef19a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:membresbde.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/membresbde.css\" type=\"text/css\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "BDE";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <button onclick=\"\" id=\"BouttonMembreBDE\">Membres du BDE</button>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_contact");
        echo "\"><button onclick=\"\" id=\"BouttonContact\">Contact</button></a><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Vice-Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Secrétaire : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Trésorier : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:membresbde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Pages:membresbde.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/membresbde.html.twig");
    }
}
