<?php

/* SyliusUiBundle:Grid/Field:rawLabel.html.twig */
class __TwigTemplate_19fa0aa72f7a8354c3ace2ee06020f96c8e10ab37fa907ffde2f4f9824dea43d extends Twig_Template
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
        $__internal_bd2ede0a3a8383eb324585fdea6f6b5928bca26c434228849be0d196c36e9e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2ede0a3a8383eb324585fdea6f6b5928bca26c434228849be0d196c36e9e5a->enter($__internal_bd2ede0a3a8383eb324585fdea6f6b5928bca26c434228849be0d196c36e9e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:rawLabel.html.twig"));

        $__internal_3743e8ff08c28d42a857c30f8afc48fbc069f9c4b1fde76efc78c1f007745739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3743e8ff08c28d42a857c30f8afc48fbc069f9c4b1fde76efc78c1f007745739->enter($__internal_3743e8ff08c28d42a857c30f8afc48fbc069f9c4b1fde76efc78c1f007745739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:rawLabel.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:rawLabel.html.twig", 1)->display(array_merge($context, array("value" => ($context["data"] ?? $this->getContext($context, "data")))));
        
        $__internal_bd2ede0a3a8383eb324585fdea6f6b5928bca26c434228849be0d196c36e9e5a->leave($__internal_bd2ede0a3a8383eb324585fdea6f6b5928bca26c434228849be0d196c36e9e5a_prof);

        
        $__internal_3743e8ff08c28d42a857c30f8afc48fbc069f9c4b1fde76efc78c1f007745739->leave($__internal_3743e8ff08c28d42a857c30f8afc48fbc069f9c4b1fde76efc78c1f007745739_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:rawLabel.html.twig";
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
        return new Twig_Source("{% include '@SyliusUi/Label/_default.html.twig' with {'value': data} %}
", "SyliusUiBundle:Grid/Field:rawLabel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/rawLabel.html.twig");
    }
}
