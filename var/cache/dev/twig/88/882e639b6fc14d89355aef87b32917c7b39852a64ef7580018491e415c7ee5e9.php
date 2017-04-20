<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0c57aecbee17bc338ce956383054f0dd8a4fdebbe8a61b9a14e79bc42476e736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0976befdaea68f0ef248477f8a7210e59e021e5038d5c020b70fa29c82ebff7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0976befdaea68f0ef248477f8a7210e59e021e5038d5c020b70fa29c82ebff7c->enter($__internal_0976befdaea68f0ef248477f8a7210e59e021e5038d5c020b70fa29c82ebff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_75938628a73dbfe1e1b0021aed8217b99e62c34d25d493349bbd2471642e8c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75938628a73dbfe1e1b0021aed8217b99e62c34d25d493349bbd2471642e8c53->enter($__internal_75938628a73dbfe1e1b0021aed8217b99e62c34d25d493349bbd2471642e8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0976befdaea68f0ef248477f8a7210e59e021e5038d5c020b70fa29c82ebff7c->leave($__internal_0976befdaea68f0ef248477f8a7210e59e021e5038d5c020b70fa29c82ebff7c_prof);

        
        $__internal_75938628a73dbfe1e1b0021aed8217b99e62c34d25d493349bbd2471642e8c53->leave($__internal_75938628a73dbfe1e1b0021aed8217b99e62c34d25d493349bbd2471642e8c53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_815bec9ca0449f8cdc161056b57494868e45b675bcadfd2b5c9e96a9cd3e69f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815bec9ca0449f8cdc161056b57494868e45b675bcadfd2b5c9e96a9cd3e69f2->enter($__internal_815bec9ca0449f8cdc161056b57494868e45b675bcadfd2b5c9e96a9cd3e69f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ef04abf2a61ea215fa37e927af94660b0004ce9eb2df817e4ee594e52d60519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef04abf2a61ea215fa37e927af94660b0004ce9eb2df817e4ee594e52d60519->enter($__internal_1ef04abf2a61ea215fa37e927af94660b0004ce9eb2df817e4ee594e52d60519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1ef04abf2a61ea215fa37e927af94660b0004ce9eb2df817e4ee594e52d60519->leave($__internal_1ef04abf2a61ea215fa37e927af94660b0004ce9eb2df817e4ee594e52d60519_prof);

        
        $__internal_815bec9ca0449f8cdc161056b57494868e45b675bcadfd2b5c9e96a9cd3e69f2->leave($__internal_815bec9ca0449f8cdc161056b57494868e45b675bcadfd2b5c9e96a9cd3e69f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
