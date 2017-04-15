<?php

/* SyliusShopBundle:Product/Show:_tabs.html.twig */
class __TwigTemplate_551322217febcffbd712201a6233c15da27736aa91846d69caa895495313224a extends Twig_Template
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
        $__internal_7ea88d1e8f2110e2aa04c39f6d938ac3d74dab5ea74abd187a5bbec41696337c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea88d1e8f2110e2aa04c39f6d938ac3d74dab5ea74abd187a5bbec41696337c->enter($__internal_7ea88d1e8f2110e2aa04c39f6d938ac3d74dab5ea74abd187a5bbec41696337c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_tabs.html.twig"));

        $__internal_ad64de4fe63d04a883a44f391a6ea39e990591d98b9006270d19cc95accbe384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64de4fe63d04a883a44f391a6ea39e990591d98b9006270d19cc95accbe384->enter($__internal_ad64de4fe63d04a883a44f391a6ea39e990591d98b9006270d19cc95accbe384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_tabs.html.twig"));

        // line 1
        echo "<div class=\"ui top attached large tabular menu\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_menu.html.twig", "SyliusShopBundle:Product/Show:_tabs.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_content.html.twig", "SyliusShopBundle:Product/Show:_tabs.html.twig", 5)->display($context);
        
        $__internal_7ea88d1e8f2110e2aa04c39f6d938ac3d74dab5ea74abd187a5bbec41696337c->leave($__internal_7ea88d1e8f2110e2aa04c39f6d938ac3d74dab5ea74abd187a5bbec41696337c_prof);

        
        $__internal_ad64de4fe63d04a883a44f391a6ea39e990591d98b9006270d19cc95accbe384->leave($__internal_ad64de4fe63d04a883a44f391a6ea39e990591d98b9006270d19cc95accbe384_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui top attached large tabular menu\">
    {% include '@SyliusShop/Product/Show/Tabs/_menu.html.twig' %}
</div>

{% include '@SyliusShop/Product/Show/Tabs/_content.html.twig' %}
", "SyliusShopBundle:Product/Show:_tabs.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_tabs.html.twig");
    }
}
