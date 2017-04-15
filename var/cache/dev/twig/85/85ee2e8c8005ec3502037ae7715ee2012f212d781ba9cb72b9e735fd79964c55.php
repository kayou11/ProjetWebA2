<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_ed5696036309b235abd9cf0afba9631eb982d516f65f36dd7ec279b48d95cb8f extends Twig_Template
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
        $__internal_363dd99ebf7bf68dde4f233554b387dfc66cfd3dd1e36210ed5d81c9b59621b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363dd99ebf7bf68dde4f233554b387dfc66cfd3dd1e36210ed5d81c9b59621b5->enter($__internal_363dd99ebf7bf68dde4f233554b387dfc66cfd3dd1e36210ed5d81c9b59621b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_73bad1719b675f8484d53e1db6fce9ae9cf4c3332d6a77f6207d549c2a797e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bad1719b675f8484d53e1db6fce9ae9cf4c3332d6a77f6207d549c2a797e9b->enter($__internal_73bad1719b675f8484d53e1db6fce9ae9cf4c3332d6a77f6207d549c2a797e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/error.html.twig", "TwigBundle:Exception:error.html.twig", 1)->display($context);
        
        $__internal_363dd99ebf7bf68dde4f233554b387dfc66cfd3dd1e36210ed5d81c9b59621b5->leave($__internal_363dd99ebf7bf68dde4f233554b387dfc66cfd3dd1e36210ed5d81c9b59621b5_prof);

        
        $__internal_73bad1719b675f8484d53e1db6fce9ae9cf4c3332d6a77f6207d549c2a797e9b->leave($__internal_73bad1719b675f8484d53e1db6fce9ae9cf4c3332d6a77f6207d549c2a797e9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
        return new Twig_Source("{% include '@SyliusShop/error.html.twig' %}
", "TwigBundle:Exception:error.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
