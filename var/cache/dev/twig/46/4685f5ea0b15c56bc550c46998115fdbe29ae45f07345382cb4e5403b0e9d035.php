<?php

/* SyliusUiBundle::_stylesheets.html.twig */
class __TwigTemplate_b89a5f2d74b3ffc025e0b333414c5281949c6884a8f39f103e1e063774cb9806 extends Twig_Template
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
        $__internal_9cd6712bdbe77ce55d656b37c6b675fa9b95833128ad7bcc4fa555312a3d730f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd6712bdbe77ce55d656b37c6b675fa9b95833128ad7bcc4fa555312a3d730f->enter($__internal_9cd6712bdbe77ce55d656b37c6b675fa9b95833128ad7bcc4fa555312a3d730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_stylesheets.html.twig"));

        $__internal_f5ab1574a4b1ed205f8f0bfcb915747fd754cd47001e13bd3e263b2903de879a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ab1574a4b1ed205f8f0bfcb915747fd754cd47001e13bd3e263b2903de879a->enter($__internal_f5ab1574a4b1ed205f8f0bfcb915747fd754cd47001e13bd3e263b2903de879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_stylesheets.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["path"] ?? $this->getContext($context, "path"))), "html", null, true);
        echo "\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_9cd6712bdbe77ce55d656b37c6b675fa9b95833128ad7bcc4fa555312a3d730f->leave($__internal_9cd6712bdbe77ce55d656b37c6b675fa9b95833128ad7bcc4fa555312a3d730f_prof);

        
        $__internal_f5ab1574a4b1ed205f8f0bfcb915747fd754cd47001e13bd3e263b2903de879a->leave($__internal_f5ab1574a4b1ed205f8f0bfcb915747fd754cd47001e13bd3e263b2903de879a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset(path) }}\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
", "SyliusUiBundle::_stylesheets.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_stylesheets.html.twig");
    }
}
