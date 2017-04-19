<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6b3195a6b35b4ec2a04dad4c00b5090a82b155a71f03daa58f45121bcff6e08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a40a0d0f44acebbbe7f9d73378773415b6f3ac3b2c78333a4ae7a72fd7f1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a40a0d0f44acebbbe7f9d73378773415b6f3ac3b2c78333a4ae7a72fd7f1e6->enter($__internal_e5a40a0d0f44acebbbe7f9d73378773415b6f3ac3b2c78333a4ae7a72fd7f1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b47990ca549ad3c1ecd40a29695d9ccc9679798a82c3f8c329812c014bc14137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47990ca549ad3c1ecd40a29695d9ccc9679798a82c3f8c329812c014bc14137->enter($__internal_b47990ca549ad3c1ecd40a29695d9ccc9679798a82c3f8c329812c014bc14137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a40a0d0f44acebbbe7f9d73378773415b6f3ac3b2c78333a4ae7a72fd7f1e6->leave($__internal_e5a40a0d0f44acebbbe7f9d73378773415b6f3ac3b2c78333a4ae7a72fd7f1e6_prof);

        
        $__internal_b47990ca549ad3c1ecd40a29695d9ccc9679798a82c3f8c329812c014bc14137->leave($__internal_b47990ca549ad3c1ecd40a29695d9ccc9679798a82c3f8c329812c014bc14137_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_7701006b16d5b936fa8a421b24c6f27726778f711b5e1062842af3175749a5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7701006b16d5b936fa8a421b24c6f27726778f711b5e1062842af3175749a5b0->enter($__internal_7701006b16d5b936fa8a421b24c6f27726778f711b5e1062842af3175749a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_e9d5c33a85b2bbaad1ace2e08ae360e6dab0514beda13b2e8847d6d3384429b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d5c33a85b2bbaad1ace2e08ae360e6dab0514beda13b2e8847d6d3384429b9->enter($__internal_e9d5c33a85b2bbaad1ace2e08ae360e6dab0514beda13b2e8847d6d3384429b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
";
        
        $__internal_e9d5c33a85b2bbaad1ace2e08ae360e6dab0514beda13b2e8847d6d3384429b9->leave($__internal_e9d5c33a85b2bbaad1ace2e08ae360e6dab0514beda13b2e8847d6d3384429b9_prof);

        
        $__internal_7701006b16d5b936fa8a421b24c6f27726778f711b5e1062842af3175749a5b0->leave($__internal_7701006b16d5b936fa8a421b24c6f27726778f711b5e1062842af3175749a5b0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ee71966382d02c0d93a41ebb2c4d35a8d099fd9c5a5fc9cdd6bde02af54d115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee71966382d02c0d93a41ebb2c4d35a8d099fd9c5a5fc9cdd6bde02af54d115->enter($__internal_3ee71966382d02c0d93a41ebb2c4d35a8d099fd9c5a5fc9cdd6bde02af54d115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63c514f59575bbcfeaf3bbc1f3e3817939afff2ebccb06e3f0592211daa053f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c514f59575bbcfeaf3bbc1f3e3817939afff2ebccb06e3f0592211daa053f4->enter($__internal_63c514f59575bbcfeaf3bbc1f3e3817939afff2ebccb06e3f0592211daa053f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 6)->display($context);
        
        $__internal_63c514f59575bbcfeaf3bbc1f3e3817939afff2ebccb06e3f0592211daa053f4->leave($__internal_63c514f59575bbcfeaf3bbc1f3e3817939afff2ebccb06e3f0592211daa053f4_prof);

        
        $__internal_3ee71966382d02c0d93a41ebb2c4d35a8d099fd9c5a5fc9cdd6bde02af54d115->leave($__internal_3ee71966382d02c0d93a41ebb2c4d35a8d099fd9c5a5fc9cdd6bde02af54d115_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/change_password.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
