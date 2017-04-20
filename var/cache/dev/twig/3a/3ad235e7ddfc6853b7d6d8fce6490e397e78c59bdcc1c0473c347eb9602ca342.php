<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e41b3229ba2d9cd3c9e0926f1b83c089c906b6470e4f3d12ff79c775d025c286 extends Twig_Template
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
        $__internal_7f43b5f966b5a65d67c05eb5d37f7a4aa8d89a1f1809e03138d27f0ede13051d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f43b5f966b5a65d67c05eb5d37f7a4aa8d89a1f1809e03138d27f0ede13051d->enter($__internal_7f43b5f966b5a65d67c05eb5d37f7a4aa8d89a1f1809e03138d27f0ede13051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d0d46a7b744e4fd8d1a28518bbd5221def43057cf843000868c7de8256a47f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d46a7b744e4fd8d1a28518bbd5221def43057cf843000868c7de8256a47f7b->enter($__internal_d0d46a7b744e4fd8d1a28518bbd5221def43057cf843000868c7de8256a47f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f43b5f966b5a65d67c05eb5d37f7a4aa8d89a1f1809e03138d27f0ede13051d->leave($__internal_7f43b5f966b5a65d67c05eb5d37f7a4aa8d89a1f1809e03138d27f0ede13051d_prof);

        
        $__internal_d0d46a7b744e4fd8d1a28518bbd5221def43057cf843000868c7de8256a47f7b->leave($__internal_d0d46a7b744e4fd8d1a28518bbd5221def43057cf843000868c7de8256a47f7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ba27cb483a6bb51672ede4218455927deee414d763b5fca4468e8142779e712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba27cb483a6bb51672ede4218455927deee414d763b5fca4468e8142779e712->enter($__internal_4ba27cb483a6bb51672ede4218455927deee414d763b5fca4468e8142779e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91143391aa846a98e256c132244a2cef2e32c2edd2eda20bf36b88f45211c720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91143391aa846a98e256c132244a2cef2e32c2edd2eda20bf36b88f45211c720->enter($__internal_91143391aa846a98e256c132244a2cef2e32c2edd2eda20bf36b88f45211c720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_91143391aa846a98e256c132244a2cef2e32c2edd2eda20bf36b88f45211c720->leave($__internal_91143391aa846a98e256c132244a2cef2e32c2edd2eda20bf36b88f45211c720_prof);

        
        $__internal_4ba27cb483a6bb51672ede4218455927deee414d763b5fca4468e8142779e712->leave($__internal_4ba27cb483a6bb51672ede4218455927deee414d763b5fca4468e8142779e712_prof);

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
