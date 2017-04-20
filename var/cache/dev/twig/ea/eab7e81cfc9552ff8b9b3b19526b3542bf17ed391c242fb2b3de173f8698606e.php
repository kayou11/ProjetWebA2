<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_078e1b74bddb357755c4bab701908f4b7daab44ea69225039dad4c994d1e1906 extends Twig_Template
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
        $__internal_76b375621681f33a82a7eadbdaa60cd157bd46a037d5870e1d0a240a238e489d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b375621681f33a82a7eadbdaa60cd157bd46a037d5870e1d0a240a238e489d->enter($__internal_76b375621681f33a82a7eadbdaa60cd157bd46a037d5870e1d0a240a238e489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d4f0323508d83e0236ebe0c67f905773655b2a184193731e30d87825ae15c6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f0323508d83e0236ebe0c67f905773655b2a184193731e30d87825ae15c6fe->enter($__internal_d4f0323508d83e0236ebe0c67f905773655b2a184193731e30d87825ae15c6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_76b375621681f33a82a7eadbdaa60cd157bd46a037d5870e1d0a240a238e489d->leave($__internal_76b375621681f33a82a7eadbdaa60cd157bd46a037d5870e1d0a240a238e489d_prof);

        
        $__internal_d4f0323508d83e0236ebe0c67f905773655b2a184193731e30d87825ae15c6fe->leave($__internal_d4f0323508d83e0236ebe0c67f905773655b2a184193731e30d87825ae15c6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
