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
        $__internal_c92ec1015095a44bd648ef89aa962aa0c9a2ca1e030a79bc1a0ae1bc052a1c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92ec1015095a44bd648ef89aa962aa0c9a2ca1e030a79bc1a0ae1bc052a1c66->enter($__internal_c92ec1015095a44bd648ef89aa962aa0c9a2ca1e030a79bc1a0ae1bc052a1c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c2a5a475883192a41628b212e634d38b5eb4a6c7dded70ca53bbefcfd4c7071e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a5a475883192a41628b212e634d38b5eb4a6c7dded70ca53bbefcfd4c7071e->enter($__internal_c2a5a475883192a41628b212e634d38b5eb4a6c7dded70ca53bbefcfd4c7071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92ec1015095a44bd648ef89aa962aa0c9a2ca1e030a79bc1a0ae1bc052a1c66->leave($__internal_c92ec1015095a44bd648ef89aa962aa0c9a2ca1e030a79bc1a0ae1bc052a1c66_prof);

        
        $__internal_c2a5a475883192a41628b212e634d38b5eb4a6c7dded70ca53bbefcfd4c7071e->leave($__internal_c2a5a475883192a41628b212e634d38b5eb4a6c7dded70ca53bbefcfd4c7071e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc5ca423cbb4673045a5cc82697091577f0781257cbb50c90de9732818990db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5ca423cbb4673045a5cc82697091577f0781257cbb50c90de9732818990db4->enter($__internal_dc5ca423cbb4673045a5cc82697091577f0781257cbb50c90de9732818990db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0dc4bae37b6cac004620a1c8d04db2198b82c88034a5965957b21aefc95ac990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc4bae37b6cac004620a1c8d04db2198b82c88034a5965957b21aefc95ac990->enter($__internal_0dc4bae37b6cac004620a1c8d04db2198b82c88034a5965957b21aefc95ac990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0dc4bae37b6cac004620a1c8d04db2198b82c88034a5965957b21aefc95ac990->leave($__internal_0dc4bae37b6cac004620a1c8d04db2198b82c88034a5965957b21aefc95ac990_prof);

        
        $__internal_dc5ca423cbb4673045a5cc82697091577f0781257cbb50c90de9732818990db4->leave($__internal_dc5ca423cbb4673045a5cc82697091577f0781257cbb50c90de9732818990db4_prof);

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
