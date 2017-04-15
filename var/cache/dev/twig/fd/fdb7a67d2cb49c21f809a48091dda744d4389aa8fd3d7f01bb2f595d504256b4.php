<?php

/* SyliusShopBundle::error.html.twig */
class __TwigTemplate_34e6f7d2a9b9463bc749d4d5cbd32abe2b6333d93c0ee4a8fc223aed0bdb8a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e177576336ac534e6fab11d457280fda2840ead3fbf444514a273ef900008a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e177576336ac534e6fab11d457280fda2840ead3fbf444514a273ef900008a1->enter($__internal_0e177576336ac534e6fab11d457280fda2840ead3fbf444514a273ef900008a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error.html.twig"));

        $__internal_c70d4e8601e25977c0d3b62122dfc66732c3328339d6ae89c966ce784d05f8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70d4e8601e25977c0d3b62122dfc66732c3328339d6ae89c966ce784d05f8d9->enter($__internal_c70d4e8601e25977c0d3b62122dfc66732c3328339d6ae89c966ce784d05f8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e177576336ac534e6fab11d457280fda2840ead3fbf444514a273ef900008a1->leave($__internal_0e177576336ac534e6fab11d457280fda2840ead3fbf444514a273ef900008a1_prof);

        
        $__internal_c70d4e8601e25977c0d3b62122dfc66732c3328339d6ae89c966ce784d05f8d9->leave($__internal_c70d4e8601e25977c0d3b62122dfc66732c3328339d6ae89c966ce784d05f8d9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_10f882b2c9904ed2e5ff69f92d7a34a6193ef21f743b53e3f3e11a2a61051082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f882b2c9904ed2e5ff69f92d7a34a6193ef21f743b53e3f3e11a2a61051082->enter($__internal_10f882b2c9904ed2e5ff69f92d7a34a6193ef21f743b53e3f3e11a2a61051082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_43f3a894ec9ed663994c545c9776552ce601a5f4f561aa1bba5c12676df0b430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f3a894ec9ed663994c545c9776552ce601a5f4f561aa1bba5c12676df0b430->enter($__internal_43f3a894ec9ed663994c545c9776552ce601a5f4f561aa1bba5c12676df0b430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2 class=\"ui center aligned icon header\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unexpected_error_occurred"), "html", null, true);
        echo "
    </h2>

";
        
        $__internal_43f3a894ec9ed663994c545c9776552ce601a5f4f561aa1bba5c12676df0b430->leave($__internal_43f3a894ec9ed663994c545c9776552ce601a5f4f561aa1bba5c12676df0b430_prof);

        
        $__internal_10f882b2c9904ed2e5ff69f92d7a34a6193ef21f743b53e3f3e11a2a61051082->leave($__internal_10f882b2c9904ed2e5ff69f92d7a34a6193ef21f743b53e3f3e11a2a61051082_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <h2 class=\"ui center aligned icon header\">
        <img src=\"{{ asset('assets/shop/img/logo.png') }}\" alt=\"Sylius logo\" class=\"ui small image\" />
        <br/><br/>
        {{ 'sylius.ui.unexpected_error_occurred'|trans }}
    </h2>

{% endblock %}
", "SyliusShopBundle::error.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/error.html.twig");
    }
}
