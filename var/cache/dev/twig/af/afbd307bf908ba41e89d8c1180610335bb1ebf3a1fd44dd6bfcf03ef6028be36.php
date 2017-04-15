<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_715fd51f1345af7891b1c79ea5bfb421b05b4635beefab1cdc791ac24d1d5303 extends Twig_Template
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
        $__internal_577793ee6ff41ce429042dad31fc9c52c3b1d61eec63b1c63972ac2c1263f2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577793ee6ff41ce429042dad31fc9c52c3b1d61eec63b1c63972ac2c1263f2ee->enter($__internal_577793ee6ff41ce429042dad31fc9c52c3b1d61eec63b1c63972ac2c1263f2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_66b0af900080bac4aba9ac9288d3dddfb437810169944af57f378af6b5abf6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b0af900080bac4aba9ac9288d3dddfb437810169944af57f378af6b5abf6cb->enter($__internal_66b0af900080bac4aba9ac9288d3dddfb437810169944af57f378af6b5abf6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error404.html.twig", "TwigBundle:Exception:error404.html.twig", 1)->display($context);
        
        $__internal_577793ee6ff41ce429042dad31fc9c52c3b1d61eec63b1c63972ac2c1263f2ee->leave($__internal_577793ee6ff41ce429042dad31fc9c52c3b1d61eec63b1c63972ac2c1263f2ee_prof);

        
        $__internal_66b0af900080bac4aba9ac9288d3dddfb437810169944af57f378af6b5abf6cb->leave($__internal_66b0af900080bac4aba9ac9288d3dddfb437810169944af57f378af6b5abf6cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/error404.html.twig' %}
", "TwigBundle:Exception:error404.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
