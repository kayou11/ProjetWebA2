<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a7cdacc664e00eb9850dd027df2b9b927c9341bd55098add9b551b923794ce9d extends Twig_Template
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
        $__internal_7e9bf1251176517e03f17fe16667e593f2c0e82edff92a00bc4e9525c4b91100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9bf1251176517e03f17fe16667e593f2c0e82edff92a00bc4e9525c4b91100->enter($__internal_7e9bf1251176517e03f17fe16667e593f2c0e82edff92a00bc4e9525c4b91100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_55156f3e48a37d9a7d93a9f57f085cba0e875e1eed828c472353b335f6cf0d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55156f3e48a37d9a7d93a9f57f085cba0e875e1eed828c472353b335f6cf0d3d->enter($__internal_55156f3e48a37d9a7d93a9f57f085cba0e875e1eed828c472353b335f6cf0d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7e9bf1251176517e03f17fe16667e593f2c0e82edff92a00bc4e9525c4b91100->leave($__internal_7e9bf1251176517e03f17fe16667e593f2c0e82edff92a00bc4e9525c4b91100_prof);

        
        $__internal_55156f3e48a37d9a7d93a9f57f085cba0e875e1eed828c472353b335f6cf0d3d->leave($__internal_55156f3e48a37d9a7d93a9f57f085cba0e875e1eed828c472353b335f6cf0d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
