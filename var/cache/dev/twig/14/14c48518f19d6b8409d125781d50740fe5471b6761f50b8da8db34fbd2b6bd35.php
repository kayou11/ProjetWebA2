<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_4449f0406e42339eb92878c5a053f0322f827c837adef58eb0dcf9511b2d560c extends Twig_Template
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
        $__internal_1d97fd7334c9104fcdc2d146fe53d2ffd65cbb20d3f4264845c3399ffe446aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d97fd7334c9104fcdc2d146fe53d2ffd65cbb20d3f4264845c3399ffe446aef->enter($__internal_1d97fd7334c9104fcdc2d146fe53d2ffd65cbb20d3f4264845c3399ffe446aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_daa3443426a5f9d60362e90dd9fcc51555c2e568637728b2e54fab3bcb9b7528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa3443426a5f9d60362e90dd9fcc51555c2e568637728b2e54fab3bcb9b7528->enter($__internal_daa3443426a5f9d60362e90dd9fcc51555c2e568637728b2e54fab3bcb9b7528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_1d97fd7334c9104fcdc2d146fe53d2ffd65cbb20d3f4264845c3399ffe446aef->leave($__internal_1d97fd7334c9104fcdc2d146fe53d2ffd65cbb20d3f4264845c3399ffe446aef_prof);

        
        $__internal_daa3443426a5f9d60362e90dd9fcc51555c2e568637728b2e54fab3bcb9b7528->leave($__internal_daa3443426a5f9d60362e90dd9fcc51555c2e568637728b2e54fab3bcb9b7528_prof);

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
