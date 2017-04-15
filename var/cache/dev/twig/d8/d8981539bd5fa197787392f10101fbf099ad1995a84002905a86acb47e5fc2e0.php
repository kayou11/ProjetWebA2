<?php

/* SyliusUiBundle:Grid/Action:default.html.twig */
class __TwigTemplate_75e3064f2bb9d0b0826a99466803473efe765b93afc51f8808a9b62934bc16b2 extends Twig_Template
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
        $__internal_8574c67e3df18fd7e1896cedf2a785649879e5533e5d813d566d2b9d34b26060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8574c67e3df18fd7e1896cedf2a785649879e5533e5d813d566d2b9d34b26060->enter($__internal_8574c67e3df18fd7e1896cedf2a785649879e5533e5d813d566d2b9d34b26060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:default.html.twig"));

        $__internal_fd3a82d9ed16538833eb80b8ad512d5e072601bae2c873e9b883f3b7bb83cac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3a82d9ed16538833eb80b8ad512d5e072601bae2c873e9b883f3b7bb83cac6->enter($__internal_fd3a82d9ed16538833eb80b8ad512d5e072601bae2c873e9b883f3b7bb83cac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:default.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:default.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = (($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "route", array()), $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "parameters", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "route", array()), $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "link", array()), "parameters", array()))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->getdefault(($context["path"] ?? $this->getContext($context, "path")), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), null, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()));
        echo "
";
        
        $__internal_8574c67e3df18fd7e1896cedf2a785649879e5533e5d813d566d2b9d34b26060->leave($__internal_8574c67e3df18fd7e1896cedf2a785649879e5533e5d813d566d2b9d34b26060_prof);

        
        $__internal_fd3a82d9ed16538833eb80b8ad512d5e072601bae2c873e9b883f3b7bb83cac6->leave($__internal_fd3a82d9ed16538833eb80b8ad512d5e072601bae2c873e9b883f3b7bb83cac6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path(options.link.route, options.link.parameters)) %}

{{ buttons.default(path, action.label, null, action.icon) }}
", "SyliusUiBundle:Grid/Action:default.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/default.html.twig");
    }
}
