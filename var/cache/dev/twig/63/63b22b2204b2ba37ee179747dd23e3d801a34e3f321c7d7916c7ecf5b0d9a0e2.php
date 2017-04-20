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
        $__internal_5b939467cebed631b962d1c426e5c6f7fd95fe79125bd7f9e1d967fcb08c60c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b939467cebed631b962d1c426e5c6f7fd95fe79125bd7f9e1d967fcb08c60c0->enter($__internal_5b939467cebed631b962d1c426e5c6f7fd95fe79125bd7f9e1d967fcb08c60c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b2079bf1cfe16865e3b2761fb68992ea861d9ef66ecbb48474acb40edc839846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2079bf1cfe16865e3b2761fb68992ea861d9ef66ecbb48474acb40edc839846->enter($__internal_b2079bf1cfe16865e3b2761fb68992ea861d9ef66ecbb48474acb40edc839846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5b939467cebed631b962d1c426e5c6f7fd95fe79125bd7f9e1d967fcb08c60c0->leave($__internal_5b939467cebed631b962d1c426e5c6f7fd95fe79125bd7f9e1d967fcb08c60c0_prof);

        
        $__internal_b2079bf1cfe16865e3b2761fb68992ea861d9ef66ecbb48474acb40edc839846->leave($__internal_b2079bf1cfe16865e3b2761fb68992ea861d9ef66ecbb48474acb40edc839846_prof);

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
