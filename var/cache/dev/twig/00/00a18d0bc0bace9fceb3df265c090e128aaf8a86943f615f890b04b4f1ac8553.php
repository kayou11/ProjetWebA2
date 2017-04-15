<?php

/* SyliusUiBundle:Form/Buttons:_cancel.html.twig */
class __TwigTemplate_998a6741fa59049baad2beb383a2f336e4b2f1c533a9a9b0703c803b541477af extends Twig_Template
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
        $__internal_8109a49cc4a17b4880946b8077b6bcff1beb14c884d8d4c8dd9ec9c89483cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8109a49cc4a17b4880946b8077b6bcff1beb14c884d8d4c8dd9ec9c89483cf4a->enter($__internal_8109a49cc4a17b4880946b8077b6bcff1beb14c884d8d4c8dd9ec9c89483cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_cancel.html.twig"));

        $__internal_c21baf5cad8ef4381378d9128dddf105830784ce13b21ac7baf6e8984cd2f923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21baf5cad8ef4381378d9128dddf105830784ce13b21ac7baf6e8984cd2f923->enter($__internal_c21baf5cad8ef4381378d9128dddf105830784ce13b21ac7baf6e8984cd2f923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_cancel.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("path", $context)) ? (_twig_default_filter(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))), "html", null, true);
        echo "\" class=\"ui button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "</a>
";
        
        $__internal_8109a49cc4a17b4880946b8077b6bcff1beb14c884d8d4c8dd9ec9c89483cf4a->leave($__internal_8109a49cc4a17b4880946b8077b6bcff1beb14c884d8d4c8dd9ec9c89483cf4a_prof);

        
        $__internal_c21baf5cad8ef4381378d9128dddf105830784ce13b21ac7baf6e8984cd2f923->leave($__internal_c21baf5cad8ef4381378d9128dddf105830784ce13b21ac7baf6e8984cd2f923_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_cancel.html.twig";
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
        return new Twig_Source("<a href=\"{{ path|default(app.request.headers.get('referer')) }}\" class=\"ui button\">{{ 'sylius.ui.cancel'|trans }}</a>
", "SyliusUiBundle:Form/Buttons:_cancel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_cancel.html.twig");
    }
}
