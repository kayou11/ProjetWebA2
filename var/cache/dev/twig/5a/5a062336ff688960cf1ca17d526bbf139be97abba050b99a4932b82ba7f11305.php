<?php

/* SyliusChannelBundle:Collector:channel.html.twig */
class __TwigTemplate_7c87bcfaebc5b453f911b36b6e21590fd91c59a869dfb3732abeeb3fae2195a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SyliusChannelBundle:Collector:channel.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5cb672983c952b99d018a071730002aa4897492dddfca19b63107533d98f334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cb672983c952b99d018a071730002aa4897492dddfca19b63107533d98f334->enter($__internal_c5cb672983c952b99d018a071730002aa4897492dddfca19b63107533d98f334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $__internal_eaadd3f217daab241a51856bc84a0eb722a93029be659472dbc6281b5f79071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaadd3f217daab241a51856bc84a0eb722a93029be659472dbc6281b5f79071a->enter($__internal_eaadd3f217daab241a51856bc84a0eb722a93029be659472dbc6281b5f79071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5cb672983c952b99d018a071730002aa4897492dddfca19b63107533d98f334->leave($__internal_c5cb672983c952b99d018a071730002aa4897492dddfca19b63107533d98f334_prof);

        
        $__internal_eaadd3f217daab241a51856bc84a0eb722a93029be659472dbc6281b5f79071a->leave($__internal_eaadd3f217daab241a51856bc84a0eb722a93029be659472dbc6281b5f79071a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c752598805097a47984871bca0b18cb003c153afd666ae9f292eddf2071a808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c752598805097a47984871bca0b18cb003c153afd666ae9f292eddf2071a808a->enter($__internal_c752598805097a47984871bca0b18cb003c153afd666ae9f292eddf2071a808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d43c2decc53f9ee81be2482969919ebd0f905b704988b15b7c0c0f7578060773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43c2decc53f9ee81be2482969919ebd0f905b704988b15b7c0c0f7578060773->enter($__internal_d43c2decc53f9ee81be2482969919ebd0f905b704988b15b7c0c0f7578060773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["status_color"] = (((null === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "channel", array()))) ? ("red") : (""));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@SyliusChannel/Collector/Icon/channel.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "channel", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "channel", array(), "any", false, true), "name", array()), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Channels</b>
            <span class=\"sf-toolbar-status ";
        // line 14
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "channels", array()))) {
            echo "sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "channels", array())), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "channels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "name", array()), "html", null, true);
            echo "</b>
                <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "hostname", array()), "html", null, true);
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "isChannelChangeSupported", array())) {
                echo " (<a href=\"?_channel_code=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "code", array()), "html", null, true);
                echo "\">change</a>)";
            }
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false, "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_d43c2decc53f9ee81be2482969919ebd0f905b704988b15b7c0c0f7578060773->leave($__internal_d43c2decc53f9ee81be2482969919ebd0f905b704988b15b7c0c0f7578060773_prof);

        
        $__internal_c752598805097a47984871bca0b18cb003c153afd666ae9f292eddf2071a808a->leave($__internal_c752598805097a47984871bca0b18cb003c153afd666ae9f292eddf2071a808a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusChannelBundle:Collector:channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  114 => 24,  111 => 23,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  76 => 14,  72 => 12,  70 => 11,  67 => 10,  62 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set status_color = collector.channel is null ? 'red' : '' %}

    {% set icon %}
        {{ include('@SyliusChannel/Collector/Icon/channel.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.channel.name|default('Undefined') }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Channels</b>
            <span class=\"sf-toolbar-status {% if collector.channels is empty %}sf-toolbar-status-red{% endif %}\">{{ collector.channels|length }}</span>
        </div>

        {% for channel in collector.channels %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ channel.name }}</b>
                <span>{{ channel.hostname }}{% if collector.isChannelChangeSupported %} (<a href=\"?_channel_code={{ channel.code }}\">change</a>){% endif %}</span>
            </div>
        {% endfor %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false, status: status_color }) }}
{% endblock %}
", "SyliusChannelBundle:Collector:channel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views/Collector/channel.html.twig");
    }
}
