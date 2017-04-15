<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_06d03dc53aba87e5bd37c79ec1ebd6481c0d4a8078f807c5e45a00295335996b extends Twig_Template
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
        $__internal_3898c69e94d390dda26ca45f58c33ef34af5c710b2c5d9f73a423425f71ce75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3898c69e94d390dda26ca45f58c33ef34af5c710b2c5d9f73a423425f71ce75f->enter($__internal_3898c69e94d390dda26ca45f58c33ef34af5c710b2c5d9f73a423425f71ce75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6d1605dde0d3b9aebb614991a986113a4ee99f8aa558f01081c76b87f25e871c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1605dde0d3b9aebb614991a986113a4ee99f8aa558f01081c76b87f25e871c->enter($__internal_6d1605dde0d3b9aebb614991a986113a4ee99f8aa558f01081c76b87f25e871c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3898c69e94d390dda26ca45f58c33ef34af5c710b2c5d9f73a423425f71ce75f->leave($__internal_3898c69e94d390dda26ca45f58c33ef34af5c710b2c5d9f73a423425f71ce75f_prof);

        
        $__internal_6d1605dde0d3b9aebb614991a986113a4ee99f8aa558f01081c76b87f25e871c->leave($__internal_6d1605dde0d3b9aebb614991a986113a4ee99f8aa558f01081c76b87f25e871c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
