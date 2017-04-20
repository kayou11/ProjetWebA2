<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_fee732bf05c9152a5cf447675ac22fe8f1ee2aa7199c6b622f9bb10cf93d0a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f189459053e9308090a042970b5c076a4b291d2d8defa5eae1dc222b4652f179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f189459053e9308090a042970b5c076a4b291d2d8defa5eae1dc222b4652f179->enter($__internal_f189459053e9308090a042970b5c076a4b291d2d8defa5eae1dc222b4652f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_7b9a09b6ae792873c38f84215efb069809c790cf1f5ffc5722fd9246709eaaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9a09b6ae792873c38f84215efb069809c790cf1f5ffc5722fd9246709eaaf7->enter($__internal_7b9a09b6ae792873c38f84215efb069809c790cf1f5ffc5722fd9246709eaaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f189459053e9308090a042970b5c076a4b291d2d8defa5eae1dc222b4652f179->leave($__internal_f189459053e9308090a042970b5c076a4b291d2d8defa5eae1dc222b4652f179_prof);

        
        $__internal_7b9a09b6ae792873c38f84215efb069809c790cf1f5ffc5722fd9246709eaaf7->leave($__internal_7b9a09b6ae792873c38f84215efb069809c790cf1f5ffc5722fd9246709eaaf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fee6da719f6262ee785e750771f2c7680bd2f1696f390003e1b4c6786504ebca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee6da719f6262ee785e750771f2c7680bd2f1696f390003e1b4c6786504ebca->enter($__internal_fee6da719f6262ee785e750771f2c7680bd2f1696f390003e1b4c6786504ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c07b9957ca5b3f1212ed05029b7e7dc4c4529e7e553df0afdf11e906b7e4e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c07b9957ca5b3f1212ed05029b7e7dc4c4529e7e553df0afdf11e906b7e4e7c->enter($__internal_4c07b9957ca5b3f1212ed05029b7e7dc4c4529e7e553df0afdf11e906b7e4e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4c07b9957ca5b3f1212ed05029b7e7dc4c4529e7e553df0afdf11e906b7e4e7c->leave($__internal_4c07b9957ca5b3f1212ed05029b7e7dc4c4529e7e553df0afdf11e906b7e4e7c_prof);

        
        $__internal_fee6da719f6262ee785e750771f2c7680bd2f1696f390003e1b4c6786504ebca->leave($__internal_fee6da719f6262ee785e750771f2c7680bd2f1696f390003e1b4c6786504ebca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
