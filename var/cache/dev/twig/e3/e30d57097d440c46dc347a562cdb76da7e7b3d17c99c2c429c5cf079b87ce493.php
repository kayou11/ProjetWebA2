<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4383866547cacc8446584a3691135a3b65083537a9f941bd6bc84ad56f34bfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56bf73860622a3ad5226c0cbea5dcc962979463575b8a2f0dda92dc3a15b80eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bf73860622a3ad5226c0cbea5dcc962979463575b8a2f0dda92dc3a15b80eb->enter($__internal_56bf73860622a3ad5226c0cbea5dcc962979463575b8a2f0dda92dc3a15b80eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a92f59b6cd9473243fcb694ae4bf67f15720ecb4ca6b73389d84de58d55a86ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92f59b6cd9473243fcb694ae4bf67f15720ecb4ca6b73389d84de58d55a86ab->enter($__internal_a92f59b6cd9473243fcb694ae4bf67f15720ecb4ca6b73389d84de58d55a86ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bf73860622a3ad5226c0cbea5dcc962979463575b8a2f0dda92dc3a15b80eb->leave($__internal_56bf73860622a3ad5226c0cbea5dcc962979463575b8a2f0dda92dc3a15b80eb_prof);

        
        $__internal_a92f59b6cd9473243fcb694ae4bf67f15720ecb4ca6b73389d84de58d55a86ab->leave($__internal_a92f59b6cd9473243fcb694ae4bf67f15720ecb4ca6b73389d84de58d55a86ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43f91628ffe6c8675c192ebf988b2341a9f523da6cf63ce2fb40141e8ae40973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f91628ffe6c8675c192ebf988b2341a9f523da6cf63ce2fb40141e8ae40973->enter($__internal_43f91628ffe6c8675c192ebf988b2341a9f523da6cf63ce2fb40141e8ae40973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e586a006d1e635b14a054b21a9763b08cfd2568cc14edfac56a64f377e48f796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e586a006d1e635b14a054b21a9763b08cfd2568cc14edfac56a64f377e48f796->enter($__internal_e586a006d1e635b14a054b21a9763b08cfd2568cc14edfac56a64f377e48f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e586a006d1e635b14a054b21a9763b08cfd2568cc14edfac56a64f377e48f796->leave($__internal_e586a006d1e635b14a054b21a9763b08cfd2568cc14edfac56a64f377e48f796_prof);

        
        $__internal_43f91628ffe6c8675c192ebf988b2341a9f523da6cf63ce2fb40141e8ae40973->leave($__internal_43f91628ffe6c8675c192ebf988b2341a9f523da6cf63ce2fb40141e8ae40973_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9e29fa9e3e969c086d71fd14c3536918a5fa3bef5841a864b47108d12d6ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e29fa9e3e969c086d71fd14c3536918a5fa3bef5841a864b47108d12d6ef05->enter($__internal_c9e29fa9e3e969c086d71fd14c3536918a5fa3bef5841a864b47108d12d6ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7573db9ce64eeb2c33dbaf12fc41662a568cdacc2f11ce7de914f60e41eb0fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7573db9ce64eeb2c33dbaf12fc41662a568cdacc2f11ce7de914f60e41eb0fa6->enter($__internal_7573db9ce64eeb2c33dbaf12fc41662a568cdacc2f11ce7de914f60e41eb0fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7573db9ce64eeb2c33dbaf12fc41662a568cdacc2f11ce7de914f60e41eb0fa6->leave($__internal_7573db9ce64eeb2c33dbaf12fc41662a568cdacc2f11ce7de914f60e41eb0fa6_prof);

        
        $__internal_c9e29fa9e3e969c086d71fd14c3536918a5fa3bef5841a864b47108d12d6ef05->leave($__internal_c9e29fa9e3e969c086d71fd14c3536918a5fa3bef5841a864b47108d12d6ef05_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
