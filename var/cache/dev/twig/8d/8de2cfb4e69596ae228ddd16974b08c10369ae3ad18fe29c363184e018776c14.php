<?php

/* SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig */
class __TwigTemplate_58182491063afbeb218e8e6c13d7e1cc4dd6d3efd09307f7d16cd21c81bbdb33 extends Twig_Template
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
        $__internal_21dd843c462909e49a2f1314831211c0f03ac6c13c8936e8b5fa43fadf190034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dd843c462909e49a2f1314831211c0f03ac6c13c8936e8b5fa43fadf190034->enter($__internal_21dd843c462909e49a2f1314831211c0f03ac6c13c8936e8b5fa43fadf190034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig"));

        $__internal_2dd62e70fb0e9ca4861b0c255ca8b8daec4853c4f4e1e9ea75d67a8661e6ff52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd62e70fb0e9ca4861b0c255ca8b8daec4853c4f4e1e9ea75d67a8661e6ff52->enter($__internal_2dd62e70fb0e9ca4861b0c255ca8b8daec4853c4f4e1e9ea75d67a8661e6ff52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxes\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taxCategory", array()), 'row');
        echo "

    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product_variant." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_taxes"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_21dd843c462909e49a2f1314831211c0f03ac6c13c8936e8b5fa43fadf190034->leave($__internal_21dd843c462909e49a2f1314831211c0f03ac6c13c8936e8b5fa43fadf190034_prof);

        
        $__internal_2dd62e70fb0e9ca4861b0c255ca8b8daec4853c4f4e1e9ea75d67a8661e6ff52->leave($__internal_2dd62e70fb0e9ca4861b0c255ca8b8daec4853c4f4e1e9ea75d67a8661e6ff52_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxes\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h3>
    {{ form_row(form.taxCategory) }}

    {{ sonata_block_render_event('sylius.admin.product_variant.' ~ action ~ '.tab_taxes', {'form': form}) }}
</div>
", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_taxes.html.twig");
    }
}
