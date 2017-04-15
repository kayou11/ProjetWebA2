<?php

/* SyliusShopBundle:Product/Show:_header.html.twig */
class __TwigTemplate_d3c65a8bf0c73255b9981bd541ab3f13aa4e18b7a745c7586b97968e437a878d extends Twig_Template
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
        $__internal_c095c367b15630530dcea5c82c938fdd9ec04f52617a55bb9d1e1ff6a2af5ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c095c367b15630530dcea5c82c938fdd9ec04f52617a55bb9d1e1ff6a2af5ee6->enter($__internal_c095c367b15630530dcea5c82c938fdd9ec04f52617a55bb9d1e1ff6a2af5ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_header.html.twig"));

        $__internal_4efbeba8a7c0d83d129f36705361426d238efa5ff6c0537b08d9b41318614654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efbeba8a7c0d83d129f36705361426d238efa5ff6c0537b08d9b41318614654->enter($__internal_4efbeba8a7c0d83d129f36705361426d238efa5ff6c0537b08d9b41318614654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_header.html.twig"));

        // line 1
        echo "<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_c095c367b15630530dcea5c82c938fdd9ec04f52617a55bb9d1e1ff6a2af5ee6->leave($__internal_c095c367b15630530dcea5c82c938fdd9ec04f52617a55bb9d1e1ff6a2af5ee6_prof);

        
        $__internal_4efbeba8a7c0d83d129f36705361426d238efa5ff6c0537b08d9b41318614654->leave($__internal_4efbeba8a7c0d83d129f36705361426d238efa5ff6c0537b08d9b41318614654_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">{{ product.name }}</h1>
", "SyliusShopBundle:Product/Show:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
