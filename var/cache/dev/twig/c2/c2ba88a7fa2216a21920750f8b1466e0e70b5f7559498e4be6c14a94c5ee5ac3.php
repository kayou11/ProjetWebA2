<?php

/* SyliusChannelBundle:Collector:channel.html.twig */
class __TwigTemplate_174084f71b07dc2dc26171cd6b934bc23ca8399e285f8c5c8b15780d288c059b extends Twig_Template
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
        $__internal_ee8d6004c773f78a66df75f58647079364ae31b7d8497fc6c2204dac8893c81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8d6004c773f78a66df75f58647079364ae31b7d8497fc6c2204dac8893c81a->enter($__internal_ee8d6004c773f78a66df75f58647079364ae31b7d8497fc6c2204dac8893c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $__internal_58d6950d4e0618fb0cc4ed911ebd1158475b8f48d7947e46cdcddd4f858d8a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d6950d4e0618fb0cc4ed911ebd1158475b8f48d7947e46cdcddd4f858d8a7d->enter($__internal_58d6950d4e0618fb0cc4ed911ebd1158475b8f48d7947e46cdcddd4f858d8a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusChannelBundle:Collector:channel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee8d6004c773f78a66df75f58647079364ae31b7d8497fc6c2204dac8893c81a->leave($__internal_ee8d6004c773f78a66df75f58647079364ae31b7d8497fc6c2204dac8893c81a_prof);

        
        $__internal_58d6950d4e0618fb0cc4ed911ebd1158475b8f48d7947e46cdcddd4f858d8a7d->leave($__internal_58d6950d4e0618fb0cc4ed911ebd1158475b8f48d7947e46cdcddd4f858d8a7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd8db9b9656f07bc684dfa2dbc9b25d77a10b0bb479eacc4388c693af24c6e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8db9b9656f07bc684dfa2dbc9b25d77a10b0bb479eacc4388c693af24c6e77->enter($__internal_cd8db9b9656f07bc684dfa2dbc9b25d77a10b0bb479eacc4388c693af24c6e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b962fb56e726c289ee3e376b84048115a1e47dcfc308a22aaa284464d2d5fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b962fb56e726c289ee3e376b84048115a1e47dcfc308a22aaa284464d2d5fc1->enter($__internal_6b962fb56e726c289ee3e376b84048115a1e47dcfc308a22aaa284464d2d5fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6b962fb56e726c289ee3e376b84048115a1e47dcfc308a22aaa284464d2d5fc1->leave($__internal_6b962fb56e726c289ee3e376b84048115a1e47dcfc308a22aaa284464d2d5fc1_prof);

        
        $__internal_cd8db9b9656f07bc684dfa2dbc9b25d77a10b0bb479eacc4388c693af24c6e77->leave($__internal_cd8db9b9656f07bc684dfa2dbc9b25d77a10b0bb479eacc4388c693af24c6e77_prof);

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
", "SyliusChannelBundle:Collector:channel.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views/Collector/channel.html.twig");
    }
}
