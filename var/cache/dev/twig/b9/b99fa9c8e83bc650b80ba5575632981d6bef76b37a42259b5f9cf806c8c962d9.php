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
        $__internal_08910dc805c5e6bb0b2b130426412071d138a571534d77d605392257963a27d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08910dc805c5e6bb0b2b130426412071d138a571534d77d605392257963a27d7->enter($__internal_08910dc805c5e6bb0b2b130426412071d138a571534d77d605392257963a27d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_67e10adc15ceedabdae7407b0af9654442e36212f57f0119be8a4e684936fc17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e10adc15ceedabdae7407b0af9654442e36212f57f0119be8a4e684936fc17->enter($__internal_67e10adc15ceedabdae7407b0af9654442e36212f57f0119be8a4e684936fc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08910dc805c5e6bb0b2b130426412071d138a571534d77d605392257963a27d7->leave($__internal_08910dc805c5e6bb0b2b130426412071d138a571534d77d605392257963a27d7_prof);

        
        $__internal_67e10adc15ceedabdae7407b0af9654442e36212f57f0119be8a4e684936fc17->leave($__internal_67e10adc15ceedabdae7407b0af9654442e36212f57f0119be8a4e684936fc17_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c71940d872584720b80a3b76f68d590f401faf81c786c840e9b34403b24c835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c71940d872584720b80a3b76f68d590f401faf81c786c840e9b34403b24c835->enter($__internal_8c71940d872584720b80a3b76f68d590f401faf81c786c840e9b34403b24c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f664bb0fff72097a6c96ae1abcd1dd2d3207775d8e4074bd88f421877ec2db65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f664bb0fff72097a6c96ae1abcd1dd2d3207775d8e4074bd88f421877ec2db65->enter($__internal_f664bb0fff72097a6c96ae1abcd1dd2d3207775d8e4074bd88f421877ec2db65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 3)->display($context);
        
        $__internal_f664bb0fff72097a6c96ae1abcd1dd2d3207775d8e4074bd88f421877ec2db65->leave($__internal_f664bb0fff72097a6c96ae1abcd1dd2d3207775d8e4074bd88f421877ec2db65_prof);

        
        $__internal_8c71940d872584720b80a3b76f68d590f401faf81c786c840e9b34403b24c835->leave($__internal_8c71940d872584720b80a3b76f68d590f401faf81c786c840e9b34403b24c835_prof);

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
