<?php

/* @SyliusUi/_stylesheets.html.twig */
class __TwigTemplate_b0ba5a25dd2f66b5cc4108630be669ba1589bb412b17a8495182f1ab6a5f38b0 extends Twig_Template
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
        $__internal_a26bb03a4b79d5482093aa94007840e8011d5bf5e6618ea2cb6d1a35671aeb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26bb03a4b79d5482093aa94007840e8011d5bf5e6618ea2cb6d1a35671aeb7e->enter($__internal_a26bb03a4b79d5482093aa94007840e8011d5bf5e6618ea2cb6d1a35671aeb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        $__internal_2147d1b90fc2216ca67355c73c0442f66ac26e740833716d995616c21de296a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2147d1b90fc2216ca67355c73c0442f66ac26e740833716d995616c21de296a0->enter($__internal_2147d1b90fc2216ca67355c73c0442f66ac26e740833716d995616c21de296a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["path"] ?? $this->getContext($context, "path"))), "html", null, true);
        echo "\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_a26bb03a4b79d5482093aa94007840e8011d5bf5e6618ea2cb6d1a35671aeb7e->leave($__internal_a26bb03a4b79d5482093aa94007840e8011d5bf5e6618ea2cb6d1a35671aeb7e_prof);

        
        $__internal_2147d1b90fc2216ca67355c73c0442f66ac26e740833716d995616c21de296a0->leave($__internal_2147d1b90fc2216ca67355c73c0442f66ac26e740833716d995616c21de296a0_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/_stylesheets.html.twig";
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
", "@SyliusUi/_stylesheets.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_stylesheets.html.twig");
    }
}
