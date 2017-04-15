<?php

/* SyliusAdminBundle:Order/Label/State:fulfilled.html.twig */
class __TwigTemplate_c22209b6da103ae9c3894b802d05f178e2f0f7bbf7f0a27ea4764700e66f10bc extends Twig_Template
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
        $__internal_ca97be3ed7097f0213fc435255cb54835b8596ec1943baf7fc6a2b8bfb8e5278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca97be3ed7097f0213fc435255cb54835b8596ec1943baf7fc6a2b8bfb8e5278->enter($__internal_ca97be3ed7097f0213fc435255cb54835b8596ec1943baf7fc6a2b8bfb8e5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig"));

        $__internal_f931ec7f9fedda31d9100abb0fceb93082b795d5556034a0d1e201db5f5c9ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f931ec7f9fedda31d9100abb0fceb93082b795d5556034a0d1e201db5f5c9ee2->enter($__internal_f931ec7f9fedda31d9100abb0fceb93082b795d5556034a0d1e201db5f5c9ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_ca97be3ed7097f0213fc435255cb54835b8596ec1943baf7fc6a2b8bfb8e5278->leave($__internal_ca97be3ed7097f0213fc435255cb54835b8596ec1943baf7fc6a2b8bfb8e5278_prof);

        
        $__internal_f931ec7f9fedda31d9100abb0fceb93082b795d5556034a0d1e201db5f5c9ee2->leave($__internal_f931ec7f9fedda31d9100abb0fceb93082b795d5556034a0d1e201db5f5c9ee2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/State/fulfilled.html.twig");
    }
}
