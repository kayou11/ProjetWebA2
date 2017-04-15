<?php

/* SyliusUiBundle:Grid/Action:applyTransition.html.twig */
class __TwigTemplate_16b51803aedef9f78664e16dcb45cf8c46af6b5911f77ad6e686e5e222d4f6ac extends Twig_Template
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
        $__internal_6be39bbbe46af2f108c966e549e2b2d84684cdf42c54c9e5014575275cd2f262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be39bbbe46af2f108c966e549e2b2d84684cdf42c54c9e5014575275cd2f262->enter($__internal_6be39bbbe46af2f108c966e549e2b2d84684cdf42c54c9e5014575275cd2f262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:applyTransition.html.twig"));

        $__internal_8a2e51095d426f6dbc23579c24996cbb19f28f6945d420f8887b5eca93b06ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2e51095d426f6dbc23579c24996cbb19f28f6945d420f8887b5eca93b06ffc->enter($__internal_8a2e51095d426f6dbc23579c24996cbb19f28f6945d420f8887b5eca93b06ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:applyTransition.html.twig"));

        // line 1
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can(($context["data"] ?? $this->getContext($context, "data")), $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "transition", array()), $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "graph", array()))) {
            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "route", array()), $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "parameters", array())), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "class", array()), "html", null, true);
            echo " labeled icon button\" type=\"submit\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo " icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array())), "html", null, true);
            echo "</button>
    </form>
";
        }
        
        $__internal_6be39bbbe46af2f108c966e549e2b2d84684cdf42c54c9e5014575275cd2f262->leave($__internal_6be39bbbe46af2f108c966e549e2b2d84684cdf42c54c9e5014575275cd2f262_prof);

        
        $__internal_8a2e51095d426f6dbc23579c24996cbb19f28f6945d420f8887b5eca93b06ffc->leave($__internal_8a2e51095d426f6dbc23579c24996cbb19f28f6945d420f8887b5eca93b06ffc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:applyTransition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sm_can(data, options.transition, options.graph) %}
    <form action=\"{{ path(options.link.route, options.link.parameters) }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable {{ options.class }} labeled icon button\" type=\"submit\"><i class=\"{{ action.icon }} icon\"></i> {{ action.label|trans }}</button>
    </form>
{% endif %}
", "SyliusUiBundle:Grid/Action:applyTransition.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/applyTransition.html.twig");
    }
}
