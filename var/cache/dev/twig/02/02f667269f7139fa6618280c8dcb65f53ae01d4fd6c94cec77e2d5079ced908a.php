<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e3c96e8018ce0e36fac9f199acf50cbaf15f79abfe326082e561c434803c627d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_09539b0a181e70f4118292988f89fbd580ccdd1988c815f947e54175e95e46d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09539b0a181e70f4118292988f89fbd580ccdd1988c815f947e54175e95e46d4->enter($__internal_09539b0a181e70f4118292988f89fbd580ccdd1988c815f947e54175e95e46d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9b163a4bfcbc18e166cea24c3360a3c994004e6384b99a798cbff2d4db98fba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b163a4bfcbc18e166cea24c3360a3c994004e6384b99a798cbff2d4db98fba3->enter($__internal_9b163a4bfcbc18e166cea24c3360a3c994004e6384b99a798cbff2d4db98fba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09539b0a181e70f4118292988f89fbd580ccdd1988c815f947e54175e95e46d4->leave($__internal_09539b0a181e70f4118292988f89fbd580ccdd1988c815f947e54175e95e46d4_prof);

        
        $__internal_9b163a4bfcbc18e166cea24c3360a3c994004e6384b99a798cbff2d4db98fba3->leave($__internal_9b163a4bfcbc18e166cea24c3360a3c994004e6384b99a798cbff2d4db98fba3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e112bdcbdaa9826a71c10a18ee56f8bd0c86968be0de5bf60216538a41dc8b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e112bdcbdaa9826a71c10a18ee56f8bd0c86968be0de5bf60216538a41dc8b11->enter($__internal_e112bdcbdaa9826a71c10a18ee56f8bd0c86968be0de5bf60216538a41dc8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99e6ab6a985e6c1349797ce782f04f58920084f3c232c941a1a8fad67ce63049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e6ab6a985e6c1349797ce782f04f58920084f3c232c941a1a8fad67ce63049->enter($__internal_99e6ab6a985e6c1349797ce782f04f58920084f3c232c941a1a8fad67ce63049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_99e6ab6a985e6c1349797ce782f04f58920084f3c232c941a1a8fad67ce63049->leave($__internal_99e6ab6a985e6c1349797ce782f04f58920084f3c232c941a1a8fad67ce63049_prof);

        
        $__internal_e112bdcbdaa9826a71c10a18ee56f8bd0c86968be0de5bf60216538a41dc8b11->leave($__internal_e112bdcbdaa9826a71c10a18ee56f8bd0c86968be0de5bf60216538a41dc8b11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
