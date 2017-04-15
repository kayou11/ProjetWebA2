<?php

/* SyliusAdminBundle::_channelLinks.html.twig */
class __TwigTemplate_4d8fe431bd9c2bd4fe38852f3fa704ceb9625c316e9d7d81902fdc6dbd60990c extends Twig_Template
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
        $__internal_60fa8b6912c8f0966d4536a1d05d394a2071e4beb7200d278f8437ab939c702d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fa8b6912c8f0966d4536a1d05d394a2071e4beb7200d278f8437ab939c702d->enter($__internal_60fa8b6912c8f0966d4536a1d05d394a2071e4beb7200d278f8437ab939c702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_channelLinks.html.twig"));

        $__internal_51214b46848cd0919853eb64bfcd19e065ff4747ac3c3cb6d326f841604cc4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51214b46848cd0919853eb64bfcd19e065ff4747ac3c3cb6d326f841604cc4d2->enter($__internal_51214b46848cd0919853eb64bfcd19e065ff4747ac3c3cb6d326f841604cc4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_channelLinks.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) > 1)) {
            // line 2
            echo "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                if ( !twig_test_empty($this->getAttribute($context["channel"], "hostname", array()))) {
                    // line 9
                    echo "            <a href=\"http://";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "hostname", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"item\">
                ";
                    // line 10
                    $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle::_channelLinks.html.twig", 10)->display($context);
                    // line 11
                    echo "            </a>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 15
($context["channels"] ?? $this->getContext($context, "channels"))) == 1)) {
            // line 16
            echo "    ";
            $context["channel"] = twig_first($this->env, ($context["channels"] ?? $this->getContext($context, "channels")));
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array()))) {
                // line 19
                echo "    <a href=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "hostname", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_store"), "html", null, true);
                echo "</a>
    ";
            }
        }
        
        $__internal_60fa8b6912c8f0966d4536a1d05d394a2071e4beb7200d278f8437ab939c702d->leave($__internal_60fa8b6912c8f0966d4536a1d05d394a2071e4beb7200d278f8437ab939c702d_prof);

        
        $__internal_51214b46848cd0919853eb64bfcd19e065ff4747ac3c3cb6d326f841604cc4d2->leave($__internal_51214b46848cd0919853eb64bfcd19e065ff4747ac3c3cb6d326f841604cc4d2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_channelLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 13,  56 => 11,  54 => 10,  49 => 9,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
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
    <div class=\"ui simple dropdown item\">
        <span>
            {{ 'sylius.ui.view_your_store'|trans }}
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for channel in channels if channel.hostname is not empty %}
            <a href=\"http://{{ channel.hostname }}\" target=\"_blank\" class=\"item\">
                {% include '@SyliusAdmin/Common/_channel.html.twig' %}
            </a>
            {% endfor %}
        </div>
    </div>
{% elseif channels|length == 1 %}
    {% set channel = channels|first %}

    {% if channel.hostname is not empty %}
    <a href=\"http://{{ channel.hostname }}\" target=\"_blank\" class=\"item\">{{ 'sylius.ui.view_your_store'|trans }}</a>
    {% endif %}
{% endif %}
", "SyliusAdminBundle::_channelLinks.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_channelLinks.html.twig");
    }
}
