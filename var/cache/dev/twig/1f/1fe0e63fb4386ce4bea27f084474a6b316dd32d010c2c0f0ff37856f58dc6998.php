<?php

/* SyliusUiBundle:Grid/Field:logAction.html.twig */
class __TwigTemplate_48a0371f338ef24665af72ba7f64119f3af794467e2eceed72b1346207379d76 extends Twig_Template
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
        $__internal_e3b1d8aa14635f8b11a82642f04b15f1f12c6e6b27482a979b69c29c2dccba6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b1d8aa14635f8b11a82642f04b15f1f12c6e6b27482a979b69c29c2dccba6a->enter($__internal_e3b1d8aa14635f8b11a82642f04b15f1f12c6e6b27482a979b69c29c2dccba6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logAction.html.twig"));

        $__internal_c53b0998887d4acff4692371e063c33fdbf7c8b968538caa948a17c88e2d79d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53b0998887d4acff4692371e063c33fdbf7c8b968538caa948a17c88e2d79d3->enter($__internal_c53b0998887d4acff4692371e063c33fdbf7c8b968538caa948a17c88e2d79d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logAction.html.twig"));

        // line 1
        if ((($context["data"] ?? $this->getContext($context, "data")) == "create")) {
            // line 2
            echo "    <span class=\"ui teal label\">
        <i class=\"plus icon\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.created"), "html", null, true);
            echo "
    </span>
";
        } elseif ((        // line 6
($context["data"] ?? $this->getContext($context, "data")) == "update")) {
            // line 7
            echo "    <span class=\"ui blue label\">
        <i class=\"pencil icon\"></i>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.updated"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_e3b1d8aa14635f8b11a82642f04b15f1f12c6e6b27482a979b69c29c2dccba6a->leave($__internal_e3b1d8aa14635f8b11a82642f04b15f1f12c6e6b27482a979b69c29c2dccba6a_prof);

        
        $__internal_c53b0998887d4acff4692371e063c33fdbf7c8b968538caa948a17c88e2d79d3->leave($__internal_c53b0998887d4acff4692371e063c33fdbf7c8b968538caa948a17c88e2d79d3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:logAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data == 'create' %}
    <span class=\"ui teal label\">
        <i class=\"plus icon\"></i>
        {{ 'sylius.ui.created'|trans }}
    </span>
{% elseif data == 'update' %}
    <span class=\"ui blue label\">
        <i class=\"pencil icon\"></i>
        {{ 'sylius.ui.updated'|trans }}
    </span>
{% endif %}
", "SyliusUiBundle:Grid/Field:logAction.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/logAction.html.twig");
    }
}
