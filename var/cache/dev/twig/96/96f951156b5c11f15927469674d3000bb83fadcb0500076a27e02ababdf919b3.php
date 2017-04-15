<?php

/* SyliusAdminBundle::_search.html.twig */
class __TwigTemplate_9c9ebb498142c36058e22e89e6b36c5d90c5265cf3a5e480abe2ae8f59a95df3 extends Twig_Template
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
        $__internal_dd9c143f07f6a7ec11790ae4dd5f106d3ac545f0d4f8f5161d3387f18f3ee1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9c143f07f6a7ec11790ae4dd5f106d3ac545f0d4f8f5161d3387f18f3ee1a1->enter($__internal_dd9c143f07f6a7ec11790ae4dd5f106d3ac545f0d4f8f5161d3387f18f3ee1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_search.html.twig"));

        $__internal_1a173a2ae70744a0a41f5bdf90e912f951cdbe43c06a4e6ee0331e21e70f4bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a173a2ae70744a0a41f5bdf90e912f951cdbe43c06a4e6ee0331e21e70f4bee->enter($__internal_1a173a2ae70744a0a41f5bdf90e912f951cdbe43c06a4e6ee0331e21e70f4bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_search.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <form method=\"get\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search_products"), "html", null, true);
        echo "...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
";
        
        $__internal_dd9c143f07f6a7ec11790ae4dd5f106d3ac545f0d4f8f5161d3387f18f3ee1a1->leave($__internal_dd9c143f07f6a7ec11790ae4dd5f106d3ac545f0d4f8f5161d3387f18f3ee1a1_prof);

        
        $__internal_1a173a2ae70744a0a41f5bdf90e912f951cdbe43c06a4e6ee0331e21e70f4bee->leave($__internal_1a173a2ae70744a0a41f5bdf90e912f951cdbe43c06a4e6ee0331e21e70f4bee_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <form method=\"get\" action=\"{{ path('sylius_admin_product_index') }}\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"{{ 'sylius.ui.search_products'|trans }}...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
", "SyliusAdminBundle::_search.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_search.html.twig");
    }
}
