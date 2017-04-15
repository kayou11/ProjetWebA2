<?php

/* SyliusUiBundle:Grid/Action:links.html.twig */
class __TwigTemplate_f626abe262a7671e6a59edb7acac890928b02f3b4efb6de43e72715c59fffa90 extends Twig_Template
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
        $__internal_49057324e5f0b2a71a7fd34fd1f599dd5f62754ffe329e822ed66567b4db72af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49057324e5f0b2a71a7fd34fd1f599dd5f62754ffe329e822ed66567b4db72af->enter($__internal_49057324e5f0b2a71a7fd34fd1f599dd5f62754ffe329e822ed66567b4db72af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:links.html.twig"));

        $__internal_cd7c0c4d7cb7f02731f7eb90d1ede33b07e40e51079fa3c5781df87d37eab1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c0c4d7cb7f02731f7eb90d1ede33b07e40e51079fa3c5781df87d37eab1c9->enter($__internal_cd7c0c4d7cb7f02731f7eb90d1ede33b07e40e51079fa3c5781df87d37eab1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:links.html.twig"));

        // line 1
        $context["visible"] = (($this->getAttribute(($context["options"] ?? null), "visible", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "visible", array())) : (true));
        // line 2
        echo "
";
        // line 3
        if (($context["visible"] ?? $this->getContext($context, "visible"))) {
            // line 4
            echo "    <div class=\"ui";
            if ($this->getAttribute(($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo " labeled icon";
            }
            echo " floating dropdown ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), "class", array()), "")) : ("")), "html", null, true);
            echo " link button\">
        ";
            // line 5
            if ($this->getAttribute(($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "icon", array()), "html", null, true);
                echo " icon\"></i>";
            }
            // line 6
            echo "        <span class=\"text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array())), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 8
            if ($this->getAttribute(($context["options"] ?? null), "header", array(), "any", true, true)) {
                // line 9
                echo "            <div class=\"header\">
                ";
                // line 10
                if ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "header", array(), "any", false, true), "icon", array(), "any", true, true)) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "header", array()), "icon", array()), "html", null, true);
                    echo " icon\"></i>";
                }
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "header", array()), "label", array())), "html", null, true);
                echo "
            </div>
            <div class=\"divider\"></div>
            ";
            }
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "links", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 16
                echo "                ";
                $context["is_link_visible"] = (($this->getAttribute($context["link"], "visible", array(), "any", true, true)) ? ($this->getAttribute($context["link"], "visible", array())) : (true));
                // line 17
                echo "
                ";
                // line 18
                if (($context["is_link_visible"] ?? $this->getContext($context, "is_link_visible"))) {
                    // line 19
                    echo "                    ";
                    $this->loadTemplate("@SyliusUi/Grid/Action/_link.html.twig", "SyliusUiBundle:Grid/Action:links.html.twig", 19)->display($context);
                    // line 20
                    echo "                ";
                }
                // line 21
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
        
        $__internal_49057324e5f0b2a71a7fd34fd1f599dd5f62754ffe329e822ed66567b4db72af->leave($__internal_49057324e5f0b2a71a7fd34fd1f599dd5f62754ffe329e822ed66567b4db72af_prof);

        
        $__internal_cd7c0c4d7cb7f02731f7eb90d1ede33b07e40e51079fa3c5781df87d37eab1c9->leave($__internal_cd7c0c4d7cb7f02731f7eb90d1ede33b07e40e51079fa3c5781df87d37eab1c9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  104 => 21,  101 => 20,  98 => 19,  96 => 18,  93 => 17,  90 => 16,  72 => 15,  64 => 11,  58 => 10,  55 => 9,  53 => 8,  47 => 6,  41 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set visible = options.visible is defined ? options.visible : true %}

{% if visible %}
    <div class=\"ui{% if options.icon is defined %} labeled icon{% endif %} floating dropdown {{ options.class|default('') }} link button\">
        {% if options.icon is defined %}<i class=\"{{ options.icon }} icon\"></i>{% endif %}
        <span class=\"text\">{{ action.label|trans }}</span>
        <div class=\"menu\">
            {% if options.header is defined %}
            <div class=\"header\">
                {% if options.header.icon is defined %}<i class=\"{{ options.header.icon }} icon\"></i>{% endif %}
                {{ options.header.label|trans }}
            </div>
            <div class=\"divider\"></div>
            {% endif %}
            {% for link in options.links %}
                {% set is_link_visible = link.visible is defined ? link.visible : true %}

                {% if is_link_visible %}
                    {% include '@SyliusUi/Grid/Action/_link.html.twig' %}
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "SyliusUiBundle:Grid/Action:links.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Action/links.html.twig");
    }
}
