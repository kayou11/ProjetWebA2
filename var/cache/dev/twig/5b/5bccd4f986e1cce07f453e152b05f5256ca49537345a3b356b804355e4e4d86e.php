<?php

/* SyliusShopBundle:Product/Show/Tabs:_details.html.twig */
class __TwigTemplate_82b50114b7d8a4b5638bb24cc97a2aa2ddf9ff4756d8dc92b6345f321014d390 extends Twig_Template
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
        $__internal_b92606fb6ae5c658ba3406153d8c7d30def151d79273fc01ca1e9f4983cebb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92606fb6ae5c658ba3406153d8c7d30def151d79273fc01ca1e9f4983cebb2a->enter($__internal_b92606fb6ae5c658ba3406153d8c7d30def151d79273fc01ca1e9f4983cebb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig"));

        $__internal_4d89f94c9087d97e09a94ffd024dbe5696d5fc15075fe9df5c573e9e49f17593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d89f94c9087d97e09a94ffd024dbe5696d5fc15075fe9df5c573e9e49f17593->enter($__internal_4d89f94c9087d97e09a94ffd024dbe5696d5fc15075fe9df5c573e9e49f17593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_details", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

    ";
        // line 4
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_description"), "html", null, true);
            echo ".
    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_b92606fb6ae5c658ba3406153d8c7d30def151d79273fc01ca1e9f4983cebb2a->leave($__internal_b92606fb6ae5c658ba3406153d8c7d30def151d79273fc01ca1e9f4983cebb2a_prof);

        
        $__internal_4d89f94c9087d97e09a94ffd024dbe5696d5fc15075fe9df5c573e9e49f17593->leave($__internal_4d89f94c9087d97e09a94ffd024dbe5696d5fc15075fe9df5c573e9e49f17593_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 7,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_details', {'product': product}) }}

    {% if product.description is not empty %}
        {{ product.description }}
    {% else %}
        {{ 'sylius.ui.no_description'|trans }}.
    {% endif %}
</div>
", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_details.html.twig");
    }
}
