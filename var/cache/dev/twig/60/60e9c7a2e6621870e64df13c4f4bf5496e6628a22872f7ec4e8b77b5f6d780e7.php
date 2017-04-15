<?php

/* SyliusUiBundle:Grid/Action:_link.html.twig */
class __TwigTemplate_843ea0767ec5c37fd6aa071b96288bdc5b0920933d77c0f7e96a44646395d710 extends Twig_Template
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
        $__internal_e500dd4099dfd6d5732bd35c1780a3b52c3f069396fa1d94fd3f867b087a8407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e500dd4099dfd6d5732bd35c1780a3b52c3f069396fa1d94fd3f867b087a8407->enter($__internal_e500dd4099dfd6d5732bd35c1780a3b52c3f069396fa1d94fd3f867b087a8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:_link.html.twig"));

        $__internal_7c920bfec7f3264f47d6b670a9e5d997fdc27ceed09ff7a06dd365dfe37c8164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c920bfec7f3264f47d6b670a9e5d997fdc27ceed09ff7a06dd365dfe37c8164->enter($__internal_7c920bfec7f3264f47d6b670a9e5d997fdc27ceed09ff7a06dd365dfe37c8164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:_link.html.twig"));

        // line 1
        $context["path"] = (($this->getAttribute(($context["link"] ?? null), "url", array(), "any", true, true)) ? ($this->getAttribute(($context["link"] ?? $this->getContext($context, "link")), "url", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["link"] ?? $this->getContext($context, "link")), "route", array()), (($this->getAttribute(($context["link"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["link"] ?? null), "parameters", array()), array())) : (array())))));
        // line 2
        echo "
<a class=\"item\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
        echo "\">";
        if ($this->getAttribute(($context["link"] ?? null), "icon", array(), "any", true, true)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["link"] ?? $this->getContext($context, "link")), "icon", array()), "html", null, true);
            echo " icon\"></i> ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["link"] ?? $this->getContext($context, "link")), "label", array())), "html", null, true);
        echo "</a>
";
        
        $__internal_e500dd4099dfd6d5732bd35c1780a3b52c3f069396fa1d94fd3f867b087a8407->leave($__internal_e500dd4099dfd6d5732bd35c1780a3b52c3f069396fa1d94fd3f867b087a8407_prof);

        
        $__internal_7c920bfec7f3264f47d6b670a9e5d997fdc27ceed09ff7a06dd365dfe37c8164->leave($__internal_7c920bfec7f3264f47d6b670a9e5d997fdc27ceed09ff7a06dd365dfe37c8164_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set path = link.url is defined ? link.url : path(link.route, link.parameters|default([])) %}

<a class=\"item\" href=\"{{ path }}\">{% if link.icon is defined %}<i class=\"{{ link.icon }} icon\"></i> {% endif %}{{ link.label|trans }}</a>
", "SyliusUiBundle:Grid/Action:_link.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/_link.html.twig");
    }
}
