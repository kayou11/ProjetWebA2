<?php

/* @SyliusShop/Product/Show/Tabs/_content.html.twig */
class __TwigTemplate_5dd039c8dd3002fe68577f29ffb6cc555e90bbf718f434fc3d87e8ea2eea0be7 extends Twig_Template
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
        $__internal_095e049166ecd2ae31a9ed86a0bce974b69ea35e6c42e325f92ff6aead020a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095e049166ecd2ae31a9ed86a0bce974b69ea35e6c42e325f92ff6aead020a43->enter($__internal_095e049166ecd2ae31a9ed86a0bce974b69ea35e6c42e325f92ff6aead020a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_content.html.twig"));

        $__internal_94a57f8a10bd3a8764950ebec59c92264eadf8403e512ba5e3dd6072de2bce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a57f8a10bd3a8764950ebec59c92264eadf8403e512ba5e3dd6072de2bce5b->enter($__internal_94a57f8a10bd3a8764950ebec59c92264eadf8403e512ba5e3dd6072de2bce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_content.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_details.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 3)->display($context);
        
        $__internal_095e049166ecd2ae31a9ed86a0bce974b69ea35e6c42e325f92ff6aead020a43->leave($__internal_095e049166ecd2ae31a9ed86a0bce974b69ea35e6c42e325f92ff6aead020a43_prof);

        
        $__internal_94a57f8a10bd3a8764950ebec59c92264eadf8403e512ba5e3dd6072de2bce5b->leave($__internal_94a57f8a10bd3a8764950ebec59c92264eadf8403e512ba5e3dd6072de2bce5b_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Product/Show/Tabs/_details.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_attributes.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_reviews.html.twig' %}
", "@SyliusShop/Product/Show/Tabs/_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_content.html.twig");
    }
}
