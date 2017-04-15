<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_63afd4b32b38157e83c4428fb93da9431eed7aa4549a8c0bfc68497caae0c129 extends Twig_Template
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
        $__internal_00188b58e6243fa8bc273c4647c6a6d0a9fcda6f77359844ec241b578cd561fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00188b58e6243fa8bc273c4647c6a6d0a9fcda6f77359844ec241b578cd561fa->enter($__internal_00188b58e6243fa8bc273c4647c6a6d0a9fcda6f77359844ec241b578cd561fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3f404fffc6c72d8cc2706fe70fac328d88208881ae50dd655a8bbdf697bef7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f404fffc6c72d8cc2706fe70fac328d88208881ae50dd655a8bbdf697bef7b2->enter($__internal_3f404fffc6c72d8cc2706fe70fac328d88208881ae50dd655a8bbdf697bef7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_00188b58e6243fa8bc273c4647c6a6d0a9fcda6f77359844ec241b578cd561fa->leave($__internal_00188b58e6243fa8bc273c4647c6a6d0a9fcda6f77359844ec241b578cd561fa_prof);

        
        $__internal_3f404fffc6c72d8cc2706fe70fac328d88208881ae50dd655a8bbdf697bef7b2->leave($__internal_3f404fffc6c72d8cc2706fe70fac328d88208881ae50dd655a8bbdf697bef7b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
