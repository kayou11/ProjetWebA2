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
        $__internal_0b1b333788b916a85d48e3097cdb763513e8fc688b221da3aa2bbcc650e59c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1b333788b916a85d48e3097cdb763513e8fc688b221da3aa2bbcc650e59c9b->enter($__internal_0b1b333788b916a85d48e3097cdb763513e8fc688b221da3aa2bbcc650e59c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_53a8664b27ba46959c11de9b0981bc96b58fd71eb0e0a0b4306ec255ccd68bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a8664b27ba46959c11de9b0981bc96b58fd71eb0e0a0b4306ec255ccd68bed->enter($__internal_53a8664b27ba46959c11de9b0981bc96b58fd71eb0e0a0b4306ec255ccd68bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_0b1b333788b916a85d48e3097cdb763513e8fc688b221da3aa2bbcc650e59c9b->leave($__internal_0b1b333788b916a85d48e3097cdb763513e8fc688b221da3aa2bbcc650e59c9b_prof);

        
        $__internal_53a8664b27ba46959c11de9b0981bc96b58fd71eb0e0a0b4306ec255ccd68bed->leave($__internal_53a8664b27ba46959c11de9b0981bc96b58fd71eb0e0a0b4306ec255ccd68bed_prof);

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
