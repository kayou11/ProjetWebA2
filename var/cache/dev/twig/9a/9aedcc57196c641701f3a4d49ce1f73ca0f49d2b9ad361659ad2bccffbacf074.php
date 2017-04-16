<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45bb271683bca45b92658e81298046cd2e5c00e45779ed9e1ba99dcbdafc3ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bb271683bca45b92658e81298046cd2e5c00e45779ed9e1ba99dcbdafc3ecb->enter($__internal_45bb271683bca45b92658e81298046cd2e5c00e45779ed9e1ba99dcbdafc3ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8f6f29a7ca18fe84b3cb690d5c399c04127b64fb96eb9f1019d41fe2ccf3bbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6f29a7ca18fe84b3cb690d5c399c04127b64fb96eb9f1019d41fe2ccf3bbf6->enter($__internal_8f6f29a7ca18fe84b3cb690d5c399c04127b64fb96eb9f1019d41fe2ccf3bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_45bb271683bca45b92658e81298046cd2e5c00e45779ed9e1ba99dcbdafc3ecb->leave($__internal_45bb271683bca45b92658e81298046cd2e5c00e45779ed9e1ba99dcbdafc3ecb_prof);

        
        $__internal_8f6f29a7ca18fe84b3cb690d5c399c04127b64fb96eb9f1019d41fe2ccf3bbf6->leave($__internal_8f6f29a7ca18fe84b3cb690d5c399c04127b64fb96eb9f1019d41fe2ccf3bbf6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fce9bd2143a5fb1f18eccc90392c9e49d4e3782b2c4b5d94c6cc28db17d342d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce9bd2143a5fb1f18eccc90392c9e49d4e3782b2c4b5d94c6cc28db17d342d0->enter($__internal_fce9bd2143a5fb1f18eccc90392c9e49d4e3782b2c4b5d94c6cc28db17d342d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cef0c28744f678c15a76e884e1cf709605efa6ac0c2a288e16dfe25950b98939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef0c28744f678c15a76e884e1cf709605efa6ac0c2a288e16dfe25950b98939->enter($__internal_cef0c28744f678c15a76e884e1cf709605efa6ac0c2a288e16dfe25950b98939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cef0c28744f678c15a76e884e1cf709605efa6ac0c2a288e16dfe25950b98939->leave($__internal_cef0c28744f678c15a76e884e1cf709605efa6ac0c2a288e16dfe25950b98939_prof);

        
        $__internal_fce9bd2143a5fb1f18eccc90392c9e49d4e3782b2c4b5d94c6cc28db17d342d0->leave($__internal_fce9bd2143a5fb1f18eccc90392c9e49d4e3782b2c4b5d94c6cc28db17d342d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4610d913cc037713485416a7f1d401dcd774b7c46cc8835c25cdbb69e5f33c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4610d913cc037713485416a7f1d401dcd774b7c46cc8835c25cdbb69e5f33c48->enter($__internal_4610d913cc037713485416a7f1d401dcd774b7c46cc8835c25cdbb69e5f33c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0167fe42f9ec4df25c2b9e31d5505bfbc3556053cbba4a580d824d4d739eb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0167fe42f9ec4df25c2b9e31d5505bfbc3556053cbba4a580d824d4d739eb33->enter($__internal_e0167fe42f9ec4df25c2b9e31d5505bfbc3556053cbba4a580d824d4d739eb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0167fe42f9ec4df25c2b9e31d5505bfbc3556053cbba4a580d824d4d739eb33->leave($__internal_e0167fe42f9ec4df25c2b9e31d5505bfbc3556053cbba4a580d824d4d739eb33_prof);

        
        $__internal_4610d913cc037713485416a7f1d401dcd774b7c46cc8835c25cdbb69e5f33c48->leave($__internal_4610d913cc037713485416a7f1d401dcd774b7c46cc8835c25cdbb69e5f33c48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c909a3ccd2d92d33f1374699e30ed7149a42699301ec92ddda71be43088c9a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c909a3ccd2d92d33f1374699e30ed7149a42699301ec92ddda71be43088c9a0c->enter($__internal_c909a3ccd2d92d33f1374699e30ed7149a42699301ec92ddda71be43088c9a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b82e861c62322980e73bc4d95b99d1c428fcde7d45f6845f81a899773bba6397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82e861c62322980e73bc4d95b99d1c428fcde7d45f6845f81a899773bba6397->enter($__internal_b82e861c62322980e73bc4d95b99d1c428fcde7d45f6845f81a899773bba6397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b82e861c62322980e73bc4d95b99d1c428fcde7d45f6845f81a899773bba6397->leave($__internal_b82e861c62322980e73bc4d95b99d1c428fcde7d45f6845f81a899773bba6397_prof);

        
        $__internal_c909a3ccd2d92d33f1374699e30ed7149a42699301ec92ddda71be43088c9a0c->leave($__internal_c909a3ccd2d92d33f1374699e30ed7149a42699301ec92ddda71be43088c9a0c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e1c50755e8a35e156c2538dd05346b401d068b9ebfea0532dedf763e59edb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1c50755e8a35e156c2538dd05346b401d068b9ebfea0532dedf763e59edb89->enter($__internal_2e1c50755e8a35e156c2538dd05346b401d068b9ebfea0532dedf763e59edb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7aaec2ff982ff5039b6569c01d797bc660a724e7f87ac9fa8a347d27da04c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aaec2ff982ff5039b6569c01d797bc660a724e7f87ac9fa8a347d27da04c75->enter($__internal_d7aaec2ff982ff5039b6569c01d797bc660a724e7f87ac9fa8a347d27da04c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7aaec2ff982ff5039b6569c01d797bc660a724e7f87ac9fa8a347d27da04c75->leave($__internal_d7aaec2ff982ff5039b6569c01d797bc660a724e7f87ac9fa8a347d27da04c75_prof);

        
        $__internal_2e1c50755e8a35e156c2538dd05346b401d068b9ebfea0532dedf763e59edb89->leave($__internal_2e1c50755e8a35e156c2538dd05346b401d068b9ebfea0532dedf763e59edb89_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/app/Resources/views/base.html.twig");
    }
}
