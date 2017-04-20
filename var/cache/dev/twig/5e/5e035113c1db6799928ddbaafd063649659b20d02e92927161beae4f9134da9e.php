<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b923c8616ca6daa0b81e9a1d5d935bbae7b5540fa36e5af16247804821141998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f693131231d8cc80dae950f2b86385c3142e5f5cae7caddbbabb8b1148ccc54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f693131231d8cc80dae950f2b86385c3142e5f5cae7caddbbabb8b1148ccc54a->enter($__internal_f693131231d8cc80dae950f2b86385c3142e5f5cae7caddbbabb8b1148ccc54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_265e4983a8483f97773e9f0964d3f09b025bc32f0808559280a7f1d7d84039c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265e4983a8483f97773e9f0964d3f09b025bc32f0808559280a7f1d7d84039c0->enter($__internal_265e4983a8483f97773e9f0964d3f09b025bc32f0808559280a7f1d7d84039c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f693131231d8cc80dae950f2b86385c3142e5f5cae7caddbbabb8b1148ccc54a->leave($__internal_f693131231d8cc80dae950f2b86385c3142e5f5cae7caddbbabb8b1148ccc54a_prof);

        
        $__internal_265e4983a8483f97773e9f0964d3f09b025bc32f0808559280a7f1d7d84039c0->leave($__internal_265e4983a8483f97773e9f0964d3f09b025bc32f0808559280a7f1d7d84039c0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74b63997e9a5647936d4f3cdbeeb7bae2ce7c00c56b0d1acf79862b1e22e1f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b63997e9a5647936d4f3cdbeeb7bae2ce7c00c56b0d1acf79862b1e22e1f58->enter($__internal_74b63997e9a5647936d4f3cdbeeb7bae2ce7c00c56b0d1acf79862b1e22e1f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4ca574f6df86ed7329a5ab200ff1ae1105e4e3b956f64c1fa21b9b93d6b2606e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca574f6df86ed7329a5ab200ff1ae1105e4e3b956f64c1fa21b9b93d6b2606e->enter($__internal_4ca574f6df86ed7329a5ab200ff1ae1105e4e3b956f64c1fa21b9b93d6b2606e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_4ca574f6df86ed7329a5ab200ff1ae1105e4e3b956f64c1fa21b9b93d6b2606e->leave($__internal_4ca574f6df86ed7329a5ab200ff1ae1105e4e3b956f64c1fa21b9b93d6b2606e_prof);

        
        $__internal_74b63997e9a5647936d4f3cdbeeb7bae2ce7c00c56b0d1acf79862b1e22e1f58->leave($__internal_74b63997e9a5647936d4f3cdbeeb7bae2ce7c00c56b0d1acf79862b1e22e1f58_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_854b15ad1aad1c788f86ff09005b0d9ab368673e7ebe9801ec497552cc491b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854b15ad1aad1c788f86ff09005b0d9ab368673e7ebe9801ec497552cc491b78->enter($__internal_854b15ad1aad1c788f86ff09005b0d9ab368673e7ebe9801ec497552cc491b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e9a6abc8024fe7d19fdfe996a247de6824797fe05a24de17e388696df5a22269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a6abc8024fe7d19fdfe996a247de6824797fe05a24de17e388696df5a22269->enter($__internal_e9a6abc8024fe7d19fdfe996a247de6824797fe05a24de17e388696df5a22269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e9a6abc8024fe7d19fdfe996a247de6824797fe05a24de17e388696df5a22269->leave($__internal_e9a6abc8024fe7d19fdfe996a247de6824797fe05a24de17e388696df5a22269_prof);

        
        $__internal_854b15ad1aad1c788f86ff09005b0d9ab368673e7ebe9801ec497552cc491b78->leave($__internal_854b15ad1aad1c788f86ff09005b0d9ab368673e7ebe9801ec497552cc491b78_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a056565c32fcb576fc9094d0fe9d381aa582492c795b87ced82b35f4be99a72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a056565c32fcb576fc9094d0fe9d381aa582492c795b87ced82b35f4be99a72b->enter($__internal_a056565c32fcb576fc9094d0fe9d381aa582492c795b87ced82b35f4be99a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b01b24e8a03e931559318c3de58d401f9175281c0093387ed72f66216db9ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01b24e8a03e931559318c3de58d401f9175281c0093387ed72f66216db9ef9b->enter($__internal_b01b24e8a03e931559318c3de58d401f9175281c0093387ed72f66216db9ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b01b24e8a03e931559318c3de58d401f9175281c0093387ed72f66216db9ef9b->leave($__internal_b01b24e8a03e931559318c3de58d401f9175281c0093387ed72f66216db9ef9b_prof);

        
        $__internal_a056565c32fcb576fc9094d0fe9d381aa582492c795b87ced82b35f4be99a72b->leave($__internal_a056565c32fcb576fc9094d0fe9d381aa582492c795b87ced82b35f4be99a72b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
