<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d765f3dfaae9a64b344e2bf69d0fa407f34fa05945dffb102ad3a018807fcf2b extends Twig_Template
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
        $__internal_6ac80810f4ac73f6cec767bf912c6e0d2f5d937c4a82a933d5cbe405263f858d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac80810f4ac73f6cec767bf912c6e0d2f5d937c4a82a933d5cbe405263f858d->enter($__internal_6ac80810f4ac73f6cec767bf912c6e0d2f5d937c4a82a933d5cbe405263f858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8e337df376919c57a953b91c3abb16661ca40d07fcf060eeccb459926a23db85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e337df376919c57a953b91c3abb16661ca40d07fcf060eeccb459926a23db85->enter($__internal_8e337df376919c57a953b91c3abb16661ca40d07fcf060eeccb459926a23db85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac80810f4ac73f6cec767bf912c6e0d2f5d937c4a82a933d5cbe405263f858d->leave($__internal_6ac80810f4ac73f6cec767bf912c6e0d2f5d937c4a82a933d5cbe405263f858d_prof);

        
        $__internal_8e337df376919c57a953b91c3abb16661ca40d07fcf060eeccb459926a23db85->leave($__internal_8e337df376919c57a953b91c3abb16661ca40d07fcf060eeccb459926a23db85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87a93b84f7e4c9c75347c1e7c1497d48dfe3c05a37c7e72cd7307ea3f7974119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a93b84f7e4c9c75347c1e7c1497d48dfe3c05a37c7e72cd7307ea3f7974119->enter($__internal_87a93b84f7e4c9c75347c1e7c1497d48dfe3c05a37c7e72cd7307ea3f7974119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13bb7a3afa22c718eb91c4901ae117e3ead28255c4b117fe65ad5a56b0f42061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bb7a3afa22c718eb91c4901ae117e3ead28255c4b117fe65ad5a56b0f42061->enter($__internal_13bb7a3afa22c718eb91c4901ae117e3ead28255c4b117fe65ad5a56b0f42061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_13bb7a3afa22c718eb91c4901ae117e3ead28255c4b117fe65ad5a56b0f42061->leave($__internal_13bb7a3afa22c718eb91c4901ae117e3ead28255c4b117fe65ad5a56b0f42061_prof);

        
        $__internal_87a93b84f7e4c9c75347c1e7c1497d48dfe3c05a37c7e72cd7307ea3f7974119->leave($__internal_87a93b84f7e4c9c75347c1e7c1497d48dfe3c05a37c7e72cd7307ea3f7974119_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28df98778412b3870e8e53038c806da68b1a0f8425c2e7da60f8d9b4400e886b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28df98778412b3870e8e53038c806da68b1a0f8425c2e7da60f8d9b4400e886b->enter($__internal_28df98778412b3870e8e53038c806da68b1a0f8425c2e7da60f8d9b4400e886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5730377195f30371790ba2154850b34333df4c5d9fca46c417fde2f5111b928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5730377195f30371790ba2154850b34333df4c5d9fca46c417fde2f5111b928c->enter($__internal_5730377195f30371790ba2154850b34333df4c5d9fca46c417fde2f5111b928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5730377195f30371790ba2154850b34333df4c5d9fca46c417fde2f5111b928c->leave($__internal_5730377195f30371790ba2154850b34333df4c5d9fca46c417fde2f5111b928c_prof);

        
        $__internal_28df98778412b3870e8e53038c806da68b1a0f8425c2e7da60f8d9b4400e886b->leave($__internal_28df98778412b3870e8e53038c806da68b1a0f8425c2e7da60f8d9b4400e886b_prof);

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
