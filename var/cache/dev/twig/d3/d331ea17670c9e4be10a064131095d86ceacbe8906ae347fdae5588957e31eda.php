<?php

/* SyliusAdminBundle:Crud/Index:_header.html.twig */
class __TwigTemplate_4257922e42898e3e4c2752fe10a9bf20ecf8e422d0e66308849a6bda96e48df3 extends Twig_Template
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
        $__internal_772c7e381d740c7be72101fcbdd44d4d6269f8abff4c7578ebbf93ab5f24d113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772c7e381d740c7be72101fcbdd44d4d6269f8abff4c7578ebbf93ab5f24d113->enter($__internal_772c7e381d740c7be72101fcbdd44d4d6269f8abff4c7578ebbf93ab5f24d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_header.html.twig"));

        $__internal_2edc98966096ce9ed1dc02bc88350e04f6011d62ad1e87c0fdc35a292246ffd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edc98966096ce9ed1dc02bc88350e04f6011d62ad1e87c0fdc35a292246ffd2->enter($__internal_2edc98966096ce9ed1dc02bc88350e04f6011d62ad1e87c0fdc35a292246ffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Index/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Index/_headerTitle.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Crud/Index:_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".header"), array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
    </div>

    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Crud/Index:_header.html.twig", 9)->display($context);
        // line 10
        echo "</div>
";
        
        $__internal_772c7e381d740c7be72101fcbdd44d4d6269f8abff4c7578ebbf93ab5f24d113->leave($__internal_772c7e381d740c7be72101fcbdd44d4d6269f8abff4c7578ebbf93ab5f24d113_prof);

        
        $__internal_2edc98966096ce9ed1dc02bc88350e04f6011d62ad1e87c0fdc35a292246ffd2->leave($__internal_2edc98966096ce9ed1dc02bc88350e04f6011d62ad1e87c0fdc35a292246ffd2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        {% include configuration.vars.templates.header_title|default('@SyliusAdmin/Crud/Index/_headerTitle.html.twig') %}
        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Crud/Index/_breadcrumb.html.twig') %}

        {{ sonata_block_render_event(event_prefix ~ '.header', {'resources': resources}) }}
    </div>

    {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
</div>
", "SyliusAdminBundle:Crud/Index:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Index/_header.html.twig");
    }
}
