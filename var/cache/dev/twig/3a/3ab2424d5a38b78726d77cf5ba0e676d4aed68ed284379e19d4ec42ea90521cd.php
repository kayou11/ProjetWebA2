<?php

/* SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig */
class __TwigTemplate_0755678af470ea816cd0f47edaf81f046dd99d7d1791f36543263f7ae799aacf extends Twig_Template
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
        $__internal_d052a0cf9e75aa989866b7c2348af943ff1c2eee11f2fe474c1bb3c38fc04234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d052a0cf9e75aa989866b7c2348af943ff1c2eee11f2fe474c1bb3c38fc04234->enter($__internal_d052a0cf9e75aa989866b7c2348af943ff1c2eee11f2fe474c1bb3c38fc04234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig"));

        $__internal_fae6a2c207771f584d895f82edb8350c927ee9eb3e45bb1bc5bd95d752be1fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae6a2c207771f584d895f82edb8350c927ee9eb3e45bb1bc5bd95d752be1fbc->enter($__internal_fae6a2c207771f584d895f82edb8350c927ee9eb3e45bb1bc5bd95d752be1fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_d052a0cf9e75aa989866b7c2348af943ff1c2eee11f2fe474c1bb3c38fc04234->leave($__internal_d052a0cf9e75aa989866b7c2348af943ff1c2eee11f2fe474c1bb3c38fc04234_prof);

        
        $__internal_fae6a2c207771f584d895f82edb8350c927ee9eb3e45bb1bc5bd95d752be1fbc->leave($__internal_fae6a2c207771f584d895f82edb8350c927ee9eb3e45bb1bc5bd95d752be1fbc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig";
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
", "SyliusShopBundle:Account/Order/Label/State:fulfilled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Label/State/fulfilled.html.twig");
    }
}
