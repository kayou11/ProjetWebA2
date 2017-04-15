<?php

/* SyliusAdminBundle:Taxon:_slugField.html.twig */
class __TwigTemplate_89bfa22b400771061cbf0b5fedeb945a648a251da3de6d92b4eeebeddb2c3cd1 extends Twig_Template
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
        $__internal_eb15ab3512813f9b9cba93fff4cc0532a0ef7a910f42189fd2a2c71e6d36f244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb15ab3512813f9b9cba93fff4cc0532a0ef7a910f42189fd2a2c71e6d36f244->enter($__internal_eb15ab3512813f9b9cba93fff4cc0532a0ef7a910f42189fd2a2c71e6d36f244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

        $__internal_b50731bc05ab1e64d17f38f894449a3cfa0c1fffceb749f642d583b34130d298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50731bc05ab1e64d17f38f894449a3cfa0c1fffceb749f642d583b34130d298->enter($__internal_b50731bc05ab1e64d17f38f894449a3cfa0c1fffceb749f642d583b34130d298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

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
        if (($this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "slug", array()) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'widget', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_taxon_slug"), "data-parent" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"))));
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["slugField"] ?? $this->getContext($context, "slugField")), 'widget', array("attr" => array("readonly" => "readonly", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_taxon_slug"))));
            echo "
        <span class=\"ui icon button toggle-taxon-slug-modification\">
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
        
        $__internal_eb15ab3512813f9b9cba93fff4cc0532a0ef7a910f42189fd2a2c71e6d36f244->leave($__internal_eb15ab3512813f9b9cba93fff4cc0532a0ef7a910f42189fd2a2c71e6d36f244_prof);

        
        $__internal_b50731bc05ab1e64d17f38f894449a3cfa0c1fffceb749f642d583b34130d298->leave($__internal_b50731bc05ab1e64d17f38f894449a3cfa0c1fffceb749f642d583b34130d298_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_slugField.html.twig";
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
    {% if resource.slug == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_taxon_slug'), 'data-parent': app.request.attributes.get('id')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_taxon_slug')}}) }}
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "SyliusAdminBundle:Taxon:_slugField.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_slugField.html.twig");
    }
}
