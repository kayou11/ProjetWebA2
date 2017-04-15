<?php

/* SyliusShopBundle:Product:_horizontalList.html.twig */
class __TwigTemplate_689c55765c423f46830fdbf0b9975ebdcf6a6ddd25d2290ff545efa33846ffdd extends Twig_Template
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
        $__internal_6c019dfcf59823d60e11c7f8b6ee70f22c536dbc95af0be904908b8b2c9b4867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c019dfcf59823d60e11c7f8b6ee70f22c536dbc95af0be904908b8b2c9b4867->enter($__internal_6c019dfcf59823d60e11c7f8b6ee70f22c536dbc95af0be904908b8b2c9b4867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_horizontalList.html.twig"));

        $__internal_0b81ee5676ce5883e89f419c938831259ea0e80518c45995bac41e9d3b1dbd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b81ee5676ce5883e89f419c938831259ea0e80518c45995bac41e9d3b1dbd93->enter($__internal_0b81ee5676ce5883e89f419c938831259ea0e80518c45995bac41e9d3b1dbd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_horizontalList.html.twig"));

        // line 1
        echo "<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "            <div class=\"column\">
                ";
            // line 5
            $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:Product:_horizontalList.html.twig", 5)->display($context);
            // line 6
            echo "            </div>
    ";
            // line 7
            if ((0 == ($this->getAttribute($context["loop"], "index", array()) % 4))) {
                // line 8
                echo "    </div>
    <div class=\"row\">
    ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>
";
        
        $__internal_6c019dfcf59823d60e11c7f8b6ee70f22c536dbc95af0be904908b8b2c9b4867->leave($__internal_6c019dfcf59823d60e11c7f8b6ee70f22c536dbc95af0be904908b8b2c9b4867_prof);

        
        $__internal_0b81ee5676ce5883e89f419c938831259ea0e80518c45995bac41e9d3b1dbd93->leave($__internal_0b81ee5676ce5883e89f419c938831259ea0e80518c45995bac41e9d3b1dbd93_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_horizontalList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  61 => 11,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        {% for product in products %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
    {% if 0 == loop.index % 4 %}
    </div>
    <div class=\"row\">
    {% endif %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Product:_horizontalList.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/_horizontalList.html.twig");
    }
}
