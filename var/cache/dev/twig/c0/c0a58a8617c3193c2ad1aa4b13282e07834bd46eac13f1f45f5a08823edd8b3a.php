<?php

/* SyliusAdminBundle:Dashboard:_channelSwitch.html.twig */
class __TwigTemplate_cbe2c94393c01412634d3bda46d7131965a4ce6a28d7d9c282825edf775dad78 extends Twig_Template
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
        $__internal_ffdb1b26edc82126019a1a0715530eac562ef721e95638175828f3c39338a615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdb1b26edc82126019a1a0715530eac562ef721e95638175828f3c39338a615->enter($__internal_ffdb1b26edc82126019a1a0715530eac562ef721e95638175828f3c39338a615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig"));

        $__internal_a21e65f78317629a241e4dd0c77a08f980fcf4caaef984c7fcd0b2b2c82eb130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21e65f78317629a241e4dd0c77a08f980fcf4caaef984c7fcd0b2b2c82eb130->enter($__internal_a21e65f78317629a241e4dd0c77a08f980fcf4caaef984c7fcd0b2b2c82eb130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) > 1)) {
            // line 2
            echo "
";
            // line 3
            $context["selected"] = twig_first($this->env, ($context["channels"] ?? $this->getContext($context, "channels")));
            // line 4
            $context["code"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "channel"), "method");
            // line 5
            echo "
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 7
                echo "    ";
                if (($this->getAttribute($context["channel"], "code", array()) === ($context["code"] ?? $this->getContext($context, "code")))) {
                    // line 8
                    echo "        ";
                    $context["selected"] = $context["channel"];
                    // line 9
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        ";
            // line 15
            $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig", 15)->display(array_merge($context, array("channel" => ($context["selected"] ?? $this->getContext($context, "selected")))));
            // line 16
            echo "    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search"), "html", null, true);
            echo "...\">
        </div>
        <div class=\"scrolling menu\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard", array("channel" => $this->getAttribute($context["channel"], "code", array()))), "html", null, true);
                echo "\" class=\"item\">
                    ";
                // line 25
                $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig", 25)->display($context);
                // line 26
                echo "                </a>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_ffdb1b26edc82126019a1a0715530eac562ef721e95638175828f3c39338a615->leave($__internal_ffdb1b26edc82126019a1a0715530eac562ef721e95638175828f3c39338a615_prof);

        
        $__internal_a21e65f78317629a241e4dd0c77a08f980fcf4caaef984c7fcd0b2b2c82eb130->leave($__internal_a21e65f78317629a241e4dd0c77a08f980fcf4caaef984c7fcd0b2b2c82eb130_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  98 => 26,  96 => 25,  91 => 24,  74 => 23,  68 => 20,  62 => 16,  60 => 15,  54 => 11,  47 => 9,  44 => 8,  41 => 7,  37 => 6,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if channels|length > 1 %}

{% set selected = channels|first %}
{% set code = app.request.query.get('channel') %}

{% for channel in channels %}
    {% if channel.code is same as(code) %}
        {% set selected = channel %}
    {% endif %}
{% endfor %}

<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': selected} %}
    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"{{ 'sylius.ui.search'|trans }}...\">
        </div>
        <div class=\"scrolling menu\">
            {% for channel in channels %}
                <a href=\"{{ path('sylius_admin_dashboard', {'channel': channel.code}) }}\" class=\"item\">
                    {% include '@SyliusAdmin/Common/_channel.html.twig' %}
                </a>
            {% endfor %}
        </div>
    </div>
</div>
{% endif %}
", "SyliusAdminBundle:Dashboard:_channelSwitch.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_channelSwitch.html.twig");
    }
}
