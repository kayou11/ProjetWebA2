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
        $__internal_c4272466a489a239d470dd18cc9eea5f702f8936177025ac5475f59fabd0ffe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4272466a489a239d470dd18cc9eea5f702f8936177025ac5475f59fabd0ffe8->enter($__internal_c4272466a489a239d470dd18cc9eea5f702f8936177025ac5475f59fabd0ffe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        $__internal_12aa81129a39a586beed44210f5f2c9d9b7a53faaad4c5aea9165d3b5386a4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12aa81129a39a586beed44210f5f2c9d9b7a53faaad4c5aea9165d3b5386a4e5->enter($__internal_12aa81129a39a586beed44210f5f2c9d9b7a53faaad4c5aea9165d3b5386a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

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
        
        $__internal_c4272466a489a239d470dd18cc9eea5f702f8936177025ac5475f59fabd0ffe8->leave($__internal_c4272466a489a239d470dd18cc9eea5f702f8936177025ac5475f59fabd0ffe8_prof);

        
        $__internal_12aa81129a39a586beed44210f5f2c9d9b7a53faaad4c5aea9165d3b5386a4e5->leave($__internal_12aa81129a39a586beed44210f5f2c9d9b7a53faaad4c5aea9165d3b5386a4e5_prof);

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
