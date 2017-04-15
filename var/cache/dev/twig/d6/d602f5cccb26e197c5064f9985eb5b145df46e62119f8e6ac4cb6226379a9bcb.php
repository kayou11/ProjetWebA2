<?php

/* SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig */
class __TwigTemplate_51e2a1f1e8f05a4712bff36112ad6e0bc89539fd855f21091159a8b870e5b7e5 extends Twig_Template
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
        $__internal_5b15a89aa92b42b37e05e92e1088312e1e015ddaf1131374256e2a05d07079fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b15a89aa92b42b37e05e92e1088312e1e015ddaf1131374256e2a05d07079fc->enter($__internal_5b15a89aa92b42b37e05e92e1088312e1e015ddaf1131374256e2a05d07079fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig"));

        $__internal_8d8057fb4dad009cecb99984552650df2a5a60f141c05cbc5fbaccfc374a571f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8057fb4dad009cecb99984552650df2a5a60f141c05cbc5fbaccfc374a571f->enter($__internal_8d8057fb4dad009cecb99984552650df2a5a60f141c05cbc5fbaccfc374a571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig"));

        // line 1
        echo "<span class=\"ui blue";
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
        
        $__internal_5b15a89aa92b42b37e05e92e1088312e1e015ddaf1131374256e2a05d07079fc->leave($__internal_5b15a89aa92b42b37e05e92e1088312e1e015ddaf1131374256e2a05d07079fc_prof);

        
        $__internal_8d8057fb4dad009cecb99984552650df2a5a60f141c05cbc5fbaccfc374a571f->leave($__internal_8d8057fb4dad009cecb99984552650df2a5a60f141c05cbc5fbaccfc374a571f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig";
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
        return new Twig_Source("<span class=\"ui blue{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"clock icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/ShippingState/ready.html.twig");
    }
}
