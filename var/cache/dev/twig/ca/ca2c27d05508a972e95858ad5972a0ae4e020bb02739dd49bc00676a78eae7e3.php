<?php

/* SyliusShopBundle:Product:index.html.twig */
class __TwigTemplate_0dbe1eb49c65e878de044d56b3b3006908ade8b9289521b6a2ccafdc078d9af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:index.html.twig", 1);
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
        $__internal_a03ab0cbccfbe9ccad5e7301cfec88481303b89cf8d23b45f05c3a43fcc55c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03ab0cbccfbe9ccad5e7301cfec88481303b89cf8d23b45f05c3a43fcc55c54->enter($__internal_a03ab0cbccfbe9ccad5e7301cfec88481303b89cf8d23b45f05c3a43fcc55c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:index.html.twig"));

        $__internal_351fd1a870c6ce425ccaeff6e669d072e3da28bc6b90a45ee8d7b5691cda642c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351fd1a870c6ce425ccaeff6e669d072e3da28bc6b90a45ee8d7b5691cda642c->enter($__internal_351fd1a870c6ce425ccaeff6e669d072e3da28bc6b90a45ee8d7b5691cda642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03ab0cbccfbe9ccad5e7301cfec88481303b89cf8d23b45f05c3a43fcc55c54->leave($__internal_a03ab0cbccfbe9ccad5e7301cfec88481303b89cf8d23b45f05c3a43fcc55c54_prof);

        
        $__internal_351fd1a870c6ce425ccaeff6e669d072e3da28bc6b90a45ee8d7b5691cda642c->leave($__internal_351fd1a870c6ce425ccaeff6e669d072e3da28bc6b90a45ee8d7b5691cda642c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_539766578350b5555b602b0be3cdb55da0124c0caa89189794ad3e6d61353749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539766578350b5555b602b0be3cdb55da0124c0caa89189794ad3e6d61353749->enter($__internal_539766578350b5555b602b0be3cdb55da0124c0caa89189794ad3e6d61353749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e2f944543b3a1308c24f935b43767be1cb19e1d88f0599b37d2e6d29ee3f727f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f944543b3a1308c24f935b43767be1cb19e1d88f0599b37d2e6d29ee3f727f->enter($__internal_e2f944543b3a1308c24f935b43767be1cb19e1d88f0599b37d2e6d29ee3f727f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Index/_header.html.twig", "SyliusShopBundle:Product:index.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/Index/_sidebar.html.twig", "SyliusShopBundle:Product:index.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"twelve wide column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_main.html.twig", "SyliusShopBundle:Product:index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_e2f944543b3a1308c24f935b43767be1cb19e1d88f0599b37d2e6d29ee3f727f->leave($__internal_e2f944543b3a1308c24f935b43767be1cb19e1d88f0599b37d2e6d29ee3f727f_prof);

        
        $__internal_539766578350b5555b602b0be3cdb55da0124c0caa89189794ad3e6d61353749->leave($__internal_539766578350b5555b602b0be3cdb55da0124c0caa89189794ad3e6d61353749_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% include '@SyliusShop/Product/Index/_header.html.twig' %}
<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        {% include '@SyliusShop/Product/Index/_sidebar.html.twig' %}
    </div>
    <div class=\"twelve wide column\">
        {% include '@SyliusShop/Product/Index/_main.html.twig' %}
    </div>
</div>
{% endblock %}
", "SyliusShopBundle:Product:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/index.html.twig");
    }
}
