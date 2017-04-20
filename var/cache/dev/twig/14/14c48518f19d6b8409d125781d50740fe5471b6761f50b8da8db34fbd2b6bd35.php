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
        $__internal_605a9c0bdfc64c88130eb389aeeaefd8c269f33d1c08f6e4c07131d5e6286275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605a9c0bdfc64c88130eb389aeeaefd8c269f33d1c08f6e4c07131d5e6286275->enter($__internal_605a9c0bdfc64c88130eb389aeeaefd8c269f33d1c08f6e4c07131d5e6286275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_9f3ba434e6819716b61f767a19299431d5d121818349f08bf504542a5d1d237e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3ba434e6819716b61f767a19299431d5d121818349f08bf504542a5d1d237e->enter($__internal_9f3ba434e6819716b61f767a19299431d5d121818349f08bf504542a5d1d237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_605a9c0bdfc64c88130eb389aeeaefd8c269f33d1c08f6e4c07131d5e6286275->leave($__internal_605a9c0bdfc64c88130eb389aeeaefd8c269f33d1c08f6e4c07131d5e6286275_prof);

        
        $__internal_9f3ba434e6819716b61f767a19299431d5d121818349f08bf504542a5d1d237e->leave($__internal_9f3ba434e6819716b61f767a19299431d5d121818349f08bf504542a5d1d237e_prof);

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
