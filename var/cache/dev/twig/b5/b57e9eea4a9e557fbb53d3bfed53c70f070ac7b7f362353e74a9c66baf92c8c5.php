<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d2a181fcb20c786fd82e0508c84712108981d42fb01db58a7ab10d4bfaa3bbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c670045063ca6159c813b49d34afba2cebbfd85b6fa50014245448d73e1b98ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c670045063ca6159c813b49d34afba2cebbfd85b6fa50014245448d73e1b98ad->enter($__internal_c670045063ca6159c813b49d34afba2cebbfd85b6fa50014245448d73e1b98ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b8137596628eb5e24dd5a7a7f43ba3fe7caadbe3fe5ba4a3133ca7d0476c06fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8137596628eb5e24dd5a7a7f43ba3fe7caadbe3fe5ba4a3133ca7d0476c06fe->enter($__internal_b8137596628eb5e24dd5a7a7f43ba3fe7caadbe3fe5ba4a3133ca7d0476c06fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c670045063ca6159c813b49d34afba2cebbfd85b6fa50014245448d73e1b98ad->leave($__internal_c670045063ca6159c813b49d34afba2cebbfd85b6fa50014245448d73e1b98ad_prof);

        
        $__internal_b8137596628eb5e24dd5a7a7f43ba3fe7caadbe3fe5ba4a3133ca7d0476c06fe->leave($__internal_b8137596628eb5e24dd5a7a7f43ba3fe7caadbe3fe5ba4a3133ca7d0476c06fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22ea19bb99787461082e98b0eb4215ea89824ab01122e7514ea289dd1bec9f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ea19bb99787461082e98b0eb4215ea89824ab01122e7514ea289dd1bec9f8e->enter($__internal_22ea19bb99787461082e98b0eb4215ea89824ab01122e7514ea289dd1bec9f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1bea86d37c9d213a341a7e987f4165e9def8ca776a4d3a6e6f13dd1fa43168f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bea86d37c9d213a341a7e987f4165e9def8ca776a4d3a6e6f13dd1fa43168f4->enter($__internal_1bea86d37c9d213a341a7e987f4165e9def8ca776a4d3a6e6f13dd1fa43168f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1bea86d37c9d213a341a7e987f4165e9def8ca776a4d3a6e6f13dd1fa43168f4->leave($__internal_1bea86d37c9d213a341a7e987f4165e9def8ca776a4d3a6e6f13dd1fa43168f4_prof);

        
        $__internal_22ea19bb99787461082e98b0eb4215ea89824ab01122e7514ea289dd1bec9f8e->leave($__internal_22ea19bb99787461082e98b0eb4215ea89824ab01122e7514ea289dd1bec9f8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
