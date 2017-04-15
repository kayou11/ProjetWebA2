<?php

/* SyliusAdminBundle:Crud/Update:_header.html.twig */
class __TwigTemplate_3ec5103f2ac304dcd68fd835041569eaa478fc5c824ac7aeefc71c0973422ec4 extends Twig_Template
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
        $__internal_b3d03dfda8580e5eb157c97ca3f141a0f6d4bfd7611429ffefc8cea03318a12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d03dfda8580e5eb157c97ca3f141a0f6d4bfd7611429ffefc8cea03318a12b->enter($__internal_b3d03dfda8580e5eb157c97ca3f141a0f6d4bfd7611429ffefc8cea03318a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_header.html.twig"));

        $__internal_7f8611d58e75adfc8aa89c6dcbf068fa0dbd6958e3b4301459b91e3345a319b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8611d58e75adfc8aa89c6dcbf068fa0dbd6958e3b4301459b91e3345a319b8->enter($__internal_7f8611d58e75adfc8aa89c6dcbf068fa0dbd6958e3b4301459b91e3345a319b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Update/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Update/_headerTitle.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".header"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "
    </div>
    <div class=\"middle aligned column\">
        ";
        // line 9
        try {
            $this->loadTemplate((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array()), "@SyliusAdmin/Crud/_toolbar.html.twig")) : ("@SyliusAdmin/Crud/_toolbar.html.twig")), "SyliusAdminBundle:Crud/Update:_header.html.twig", 9)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 10
        echo "    </div>
</div>
";
        
        $__internal_b3d03dfda8580e5eb157c97ca3f141a0f6d4bfd7611429ffefc8cea03318a12b->leave($__internal_b3d03dfda8580e5eb157c97ca3f141a0f6d4bfd7611429ffefc8cea03318a12b_prof);

        
        $__internal_7f8611d58e75adfc8aa89c6dcbf068fa0dbd6958e3b4301459b91e3345a319b8->leave($__internal_7f8611d58e75adfc8aa89c6dcbf068fa0dbd6958e3b4301459b91e3345a319b8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
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
        {% include configuration.vars.templates.header_title|default('@SyliusAdmin/Crud/Update/_headerTitle.html.twig') %}
        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Crud/Update/_breadcrumb.html.twig') %}

        {{ sonata_block_render_event(event_prefix ~ '.header', {'resource': resource}) }}
    </div>
    <div class=\"middle aligned column\">
        {% include configuration.vars.templates.toolbar|default('@SyliusAdmin/Crud/_toolbar.html.twig') ignore missing %}
    </div>
</div>
", "SyliusAdminBundle:Crud/Update:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_header.html.twig");
    }
}
