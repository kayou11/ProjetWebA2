<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c368a701496fe6fa838f98791a720f60ee94ec72833e3019cc2b76635b64adea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_87441a3239d56e7016a70a2ad1d658b229988bd028470b5b8ccbac80c23ec892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87441a3239d56e7016a70a2ad1d658b229988bd028470b5b8ccbac80c23ec892->enter($__internal_87441a3239d56e7016a70a2ad1d658b229988bd028470b5b8ccbac80c23ec892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f497953452db3073e068cd17a7522c7fc7accbbffc488394fbf9f1ed499af18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f497953452db3073e068cd17a7522c7fc7accbbffc488394fbf9f1ed499af18b->enter($__internal_f497953452db3073e068cd17a7522c7fc7accbbffc488394fbf9f1ed499af18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87441a3239d56e7016a70a2ad1d658b229988bd028470b5b8ccbac80c23ec892->leave($__internal_87441a3239d56e7016a70a2ad1d658b229988bd028470b5b8ccbac80c23ec892_prof);

        
        $__internal_f497953452db3073e068cd17a7522c7fc7accbbffc488394fbf9f1ed499af18b->leave($__internal_f497953452db3073e068cd17a7522c7fc7accbbffc488394fbf9f1ed499af18b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7315c4281e4a738d0e934edcbc7da29c3c4951648c2c5180565c4cd1b889813b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7315c4281e4a738d0e934edcbc7da29c3c4951648c2c5180565c4cd1b889813b->enter($__internal_7315c4281e4a738d0e934edcbc7da29c3c4951648c2c5180565c4cd1b889813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87ef1b5366e190c935eb322930fe82fd65a534661e3c82fd97cbe314d5ffd93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ef1b5366e190c935eb322930fe82fd65a534661e3c82fd97cbe314d5ffd93c->enter($__internal_87ef1b5366e190c935eb322930fe82fd65a534661e3c82fd97cbe314d5ffd93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_87ef1b5366e190c935eb322930fe82fd65a534661e3c82fd97cbe314d5ffd93c->leave($__internal_87ef1b5366e190c935eb322930fe82fd65a534661e3c82fd97cbe314d5ffd93c_prof);

        
        $__internal_7315c4281e4a738d0e934edcbc7da29c3c4951648c2c5180565c4cd1b889813b->leave($__internal_7315c4281e4a738d0e934edcbc7da29c3c4951648c2c5180565c4cd1b889813b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
