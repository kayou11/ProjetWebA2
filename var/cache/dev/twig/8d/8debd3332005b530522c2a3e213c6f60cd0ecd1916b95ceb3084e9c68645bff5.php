<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_9888794808cda818a24bab27f25335ed93bfa3b4ee1a03b66dc6909ccd0da317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61fd7c4592405699d05d55ea772fd634fbff2970fda2430f4086ac136ae9340a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fd7c4592405699d05d55ea772fd634fbff2970fda2430f4086ac136ae9340a->enter($__internal_61fd7c4592405699d05d55ea772fd634fbff2970fda2430f4086ac136ae9340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        $__internal_c1834f5cf26394a23ef1c6ccee54f84e41fd33a2ec9550a79e46e5e50f93cfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1834f5cf26394a23ef1c6ccee54f84e41fd33a2ec9550a79e46e5e50f93cfe5->enter($__internal_c1834f5cf26394a23ef1c6ccee54f84e41fd33a2ec9550a79e46e5e50f93cfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
        
        $__internal_61fd7c4592405699d05d55ea772fd634fbff2970fda2430f4086ac136ae9340a->leave($__internal_61fd7c4592405699d05d55ea772fd634fbff2970fda2430f4086ac136ae9340a_prof);

        
        $__internal_c1834f5cf26394a23ef1c6ccee54f84e41fd33a2ec9550a79e46e5e50f93cfe5->leave($__internal_c1834f5cf26394a23ef1c6ccee54f84e41fd33a2ec9550a79e46e5e50f93cfe5_prof);

    }

    public function block_field_label($context, array $blocks = array())
    {
        $__internal_f141aa2379c94ca351b5505d1bd4bd40bec1befa499b77a8b8e8240dd2ef0047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f141aa2379c94ca351b5505d1bd4bd40bec1befa499b77a8b8e8240dd2ef0047->enter($__internal_f141aa2379c94ca351b5505d1bd4bd40bec1befa499b77a8b8e8240dd2ef0047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        $__internal_db6cbc9b4cdf718757275cd3401974f23c52f5dc6f1d00d3fb429dcebb4a8e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6cbc9b4cdf718757275cd3401974f23c52f5dc6f1d00d3fb429dcebb4a8e33->enter($__internal_db6cbc9b4cdf718757275cd3401974f23c52f5dc6f1d00d3fb429dcebb4a8e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["id"] ?? $this->getContext($context, "id")), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db6cbc9b4cdf718757275cd3401974f23c52f5dc6f1d00d3fb429dcebb4a8e33->leave($__internal_db6cbc9b4cdf718757275cd3401974f23c52f5dc6f1d00d3fb429dcebb4a8e33_prof);

        
        $__internal_f141aa2379c94ca351b5505d1bd4bd40bec1befa499b77a8b8e8240dd2ef0047->leave($__internal_f141aa2379c94ca351b5505d1bd4bd40bec1befa499b77a8b8e8240dd2ef0047_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block field_label %}
{% spaceless %}
    <label for=\"{{ id }}\">{{ id|trans([], 'FOSOAuthServerBundle') }}</label>
{% endspaceless %}
{% endblock field_label %}
", "FOSOAuthServerBundle::form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/form.html.twig");
    }
}
