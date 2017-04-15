<?php

/* SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig */
class __TwigTemplate_76a9dc9b38810e09d233a17ecc18b3939fc851ef18033aa3d34e52ae6c3b2e6a extends Twig_Template
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
        $__internal_98c78af7a78e4bf05eb12595fd23ff53a7e0ec654ea942e0ce7b03d12be8e9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c78af7a78e4bf05eb12595fd23ff53a7e0ec654ea942e0ce7b03d12be8e9ba->enter($__internal_98c78af7a78e4bf05eb12595fd23ff53a7e0ec654ea942e0ce7b03d12be8e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig"));

        $__internal_495d49b5b7fb080f78a36d99fc935033486bf6b76dc7e6883d6b03800b731e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495d49b5b7fb080f78a36d99fc935033486bf6b76dc7e6883d6b03800b731e93->enter($__internal_495d49b5b7fb080f78a36d99fc935033486bf6b76dc7e6883d6b03800b731e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig"));

        // line 1
        echo "<span class=\"ui green";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_98c78af7a78e4bf05eb12595fd23ff53a7e0ec654ea942e0ce7b03d12be8e9ba->leave($__internal_98c78af7a78e4bf05eb12595fd23ff53a7e0ec654ea942e0ce7b03d12be8e9ba_prof);

        
        $__internal_495d49b5b7fb080f78a36d99fc935033486bf6b76dc7e6883d6b03800b731e93->leave($__internal_495d49b5b7fb080f78a36d99fc935033486bf6b76dc7e6883d6b03800b731e93_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui green{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/PaymentState/paid.html.twig");
    }
}
