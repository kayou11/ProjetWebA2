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
        $__internal_261bbae53c11a295ef054c8e4b712366615e8265691fcef5de7a23100be64484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261bbae53c11a295ef054c8e4b712366615e8265691fcef5de7a23100be64484->enter($__internal_261bbae53c11a295ef054c8e4b712366615e8265691fcef5de7a23100be64484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8bfdba47d980f35f278c7a9e13b07ec01375fd5bdafc7def7a25a4ab86ba66ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfdba47d980f35f278c7a9e13b07ec01375fd5bdafc7def7a25a4ab86ba66ee->enter($__internal_8bfdba47d980f35f278c7a9e13b07ec01375fd5bdafc7def7a25a4ab86ba66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261bbae53c11a295ef054c8e4b712366615e8265691fcef5de7a23100be64484->leave($__internal_261bbae53c11a295ef054c8e4b712366615e8265691fcef5de7a23100be64484_prof);

        
        $__internal_8bfdba47d980f35f278c7a9e13b07ec01375fd5bdafc7def7a25a4ab86ba66ee->leave($__internal_8bfdba47d980f35f278c7a9e13b07ec01375fd5bdafc7def7a25a4ab86ba66ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f610d27ff2411d1147869ef68f1bc2cd4c29ff12c5778d4b4fa514cc0118e6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f610d27ff2411d1147869ef68f1bc2cd4c29ff12c5778d4b4fa514cc0118e6dd->enter($__internal_f610d27ff2411d1147869ef68f1bc2cd4c29ff12c5778d4b4fa514cc0118e6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d88681158feff2628478449b6be698111f45aaeee733566f95bd92489bada99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d88681158feff2628478449b6be698111f45aaeee733566f95bd92489bada99->enter($__internal_6d88681158feff2628478449b6be698111f45aaeee733566f95bd92489bada99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6d88681158feff2628478449b6be698111f45aaeee733566f95bd92489bada99->leave($__internal_6d88681158feff2628478449b6be698111f45aaeee733566f95bd92489bada99_prof);

        
        $__internal_f610d27ff2411d1147869ef68f1bc2cd4c29ff12c5778d4b4fa514cc0118e6dd->leave($__internal_f610d27ff2411d1147869ef68f1bc2cd4c29ff12c5778d4b4fa514cc0118e6dd_prof);

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
