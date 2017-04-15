<?php

/* SyliusAdminBundle:Crud/Update:_content.html.twig */
class __TwigTemplate_9e7ce025dd8d13c0a81f476c9ec0e2c4f7d8c6469dd689cc62c56e2b9f0254d1 extends Twig_Template
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
        $__internal_81666ecae666a4266c66642cbacacdb675d9f39b7d876c423dcbb9ca1e162d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81666ecae666a4266c66642cbacacdb675d9f39b7d876c423dcbb9ca1e162d3d->enter($__internal_81666ecae666a4266c66642cbacacdb675d9f39b7d876c423dcbb9ca1e162d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_content.html.twig"));

        $__internal_b34c86e41392688f0393da2ff09fbfe8a41db4c63c9997c23ccc39845b0a1e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34c86e41392688f0393da2ff09fbfe8a41db4c63c9997c23ccc39845b0a1e3c->enter($__internal_b34c86e41392688f0393da2ff09fbfe8a41db4c63c9997c23ccc39845b0a1e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_content.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "update"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array("id" => $this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array())))) : (array("id" => $this->getAttribute(($context["resource"] ?? $this->getContext($context, "resource")), "id", array()))))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "form", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()), "templates", array()), "form", array()), "SyliusAdminBundle:Crud/Update:_content.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".form"), array("resource" => ($context["resource"] ?? $this->getContext($context, "resource")))));
        echo "

    ";
        // line 12
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Crud/Update:_content.html.twig", 12)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configuration"] ?? $this->getContext($context, "configuration")), "getRouteName", array(0 => "index"), "method"), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))))));
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_81666ecae666a4266c66642cbacacdb675d9f39b7d876c423dcbb9ca1e162d3d->leave($__internal_81666ecae666a4266c66642cbacacdb675d9f39b7d876c423dcbb9ca1e162d3d_prof);

        
        $__internal_b34c86e41392688f0393da2ff09fbfe8a41db4c63c9997c23ccc39845b0a1e3c->leave($__internal_b34c86e41392688f0393da2ff09fbfe8a41db4c63c9997c23ccc39845b0a1e3c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 13,  55 => 12,  50 => 10,  47 => 9,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
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
    {{ form_start(form, {'action': path(configuration.getRouteName('update'), configuration.vars.route.parameters|default({ 'id': resource.id })), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    {% if configuration.vars.templates.form is defined %}
        {% include configuration.vars.templates.form %}
    {% else %}
        {{ form_widget(form) }}
    {% endif %}

    {{ sonata_block_render_event(event_prefix ~ '.form', {'resource': resource}) }}

    {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({}))}} %}
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "SyliusAdminBundle:Crud/Update:_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_content.html.twig");
    }
}
