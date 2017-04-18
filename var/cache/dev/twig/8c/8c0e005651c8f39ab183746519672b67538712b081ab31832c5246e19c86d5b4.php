<?php

/* @User/Registration/register_content.html.twig */
class __TwigTemplate_b4062bff7ffb44266ca32ae6d5468bbb7496844a3270302ae901dca6540bfc8e extends Twig_Template
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
        $__internal_3e99470c4fb4fb3854317055755729ddd1e0ae6e681ac20648833d6c92537424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e99470c4fb4fb3854317055755729ddd1e0ae6e681ac20648833d6c92537424->enter($__internal_3e99470c4fb4fb3854317055755729ddd1e0ae6e681ac20648833d6c92537424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        $__internal_918b440971ae6682b17b1664157caf05fb15d21333a8c80e663e333923365e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918b440971ae6682b17b1664157caf05fb15d21333a8c80e663e333923365e82->enter($__internal_918b440971ae6682b17b1664157caf05fb15d21333a8c80e663e333923365e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_3e99470c4fb4fb3854317055755729ddd1e0ae6e681ac20648833d6c92537424->leave($__internal_3e99470c4fb4fb3854317055755729ddd1e0ae6e681ac20648833d6c92537424_prof);

        
        $__internal_918b440971ae6682b17b1664157caf05fb15d21333a8c80e663e333923365e82->leave($__internal_918b440971ae6682b17b1664157caf05fb15d21333a8c80e663e333923365e82_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}", "@User/Registration/register_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
