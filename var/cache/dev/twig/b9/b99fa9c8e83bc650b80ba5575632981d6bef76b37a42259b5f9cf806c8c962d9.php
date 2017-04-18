<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_1b20ba1c8a5041e2f3bf9635980b4009b776d06ded30fbdef0736ae5342df112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f3d62a4d7c0cc6073873570f7c24338c80417a1590f3885960c19b1e7f52093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3d62a4d7c0cc6073873570f7c24338c80417a1590f3885960c19b1e7f52093->enter($__internal_3f3d62a4d7c0cc6073873570f7c24338c80417a1590f3885960c19b1e7f52093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_44c23e0b3fae277feb07fb1020b7190a253cb7e8fc599f298bf038ae62f10a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c23e0b3fae277feb07fb1020b7190a253cb7e8fc599f298bf038ae62f10a82->enter($__internal_44c23e0b3fae277feb07fb1020b7190a253cb7e8fc599f298bf038ae62f10a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3d62a4d7c0cc6073873570f7c24338c80417a1590f3885960c19b1e7f52093->leave($__internal_3f3d62a4d7c0cc6073873570f7c24338c80417a1590f3885960c19b1e7f52093_prof);

        
        $__internal_44c23e0b3fae277feb07fb1020b7190a253cb7e8fc599f298bf038ae62f10a82->leave($__internal_44c23e0b3fae277feb07fb1020b7190a253cb7e8fc599f298bf038ae62f10a82_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc2523299750249d7b128fda8a1856d5e0e847b390d932b80c92f054c4e3c5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2523299750249d7b128fda8a1856d5e0e847b390d932b80c92f054c4e3c5e6->enter($__internal_bc2523299750249d7b128fda8a1856d5e0e847b390d932b80c92f054c4e3c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7aaf51c61d4eec5146bed76f00c2f7d6001259df527879af67f7253c1fb7715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aaf51c61d4eec5146bed76f00c2f7d6001259df527879af67f7253c1fb7715->enter($__internal_b7aaf51c61d4eec5146bed76f00c2f7d6001259df527879af67f7253c1fb7715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 3)->display($context);
        
        $__internal_b7aaf51c61d4eec5146bed76f00c2f7d6001259df527879af67f7253c1fb7715->leave($__internal_b7aaf51c61d4eec5146bed76f00c2f7d6001259df527879af67f7253c1fb7715_prof);

        
        $__internal_bc2523299750249d7b128fda8a1856d5e0e847b390d932b80c92f054c4e3c5e6->leave($__internal_bc2523299750249d7b128fda8a1856d5e0e847b390d932b80c92f054c4e3c5e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}
{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
