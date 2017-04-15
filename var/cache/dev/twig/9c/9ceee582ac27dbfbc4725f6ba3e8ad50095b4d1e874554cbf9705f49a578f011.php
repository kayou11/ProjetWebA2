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
        $__internal_ae49c27fe2679e7ac9e25e6b9f5e1e6a98f8dcdb348416f49307a54733a71d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae49c27fe2679e7ac9e25e6b9f5e1e6a98f8dcdb348416f49307a54733a71d8d->enter($__internal_ae49c27fe2679e7ac9e25e6b9f5e1e6a98f8dcdb348416f49307a54733a71d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        $__internal_587d6cd3f4bdf751a92d24084dcf8642701fb2d59dfbe31833bdfd722fcb191c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587d6cd3f4bdf751a92d24084dcf8642701fb2d59dfbe31833bdfd722fcb191c->enter($__internal_587d6cd3f4bdf751a92d24084dcf8642701fb2d59dfbe31833bdfd722fcb191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["path"] ?? $this->getContext($context, "path"))), "html", null, true);
        echo "\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_ae49c27fe2679e7ac9e25e6b9f5e1e6a98f8dcdb348416f49307a54733a71d8d->leave($__internal_ae49c27fe2679e7ac9e25e6b9f5e1e6a98f8dcdb348416f49307a54733a71d8d_prof);

        
        $__internal_587d6cd3f4bdf751a92d24084dcf8642701fb2d59dfbe31833bdfd722fcb191c->leave($__internal_587d6cd3f4bdf751a92d24084dcf8642701fb2d59dfbe31833bdfd722fcb191c_prof);

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
