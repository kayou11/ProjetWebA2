<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a19f2e12ce2363850569bcb40e74a2c2ee49605757c587e11153a58ff3525493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c389e9fce724cb1822a7d2df24688b17c4b6f384527e3bfd16c9cce6b4de0e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c389e9fce724cb1822a7d2df24688b17c4b6f384527e3bfd16c9cce6b4de0e26->enter($__internal_c389e9fce724cb1822a7d2df24688b17c4b6f384527e3bfd16c9cce6b4de0e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_d5f4c182f74db99d5005cd0ae53d7071f3abab1f84834c3a74464ea90d34033f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f4c182f74db99d5005cd0ae53d7071f3abab1f84834c3a74464ea90d34033f->enter($__internal_d5f4c182f74db99d5005cd0ae53d7071f3abab1f84834c3a74464ea90d34033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c389e9fce724cb1822a7d2df24688b17c4b6f384527e3bfd16c9cce6b4de0e26->leave($__internal_c389e9fce724cb1822a7d2df24688b17c4b6f384527e3bfd16c9cce6b4de0e26_prof);

        
        $__internal_d5f4c182f74db99d5005cd0ae53d7071f3abab1f84834c3a74464ea90d34033f->leave($__internal_d5f4c182f74db99d5005cd0ae53d7071f3abab1f84834c3a74464ea90d34033f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70595edaf9c38d9104ff660fcd898c330d457104205f79230e88837041f0ab66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70595edaf9c38d9104ff660fcd898c330d457104205f79230e88837041f0ab66->enter($__internal_70595edaf9c38d9104ff660fcd898c330d457104205f79230e88837041f0ab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ead6a8335145eaa24639dfbcf95c59dc32eb95cf4f8a8c454300bcae4ab7a284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead6a8335145eaa24639dfbcf95c59dc32eb95cf4f8a8c454300bcae4ab7a284->enter($__internal_ead6a8335145eaa24639dfbcf95c59dc32eb95cf4f8a8c454300bcae4ab7a284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ead6a8335145eaa24639dfbcf95c59dc32eb95cf4f8a8c454300bcae4ab7a284->leave($__internal_ead6a8335145eaa24639dfbcf95c59dc32eb95cf4f8a8c454300bcae4ab7a284_prof);

        
        $__internal_70595edaf9c38d9104ff660fcd898c330d457104205f79230e88837041f0ab66->leave($__internal_70595edaf9c38d9104ff660fcd898c330d457104205f79230e88837041f0ab66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
