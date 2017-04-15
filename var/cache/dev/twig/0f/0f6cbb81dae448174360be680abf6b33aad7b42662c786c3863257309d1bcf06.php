<?php

/* SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig */
class __TwigTemplate_e054087547637e7e4f3858431488f6a103c8d21d315c926a8098f52962e306c5 extends Twig_Template
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
        $__internal_d57bc75fdb01e5b66ebf42ec2f59d87269fa511b1b7f2b45ac78dd1f57c80eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57bc75fdb01e5b66ebf42ec2f59d87269fa511b1b7f2b45ac78dd1f57c80eb6->enter($__internal_d57bc75fdb01e5b66ebf42ec2f59d87269fa511b1b7f2b45ac78dd1f57c80eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig"));

        $__internal_afc4ff31121c4983d086617116a102851e486bf5ad224caa843c72749a803ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc4ff31121c4983d086617116a102851e486bf5ad224caa843c72749a803ebc->enter($__internal_afc4ff31121c4983d086617116a102851e486bf5ad224caa843c72749a803ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "user", array()))) {
            // line 2
            echo "    ";
            $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["label"]->getstatus($this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "user", array()), "enabled", array()));
            echo "
";
        } else {
            // line 5
            echo "    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_d57bc75fdb01e5b66ebf42ec2f59d87269fa511b1b7f2b45ac78dd1f57c80eb6->leave($__internal_d57bc75fdb01e5b66ebf42ec2f59d87269fa511b1b7f2b45ac78dd1f57c80eb6_prof);

        
        $__internal_afc4ff31121c4983d086617116a102851e486bf5ad224caa843c72749a803ebc->leave($__internal_afc4ff31121c4983d086617116a102851e486bf5ad224caa843c72749a803ebc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.user is not null %}
    {% import '@SyliusUi/Macro/labels.html.twig' as label %}
    {{ label.status(data.user.enabled) }}
{% else %}
    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> {{ 'sylius.ui.guest'|trans }}
    </span>
{% endif %}
", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Grid/Field/enabled.html.twig");
    }
}
