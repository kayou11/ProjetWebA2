<?php

/* SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig */
class __TwigTemplate_a41b87bc86070991fa601d2f16ac54d35be4c1719422d340829692872c806b5d extends Twig_Template
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
        $__internal_3ac3762a9f79975209cb67f4b8e07e7d705c6afaa6b7d7fbe63d8c858704b9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac3762a9f79975209cb67f4b8e07e7d705c6afaa6b7d7fbe63d8c858704b9bc->enter($__internal_3ac3762a9f79975209cb67f4b8e07e7d705c6afaa6b7d7fbe63d8c858704b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        $__internal_2df82931e9605953acab368b4193a14d06a7ae73b3fad1505ba47b36e28d7d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df82931e9605953acab368b4193a14d06a7ae73b3fad1505ba47b36e28d7d1f->enter($__internal_2df82931e9605953acab368b4193a14d06a7ae73b3fad1505ba47b36e28d7d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        // line 1
        if (twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array()))) {
            // line 2
            echo "    <span class=\"ui label\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui label\">∞</span>
";
        } else {
            // line 8
            echo "    ";
            $context["color"] = "teal";
            // line 9
            echo "
    ";
            // line 10
            if (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "used", array()) == $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array()))) {
                // line 11
                echo "        ";
                $context["color"] = "red";
                // line 12
                echo "    ";
            } elseif (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "used", array()) > ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array()) / 2))) {
                // line 13
                echo "        ";
                $context["color"] = "yellow";
                // line 14
                echo "    ";
            }
            // line 15
            echo "    <span class=\"ui ";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo " label\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui ";
            // line 19
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo " label\">
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array()), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_3ac3762a9f79975209cb67f4b8e07e7d705c6afaa6b7d7fbe63d8c858704b9bc->leave($__internal_3ac3762a9f79975209cb67f4b8e07e7d705c6afaa6b7d7fbe63d8c858704b9bc_prof);

        
        $__internal_2df82931e9605953acab368b4193a14d06a7ae73b3fad1505ba47b36e28d7d1f->leave($__internal_2df82931e9605953acab368b4193a14d06a7ae73b3fad1505ba47b36e28d7d1f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 19,  63 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.usageLimit is empty %}
    <span class=\"ui label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui label\">∞</span>
{% else %}
    {% set color = 'teal' %}

    {% if data.used == data.usageLimit %}
        {% set color = 'red' %}
    {% elseif data.used > data.usageLimit/2 %}
        {% set color = 'yellow' %}
    {% endif %}
    <span class=\"ui {{ color }} label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui {{ color }} label\">
        {{ data.usageLimit }}
    </span>
{% endif %}
", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usage.html.twig");
    }
}
