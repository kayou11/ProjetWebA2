<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5aabf4d1837fd6042ea6138d02f0cdf51a7a86961c8e5c92656f5c97c29a3328 extends Twig_Template
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
        $__internal_961b2e22f65694262e65b8a5ed0b11bf9fb25ba6f9c46aa9e7ae986bb4954774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961b2e22f65694262e65b8a5ed0b11bf9fb25ba6f9c46aa9e7ae986bb4954774->enter($__internal_961b2e22f65694262e65b8a5ed0b11bf9fb25ba6f9c46aa9e7ae986bb4954774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0a76b7cd3f506c0f244ec3aad6056049f65944ebf9d526ababd8fdbcec81c2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a76b7cd3f506c0f244ec3aad6056049f65944ebf9d526ababd8fdbcec81c2b4->enter($__internal_0a76b7cd3f506c0f244ec3aad6056049f65944ebf9d526ababd8fdbcec81c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_961b2e22f65694262e65b8a5ed0b11bf9fb25ba6f9c46aa9e7ae986bb4954774->leave($__internal_961b2e22f65694262e65b8a5ed0b11bf9fb25ba6f9c46aa9e7ae986bb4954774_prof);

        
        $__internal_0a76b7cd3f506c0f244ec3aad6056049f65944ebf9d526ababd8fdbcec81c2b4->leave($__internal_0a76b7cd3f506c0f244ec3aad6056049f65944ebf9d526ababd8fdbcec81c2b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
