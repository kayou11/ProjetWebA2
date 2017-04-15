<?php

/* SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig */
class __TwigTemplate_feeb6a9435b04c2fda517453c5ba02fbbef34cc46d9719089481ef963248d601 extends Twig_Template
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
        $__internal_0d611dd273a5729508365f26a904a44a3ad25dfb64048aade8580174fff9f128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d611dd273a5729508365f26a904a44a3ad25dfb64048aade8580174fff9f128->enter($__internal_0d611dd273a5729508365f26a904a44a3ad25dfb64048aade8580174fff9f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig"));

        $__internal_e7be657aaa8b00b4e773b928ea8e9fc7a0b518455cc06985072884d65afa4a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7be657aaa8b00b4e773b928ea8e9fc7a0b518455cc06985072884d65afa4a5f->enter($__internal_e7be657aaa8b00b4e773b928ea8e9fc7a0b518455cc06985072884d65afa4a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(        // line 5
($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))));
        // line 8
        echo "
";
        // line 9
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_0d611dd273a5729508365f26a904a44a3ad25dfb64048aade8580174fff9f128->leave($__internal_0d611dd273a5729508365f26a904a44a3ad25dfb64048aade8580174fff9f128_prof);

        
        $__internal_e7be657aaa8b00b4e773b928ea8e9fc7a0b518455cc06985072884d65afa4a5f->leave($__internal_e7be657aaa8b00b4e773b928ea8e9fc7a0b518455cc06985072884d65afa4a5f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 8,  31 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_breadcrumb.html.twig");
    }
}
