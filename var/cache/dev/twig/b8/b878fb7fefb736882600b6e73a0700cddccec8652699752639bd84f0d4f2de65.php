<?php

/* SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig */
class __TwigTemplate_62407e614ac0848ce7ffa47e86b6709344855d8a490d612ce95d99b67162f93c extends Twig_Template
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
        $__internal_1ab320d6f757ecca25b8fad9f7d8a4e9967a0ed2f099e32c5978693ef8699a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab320d6f757ecca25b8fad9f7d8a4e9967a0ed2f099e32c5978693ef8699a95->enter($__internal_1ab320d6f757ecca25b8fad9f7d8a4e9967a0ed2f099e32c5978693ef8699a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig"));

        $__internal_881a9aab00e906c62a392e26530cb85d8af5ac13607ba5dc213b740deee77ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881a9aab00e906c62a392e26530cb85d8af5ac13607ba5dc213b740deee77ed0->enter($__internal_881a9aab00e906c62a392e26530cb85d8af5ac13607ba5dc213b740deee77ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig"));

        // line 1
        echo "<span class=\"ui olive";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"clock icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_1ab320d6f757ecca25b8fad9f7d8a4e9967a0ed2f099e32c5978693ef8699a95->leave($__internal_1ab320d6f757ecca25b8fad9f7d8a4e9967a0ed2f099e32c5978693ef8699a95_prof);

        
        $__internal_881a9aab00e906c62a392e26530cb85d8af5ac13607ba5dc213b740deee77ed0->leave($__internal_881a9aab00e906c62a392e26530cb85d8af5ac13607ba5dc213b740deee77ed0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig";
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
        return new Twig_Source("<span class=\"ui olive{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"clock icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/PaymentState/awaiting_payment.html.twig");
    }
}
