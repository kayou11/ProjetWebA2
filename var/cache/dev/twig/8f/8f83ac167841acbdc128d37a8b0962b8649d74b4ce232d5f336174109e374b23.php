<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3627b9aa9f214825c3528ec1512f7fbbd77e18636701bef429f1718d2ab0f2fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_acb3f5c7a899540a0ccd32f415a346bbd48de897ecf20b87f08b9b8313548159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb3f5c7a899540a0ccd32f415a346bbd48de897ecf20b87f08b9b8313548159->enter($__internal_acb3f5c7a899540a0ccd32f415a346bbd48de897ecf20b87f08b9b8313548159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_feb3e178caff5364a04a78c3608a8acadcc16fc1e88bd694ea7f5b4755557c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb3e178caff5364a04a78c3608a8acadcc16fc1e88bd694ea7f5b4755557c5b->enter($__internal_feb3e178caff5364a04a78c3608a8acadcc16fc1e88bd694ea7f5b4755557c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb3f5c7a899540a0ccd32f415a346bbd48de897ecf20b87f08b9b8313548159->leave($__internal_acb3f5c7a899540a0ccd32f415a346bbd48de897ecf20b87f08b9b8313548159_prof);

        
        $__internal_feb3e178caff5364a04a78c3608a8acadcc16fc1e88bd694ea7f5b4755557c5b->leave($__internal_feb3e178caff5364a04a78c3608a8acadcc16fc1e88bd694ea7f5b4755557c5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7186bc96a9d757f6fbb89ed35422efa93286f48a5e725af0fe2b5c6a72e23bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7186bc96a9d757f6fbb89ed35422efa93286f48a5e725af0fe2b5c6a72e23bd->enter($__internal_c7186bc96a9d757f6fbb89ed35422efa93286f48a5e725af0fe2b5c6a72e23bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d11d5c24b99ca0d4d07e77e820d092a206977017f065798fc3db95336f1eff77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11d5c24b99ca0d4d07e77e820d092a206977017f065798fc3db95336f1eff77->enter($__internal_d11d5c24b99ca0d4d07e77e820d092a206977017f065798fc3db95336f1eff77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d11d5c24b99ca0d4d07e77e820d092a206977017f065798fc3db95336f1eff77->leave($__internal_d11d5c24b99ca0d4d07e77e820d092a206977017f065798fc3db95336f1eff77_prof);

        
        $__internal_c7186bc96a9d757f6fbb89ed35422efa93286f48a5e725af0fe2b5c6a72e23bd->leave($__internal_c7186bc96a9d757f6fbb89ed35422efa93286f48a5e725af0fe2b5c6a72e23bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
