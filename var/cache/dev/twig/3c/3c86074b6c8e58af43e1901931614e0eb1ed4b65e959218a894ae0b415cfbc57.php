<?php

/* SyliusAdminBundle:Product:_slugField.html.twig */
class __TwigTemplate_c179435f8f28ddc3252a54c88bd5c682d32cb20b2ee0ee1a5c3678a55a6d459f extends Twig_Template
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
        $__internal_91839122a5109a38aae1e7d96ce0571e8638f13492836a3aa88b27eb795a9edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91839122a5109a38aae1e7d96ce0571e8638f13492836a3aa88b27eb795a9edd->enter($__internal_91839122a5109a38aae1e7d96ce0571e8638f13492836a3aa88b27eb795a9edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_slugField.html.twig"));

        $__internal_3c1bffeddfa8a40827dcc3e1ef52d3a2bf2c783c6476a944a295a6c745a53ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1bffeddfa8a40827dcc3e1ef52d3a2bf2c783c6476a944a295a6c745a53ad8->enter($__internal_3c1bffeddfa8a40827dcc3e1ef52d3a2bf2c783c6476a944a295a6c745a53ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_slugField.html.twig"));

        // line 1
        echo "<div class=\"";
        if ($this->getAttribute($this->getAttribute(($context["slugField"] ?? $this->getContext($context, "slugField")), "vars", array()), "required", array())) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["slugField"] ?? $this->getContext($context, "slugField")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'label');
        echo "
    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["slugField"] ?? $this->getContext($context, "slugField")), "vars", array()), "value", array()) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'widget', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_product_slug"))));
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'widget', array("attr" => array("readonly" => "readonly", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_product_slug"))));
            echo "
        <span class=\"ui icon button toggle-product-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'errors');
        echo "
</div>
";
        
        $__internal_91839122a5109a38aae1e7d96ce0571e8638f13492836a3aa88b27eb795a9edd->leave($__internal_91839122a5109a38aae1e7d96ce0571e8638f13492836a3aa88b27eb795a9edd_prof);

        
        $__internal_3c1bffeddfa8a40827dcc3e1ef52d3a2bf2c783c6476a944a295a6c745a53ad8->leave($__internal_3c1bffeddfa8a40827dcc3e1ef52d3a2bf2c783c6476a944a295a6c745a53ad8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  48 => 6,  42 => 4,  40 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{% if slugField.vars.required %}required {% endif %}field{% if slugField.vars.errors|length > 0 %} error{% endif %} ui loadable form\">
    {{ form_label(slugField) }}
    {% if slugField.vars.value == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_product_slug')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_product_slug')}}) }}
        <span class=\"ui icon button toggle-product-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "SyliusAdminBundle:Product:_slugField.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_slugField.html.twig");
    }
}
