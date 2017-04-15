<?php

/* SyliusAdminBundle:Crud/Create:_content.html.twig */
class __TwigTemplate_a49b24de30cb4beb7c84e54bd795936e95ec370b4d75f346a365f07579ea4f6c extends Twig_Template
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
        $__internal_71525058b5057e27447e1c269886a21dca442cb616bf953d43ffd0ddd16a81c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71525058b5057e27447e1c269886a21dca442cb616bf953d43ffd0ddd16a81c6->enter($__internal_71525058b5057e27447e1c269886a21dca442cb616bf953d43ffd0ddd16a81c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_content.html.twig"));

        $__internal_2d7345060e1e7a0f2c955c9f6a1dfaa3962ad2b354adf86cca6555b79728740f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7345060e1e7a0f2c955c9f6a1dfaa3962ad2b354adf86cca6555b79728740f->enter($__internal_2d7345060e1e7a0f2c955c9f6a1dfaa3962ad2b354adf86cca6555b79728740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_content.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), $this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "create"), "method"))) : ($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "create"), "method"))), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "form", array(), "any", true, true)) {
            // line 4
            echo "        ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()), "templates", array()), "form", array()), "SyliusAdminBundle:Crud/Create:_content.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".form"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    ";
        // line 11
        $this->loadTemplate("@SyliusUi/Form/Buttons/_create.html.twig", "SyliusAdminBundle:Crud/Create:_content.html.twig", 11)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))))));
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_71525058b5057e27447e1c269886a21dca442cb616bf953d43ffd0ddd16a81c6->leave($__internal_71525058b5057e27447e1c269886a21dca442cb616bf953d43ffd0ddd16a81c6_prof);

        
        $__internal_2d7345060e1e7a0f2c955c9f6a1dfaa3962ad2b354adf86cca6555b79728740f->leave($__internal_2d7345060e1e7a0f2c955c9f6a1dfaa3962ad2b354adf86cca6555b79728740f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Create:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 13,  56 => 12,  54 => 11,  49 => 9,  46 => 8,  40 => 6,  37 => 5,  34 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path(configuration.vars.route.name|default(configuration.getRouteName('create')), configuration.vars.route.parameters|default({})), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    {% if configuration.vars.templates.form is defined %}
        {% include configuration.vars.templates.form %}
    {% else %}
        {{ form_widget(form) }}
    {% endif %}

    {{ sonata_block_render_event(event_prefix ~ '.form', {'resource': resource}) }}

    {% include '@SyliusUi/Form/Buttons/_create.html.twig' with {'paths': {'cancel': path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({}))}} %}

    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusAdminBundle:Crud/Create:_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Create/_content.html.twig");
    }
}
