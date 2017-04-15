<?php

/* SyliusAdminBundle:Form:imagesTheme.html.twig */
class __TwigTemplate_b6111e2693451d441c0085d34647eb8047216f61c32f32f95d2b3497fcedbb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/imagesTheme.html.twig", "SyliusAdminBundle:Form:imagesTheme.html.twig", 1);
        $this->blocks = array(
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a88fed0fe894618224c2f018bb221a47772282a9730592147f2c981909739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a88fed0fe894618224c2f018bb221a47772282a9730592147f2c981909739c->enter($__internal_29a88fed0fe894618224c2f018bb221a47772282a9730592147f2c981909739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:imagesTheme.html.twig"));

        $__internal_00970021f70105830d6616f4848267ec7945d0011949aae3a7c966e44363cb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00970021f70105830d6616f4848267ec7945d0011949aae3a7c966e44363cb5e->enter($__internal_00970021f70105830d6616f4848267ec7945d0011949aae3a7c966e44363cb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a88fed0fe894618224c2f018bb221a47772282a9730592147f2c981909739c->leave($__internal_29a88fed0fe894618224c2f018bb221a47772282a9730592147f2c981909739c_prof);

        
        $__internal_00970021f70105830d6616f4848267ec7945d0011949aae3a7c966e44363cb5e->leave($__internal_00970021f70105830d6616f4848267ec7945d0011949aae3a7c966e44363cb5e_prof);

    }

    // line 3
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_7641d5ded6736f092d09c17554c3a3dc463ee1d5d31d9f11f38af93aed8d3408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7641d5ded6736f092d09c17554c3a3dc463ee1d5d31d9f11f38af93aed8d3408->enter($__internal_7641d5ded6736f092d09c17554c3a3dc463ee1d5d31d9f11f38af93aed8d3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_6bbcab53eb2bc9216f599a2a197ebdfe8cb62e52c81a19cb9ca4bf22bec5f0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbcab53eb2bc9216f599a2a197ebdfe8cb62e52c81a19cb9ca4bf22bec5f0af->enter($__internal_6bbcab53eb2bc9216f599a2a197ebdfe8cb62e52c81a19cb9ca4bf22bec5f0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"ui upload box segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
            <label for=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
            ";
        // line 8
        if ( !(null === (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 9
            echo "                <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 11
        echo "            <div class=\"ui hidden element\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
            <div class=\"ui element\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'errors');
        // line 16
        echo "</div>
            ";
        // line 17
        if ((( !(null === $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array())) && (0 != twig_length_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "variants", array())))) &&  !$this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array()))) {
            // line 18
            echo "                <br/>
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "productVariants", array()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_by_phrase", array("productCode" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "code", array()))), "remote_criteria_type" => "contains", "remote_criteria_name" => "phrase", "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_variants_by_code", array("productCode" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "code", array())))));
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6bbcab53eb2bc9216f599a2a197ebdfe8cb62e52c81a19cb9ca4bf22bec5f0af->leave($__internal_6bbcab53eb2bc9216f599a2a197ebdfe8cb62e52c81a19cb9ca4bf22bec5f0af_prof);

        
        $__internal_7641d5ded6736f092d09c17554c3a3dc463ee1d5d31d9f11f38af93aed8d3408->leave($__internal_7641d5ded6736f092d09c17554c3a3dc463ee1d5d31d9f11f38af93aed8d3408_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Form:imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  93 => 19,  90 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 12,  75 => 11,  67 => 9,  65 => 8,  59 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/imagesTheme.html.twig' %}

{% block sylius_product_image_widget %}
    {% spaceless %}
        <div class=\"ui upload box segment\">
            {{ form_row(form.type) }}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
            {% if form.vars.value.path|default(null) is not null %}
                <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            {% endif %}
            <div class=\"ui hidden element\">
                {{ form_widget(form.file) }}
            </div>
            <div class=\"ui element\">
                {{- form_errors(form.file) -}}
            </div>
            {% if product.id is not null and 0 != product.variants|length and not product.simple %}
                <br/>
                {{ form_row(form.productVariants, {'remote_url': path('sylius_admin_ajax_product_variants_by_phrase', {'productCode': product.code}), 'remote_criteria_type': 'contains', 'remote_criteria_name': 'phrase', 'load_edit_url': path('sylius_admin_ajax_product_variants_by_code', {'productCode': product.code})}) }}
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "SyliusAdminBundle:Form:imagesTheme.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
