<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_fab440b523cbb35bd28b26d19f817801202d67c8d595764b285c7c13427b4a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7362517ff2a6b19b434b7338c1b93be0fbfa46ea4acbc3d2144d8a934ad5a824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7362517ff2a6b19b434b7338c1b93be0fbfa46ea4acbc3d2144d8a934ad5a824->enter($__internal_7362517ff2a6b19b434b7338c1b93be0fbfa46ea4acbc3d2144d8a934ad5a824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_539ae81d2e38ec74dde1040fff217c60919ec818a0a32ac112eee204cc7f8885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539ae81d2e38ec74dde1040fff217c60919ec818a0a32ac112eee204cc7f8885->enter($__internal_539ae81d2e38ec74dde1040fff217c60919ec818a0a32ac112eee204cc7f8885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7362517ff2a6b19b434b7338c1b93be0fbfa46ea4acbc3d2144d8a934ad5a824->leave($__internal_7362517ff2a6b19b434b7338c1b93be0fbfa46ea4acbc3d2144d8a934ad5a824_prof);

        
        $__internal_539ae81d2e38ec74dde1040fff217c60919ec818a0a32ac112eee204cc7f8885->leave($__internal_539ae81d2e38ec74dde1040fff217c60919ec818a0a32ac112eee204cc7f8885_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
