<?php

/* SyliusAdminBundle:Common:_channel.html.twig */
class __TwigTemplate_642ea41d53c537372021a127d640bc7efafb46df94d16812a6ff263717f7984c extends Twig_Template
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
        $__internal_43383c590f7b72918ab9093dc6408b1ef1d8b52f43444880c8362dc5a7f21239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43383c590f7b72918ab9093dc6408b1ef1d8b52f43444880c8362dc5a7f21239->enter($__internal_43383c590f7b72918ab9093dc6408b1ef1d8b52f43444880c8362dc5a7f21239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_channel.html.twig"));

        $__internal_294c697de0daedc3b3d9da2580b8931d8b5b714a8a46cf5301d124aa6d514947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294c697de0daedc3b3d9da2580b8931d8b5b714a8a46cf5301d124aa6d514947->enter($__internal_294c697de0daedc3b3d9da2580b8931d8b5b714a8a46cf5301d124aa6d514947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_channel.html.twig"));

        // line 1
        echo "<span class=\"ui small empty circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "name", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "code", array()), "html", null, true);
        echo ")
";
        
        $__internal_43383c590f7b72918ab9093dc6408b1ef1d8b52f43444880c8362dc5a7f21239->leave($__internal_43383c590f7b72918ab9093dc6408b1ef1d8b52f43444880c8362dc5a7f21239_prof);

        
        $__internal_294c697de0daedc3b3d9da2580b8931d8b5b714a8a46cf5301d124aa6d514947->leave($__internal_294c697de0daedc3b3d9da2580b8931d8b5b714a8a46cf5301d124aa6d514947_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common:_channel.html.twig";
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
        return new Twig_Source("<span class=\"ui small empty circular label\" style=\"background-color: {{ channel.color }}\"></span> {{ channel.name }} ({{ channel.code }})
", "SyliusAdminBundle:Common:_channel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/_channel.html.twig");
    }
}
