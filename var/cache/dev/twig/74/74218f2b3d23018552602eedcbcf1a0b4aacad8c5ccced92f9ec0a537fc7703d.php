<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_a4f70fb3b48d10c6f41358f2e0ac5767598ba199afa565b648b7eb566f6a0c40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfdc7e0c615f3ce0e527867e14d2bb573d80ea30f5c1ef91e95dbde564a03f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdc7e0c615f3ce0e527867e14d2bb573d80ea30f5c1ef91e95dbde564a03f0d->enter($__internal_dfdc7e0c615f3ce0e527867e14d2bb573d80ea30f5c1ef91e95dbde564a03f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $__internal_8e026a0bc0b1c0f162f8d9139fb5cf9b54cf8076d289830742b2b427439e78fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e026a0bc0b1c0f162f8d9139fb5cf9b54cf8076d289830742b2b427439e78fa->enter($__internal_8e026a0bc0b1c0f162f8d9139fb5cf9b54cf8076d289830742b2b427439e78fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfdc7e0c615f3ce0e527867e14d2bb573d80ea30f5c1ef91e95dbde564a03f0d->leave($__internal_dfdc7e0c615f3ce0e527867e14d2bb573d80ea30f5c1ef91e95dbde564a03f0d_prof);

        
        $__internal_8e026a0bc0b1c0f162f8d9139fb5cf9b54cf8076d289830742b2b427439e78fa->leave($__internal_8e026a0bc0b1c0f162f8d9139fb5cf9b54cf8076d289830742b2b427439e78fa_prof);

    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_06c728033d9d8e28d7b9bc39da9356f913613c9a66eb312f686f3ba1f92a78ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c728033d9d8e28d7b9bc39da9356f913613c9a66eb312f686f3ba1f92a78ef->enter($__internal_06c728033d9d8e28d7b9bc39da9356f913613c9a66eb312f686f3ba1f92a78ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_ff4959e05791fc03e031e33d5540b6487dfbf74b4dbaddc7d187cbfd6cf69155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4959e05791fc03e031e33d5540b6487dfbf74b4dbaddc7d187cbfd6cf69155->enter($__internal_ff4959e05791fc03e031e33d5540b6487dfbf74b4dbaddc7d187cbfd6cf69155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
        
        $__internal_ff4959e05791fc03e031e33d5540b6487dfbf74b4dbaddc7d187cbfd6cf69155->leave($__internal_ff4959e05791fc03e031e33d5540b6487dfbf74b4dbaddc7d187cbfd6cf69155_prof);

        
        $__internal_06c728033d9d8e28d7b9bc39da9356f913613c9a66eb312f686f3ba1f92a78ef->leave($__internal_06c728033d9d8e28d7b9bc39da9356f913613c9a66eb312f686f3ba1f92a78ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSOAuthServerBundle::layout.html.twig\" %}

{% block fos_oauth_server_content %}
{% include \"FOSOAuthServerBundle:Authorize:authorize_content.html.twig\" %}
{% endblock fos_oauth_server_content %}
", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
