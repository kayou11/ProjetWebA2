<?php

/* @SyliusShop/Homepage/index.html.twig */
class __TwigTemplate_da6d81fe8762f33796a85a0f02818914ffe7de6fd6665b03c4723b5700e962b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Homepage/index.html.twig", 1);
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
        $__internal_ede4c7048f7dae4db5fd235608c7088d4b599f0fdf410a54f470f93f60591a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede4c7048f7dae4db5fd235608c7088d4b599f0fdf410a54f470f93f60591a45->enter($__internal_ede4c7048f7dae4db5fd235608c7088d4b599f0fdf410a54f470f93f60591a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $__internal_06711e5182e59cf60e0649ed23db2f2f32bb5b794450e0574704838e3c1fcd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06711e5182e59cf60e0649ed23db2f2f32bb5b794450e0574704838e3c1fcd84->enter($__internal_06711e5182e59cf60e0649ed23db2f2f32bb5b794450e0574704838e3c1fcd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede4c7048f7dae4db5fd235608c7088d4b599f0fdf410a54f470f93f60591a45->leave($__internal_ede4c7048f7dae4db5fd235608c7088d4b599f0fdf410a54f470f93f60591a45_prof);

        
        $__internal_06711e5182e59cf60e0649ed23db2f2f32bb5b794450e0574704838e3c1fcd84->leave($__internal_06711e5182e59cf60e0649ed23db2f2f32bb5b794450e0574704838e3c1fcd84_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad2242aec77d8acbcb761e492a98cd487b31455842929fc2444d1babe9c51f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2242aec77d8acbcb761e492a98cd487b31455842929fc2444d1babe9c51f03->enter($__internal_ad2242aec77d8acbcb761e492a98cd487b31455842929fc2444d1babe9c51f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d09e5eaec2272248d35daa93a2df3aeb89a1b1589ba05c584512b3acbc9dfd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09e5eaec2272248d35daa93a2df3aeb89a1b1589ba05c584512b3acbc9dfd10->enter($__internal_d09e5eaec2272248d35daa93a2df3aeb89a1b1589ba05c584512b3acbc9dfd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h2 class=\"ui horizontal section divider header\">
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.latest_products"), "html", null, true);
        echo "
</h2>
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "
";
        
        $__internal_d09e5eaec2272248d35daa93a2df3aeb89a1b1589ba05c584512b3acbc9dfd10->leave($__internal_d09e5eaec2272248d35daa93a2df3aeb89a1b1589ba05c584512b3acbc9dfd10_prof);

        
        $__internal_ad2242aec77d8acbcb761e492a98cd487b31455842929fc2444d1babe9c51f03->leave($__internal_ad2242aec77d8acbcb761e492a98cd487b31455842929fc2444d1babe9c51f03_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/index.html.twig";
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
<h2 class=\"ui horizontal section divider header\">
    {{ 'sylius.ui.latest_products'|trans }}
</h2>
{{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
{% endblock %}
", "@SyliusShop/Homepage/index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Homepage/index.html.twig");
    }
}
