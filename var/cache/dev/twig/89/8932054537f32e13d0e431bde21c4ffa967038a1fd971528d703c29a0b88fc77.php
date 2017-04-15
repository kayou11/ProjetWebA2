<?php

/* SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig */
class __TwigTemplate_8f2c979d433a367ef6bd50ba662f99d6e40b4e0ce78d195e15e0858ed4a7cdcb extends Twig_Template
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
        $__internal_22f796c7da97bb56c08a29963a808b544aa4ebd2d73ed52c1928d283fa683f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f796c7da97bb56c08a29963a808b544aa4ebd2d73ed52c1928d283fa683f8a->enter($__internal_22f796c7da97bb56c08a29963a808b544aa4ebd2d73ed52c1928d283fa683f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        $__internal_738168b130a7baa43e2348fbc3d82427d054a6aa12025af913a4fe7ff8d48e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738168b130a7baa43e2348fbc3d82427d054a6aa12025af913a4fe7ff8d48e61->enter($__internal_738168b130a7baa43e2348fbc3d82427d054a6aa12025af913a4fe7ff8d48e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        // line 1
        echo "<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_render_attribute_forms");
        echo "\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "ui fluid search dropdown", "id" => "sylius_product_attribute_choice")));
        echo "
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_attributes"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_22f796c7da97bb56c08a29963a808b544aa4ebd2d73ed52c1928d283fa683f8a->leave($__internal_22f796c7da97bb56c08a29963a808b544aa4ebd2d73ed52c1928d283fa683f8a_prof);

        
        $__internal_738168b130a7baa43e2348fbc3d82427d054a6aa12025af913a4fe7ff8d48e61->leave($__internal_738168b130a7baa43e2348fbc3d82427d054a6aa12025af913a4fe7ff8d48e61_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"{{ path('sylius_admin_render_attribute_forms') }}\" style=\"margin-bottom: 15px;\">
    {{ form_widget(form, {'attr': {'class': 'ui fluid search dropdown', 'id': 'sylius_product_attribute_choice'}}) }}
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> {{ 'sylius.ui.add_attributes'|trans }}
    </button>
</div>
", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeChoice.html.twig");
    }
}
