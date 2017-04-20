<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8b9813817da807aff6eec225cf8d7cf3179c30afd70fa4ee31ec13bf0d39bffe extends Twig_Template
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
        $__internal_eee955293633e7a2a3437b5cd0018a001b135053dd0b9e6f3b3bec80b97287df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee955293633e7a2a3437b5cd0018a001b135053dd0b9e6f3b3bec80b97287df->enter($__internal_eee955293633e7a2a3437b5cd0018a001b135053dd0b9e6f3b3bec80b97287df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_89b97277d5b712037b4dd9da3c3c25a6a7bcabca1456aa635d7ea7960a1b7ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b97277d5b712037b4dd9da3c3c25a6a7bcabca1456aa635d7ea7960a1b7ee6->enter($__internal_89b97277d5b712037b4dd9da3c3c25a6a7bcabca1456aa635d7ea7960a1b7ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_eee955293633e7a2a3437b5cd0018a001b135053dd0b9e6f3b3bec80b97287df->leave($__internal_eee955293633e7a2a3437b5cd0018a001b135053dd0b9e6f3b3bec80b97287df_prof);

        
        $__internal_89b97277d5b712037b4dd9da3c3c25a6a7bcabca1456aa635d7ea7960a1b7ee6->leave($__internal_89b97277d5b712037b4dd9da3c3c25a6a7bcabca1456aa635d7ea7960a1b7ee6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
