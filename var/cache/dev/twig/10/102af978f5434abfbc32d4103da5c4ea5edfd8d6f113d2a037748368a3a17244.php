<?php

/* SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig */
class __TwigTemplate_ce7c763cf49998c8c7c5a8b343e26e866c6e88c3a6379bf9002a82ff55281aa7 extends Twig_Template
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
        $__internal_c3b915c7e24faceab9aa4c08fe5d79c71b06e81ebe76e08e5b3c3b976d3ea784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b915c7e24faceab9aa4c08fe5d79c71b06e81ebe76e08e5b3c3b976d3ea784->enter($__internal_c3b915c7e24faceab9aa4c08fe5d79c71b06e81ebe76e08e5b3c3b976d3ea784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig"));

        $__internal_7ff13b98f9d69077aaab1c85b7a78e719113a03ac5cac7faa35ddcc449994b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff13b98f9d69077aaab1c85b7a78e719113a03ac5cac7faa35ddcc449994b6a->enter($__internal_7ff13b98f9d69077aaab1c85b7a78e719113a03ac5cac7faa35ddcc449994b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig"));

        // line 1
        echo "<div class=\"ui red label\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "used", array()), "html", null, true);
        echo "
    ";
        // line 3
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array())) {
            // line 4
            echo "            /";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "usageLimit", array()), "html", null, true);
            echo "
    ";
        }
        // line 6
        echo "</div>
";
        
        $__internal_c3b915c7e24faceab9aa4c08fe5d79c71b06e81ebe76e08e5b3c3b976d3ea784->leave($__internal_c3b915c7e24faceab9aa4c08fe5d79c71b06e81ebe76e08e5b3c3b976d3ea784_prof);

        
        $__internal_7ff13b98f9d69077aaab1c85b7a78e719113a03ac5cac7faa35ddcc449994b6a->leave($__internal_7ff13b98f9d69077aaab1c85b7a78e719113a03ac5cac7faa35ddcc449994b6a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui red label\">
    {{ data.used }}
    {% if data.usageLimit %}
            /{{ data.usageLimit }}
    {% endif %}
</div>
", "SyliusAdminBundle:Promotion/Grid/Field:usedWithUsageLimit.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usedWithUsageLimit.html.twig");
    }
}
