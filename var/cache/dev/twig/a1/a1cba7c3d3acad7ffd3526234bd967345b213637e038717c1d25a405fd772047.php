<?php

/* @User/layout.html.twig */
class __TwigTemplate_01fdac27fb5d10c26b1de3ef44433203cfcfcdd167a92bc7221c0996aee0dcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "@User/layout.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cd2395de517a0ad8733af36d78c95d2f44a46adea0f4b9cc4d73e07d6a9c5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd2395de517a0ad8733af36d78c95d2f44a46adea0f4b9cc4d73e07d6a9c5db->enter($__internal_5cd2395de517a0ad8733af36d78c95d2f44a46adea0f4b9cc4d73e07d6a9c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $__internal_122455edb0cb1f86733e23d0e773980229e4d4858c9c714b4281aaca638a8455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122455edb0cb1f86733e23d0e773980229e4d4858c9c714b4281aaca638a8455->enter($__internal_122455edb0cb1f86733e23d0e773980229e4d4858c9c714b4281aaca638a8455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd2395de517a0ad8733af36d78c95d2f44a46adea0f4b9cc4d73e07d6a9c5db->leave($__internal_5cd2395de517a0ad8733af36d78c95d2f44a46adea0f4b9cc4d73e07d6a9c5db_prof);

        
        $__internal_122455edb0cb1f86733e23d0e773980229e4d4858c9c714b4281aaca638a8455->leave($__internal_122455edb0cb1f86733e23d0e773980229e4d4858c9c714b4281aaca638a8455_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_a5a6d898ff77586215bccdf9886bdcf42b251a315d3fee6c93fcdc7bf6768cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a6d898ff77586215bccdf9886bdcf42b251a315d3fee6c93fcdc7bf6768cf7->enter($__internal_a5a6d898ff77586215bccdf9886bdcf42b251a315d3fee6c93fcdc7bf6768cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_fbb965198e88148ce50272579640574b45a6ce51a53e08d319737d80cd6f281b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb965198e88148ce50272579640574b45a6ce51a53e08d319737d80cd6f281b->enter($__internal_fbb965198e88148ce50272579640574b45a6ce51a53e08d319737d80cd6f281b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_fbb965198e88148ce50272579640574b45a6ce51a53e08d319737d80cd6f281b->leave($__internal_fbb965198e88148ce50272579640574b45a6ce51a53e08d319737d80cd6f281b_prof);

        
        $__internal_a5a6d898ff77586215bccdf9886bdcf42b251a315d3fee6c93fcdc7bf6768cf7->leave($__internal_a5a6d898ff77586215bccdf9886bdcf42b251a315d3fee6c93fcdc7bf6768cf7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_66b681b7dcee1f9ea3b9e645491c2c84f2ebffab627e00d907974c99b067038f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b681b7dcee1f9ea3b9e645491c2c84f2ebffab627e00d907974c99b067038f->enter($__internal_66b681b7dcee1f9ea3b9e645491c2c84f2ebffab627e00d907974c99b067038f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_56293663944bb920d33f40846189044566a35d2a850d7363e1486dea18826b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56293663944bb920d33f40846189044566a35d2a850d7363e1486dea18826b83->enter($__internal_56293663944bb920d33f40846189044566a35d2a850d7363e1486dea18826b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_56293663944bb920d33f40846189044566a35d2a850d7363e1486dea18826b83->leave($__internal_56293663944bb920d33f40846189044566a35d2a850d7363e1486dea18826b83_prof);

        
        $__internal_66b681b7dcee1f9ea3b9e645491c2c84f2ebffab627e00d907974c99b067038f->leave($__internal_66b681b7dcee1f9ea3b9e645491c2c84f2ebffab627e00d907974c99b067038f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab1305a1e7991a96f3363fe83f0b9a14b22d52877713796cc8cdda2dcbf5c134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1305a1e7991a96f3363fe83f0b9a14b22d52877713796cc8cdda2dcbf5c134->enter($__internal_ab1305a1e7991a96f3363fe83f0b9a14b22d52877713796cc8cdda2dcbf5c134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f4b4a8daed23fa48ecb92b58b8e652bf1028a876a8ba411b5a28e53e6e6c6bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b4a8daed23fa48ecb92b58b8e652bf1028a876a8ba411b5a28e53e6e6c6bb8->enter($__internal_f4b4a8daed23fa48ecb92b58b8e652bf1028a876a8ba411b5a28e53e6e6c6bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_f4b4a8daed23fa48ecb92b58b8e652bf1028a876a8ba411b5a28e53e6e6c6bb8->leave($__internal_f4b4a8daed23fa48ecb92b58b8e652bf1028a876a8ba411b5a28e53e6e6c6bb8_prof);

        
        $__internal_ab1305a1e7991a96f3363fe83f0b9a14b22d52877713796cc8cdda2dcbf5c134->leave($__internal_ab1305a1e7991a96f3363fe83f0b9a14b22d52877713796cc8cdda2dcbf5c134_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 6,  84 => 5,  73 => 7,  71 => 5,  68 => 4,  59 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}
{% block style %}{% endblock %}
{% block content %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@User/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
