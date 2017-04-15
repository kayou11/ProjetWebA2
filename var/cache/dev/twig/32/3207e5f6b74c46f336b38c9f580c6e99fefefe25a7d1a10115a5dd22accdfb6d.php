<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_7fc7d5de1994ef1f54200519ab0738aabfa2fe2b14a55f4625a8262f135fd782 extends Twig_Template
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
        $__internal_9068c88c7a018d10735c6e769ac5ae3fac13b97871377f8dd6c958f4fab34682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9068c88c7a018d10735c6e769ac5ae3fac13b97871377f8dd6c958f4fab34682->enter($__internal_9068c88c7a018d10735c6e769ac5ae3fac13b97871377f8dd6c958f4fab34682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_1d7df1e1dd5c23d51b61106910905318294ae0ec7859ba7e0bfae21d9064241b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7df1e1dd5c23d51b61106910905318294ae0ec7859ba7e0bfae21d9064241b->enter($__internal_1d7df1e1dd5c23d51b61106910905318294ae0ec7859ba7e0bfae21d9064241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error500.html.twig", "TwigBundle:Exception:error500.html.twig", 1)->display($context);
        
        $__internal_9068c88c7a018d10735c6e769ac5ae3fac13b97871377f8dd6c958f4fab34682->leave($__internal_9068c88c7a018d10735c6e769ac5ae3fac13b97871377f8dd6c958f4fab34682_prof);

        
        $__internal_1d7df1e1dd5c23d51b61106910905318294ae0ec7859ba7e0bfae21d9064241b->leave($__internal_1d7df1e1dd5c23d51b61106910905318294ae0ec7859ba7e0bfae21d9064241b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
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
        return new Twig_Source("{% include '@SyliusShop/error500.html.twig' %}
", "TwigBundle:Exception:error500.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
