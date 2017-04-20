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
        $__internal_5943f4e00d2f1f7f0fa62bc3031da48803e39c61679ed7c5b831647d32d16f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5943f4e00d2f1f7f0fa62bc3031da48803e39c61679ed7c5b831647d32d16f3e->enter($__internal_5943f4e00d2f1f7f0fa62bc3031da48803e39c61679ed7c5b831647d32d16f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f3e1bbc0a6c077a2261cd8f6f18f26bc63e2b708ef38bcd13008253de08056b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e1bbc0a6c077a2261cd8f6f18f26bc63e2b708ef38bcd13008253de08056b0->enter($__internal_f3e1bbc0a6c077a2261cd8f6f18f26bc63e2b708ef38bcd13008253de08056b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5943f4e00d2f1f7f0fa62bc3031da48803e39c61679ed7c5b831647d32d16f3e->leave($__internal_5943f4e00d2f1f7f0fa62bc3031da48803e39c61679ed7c5b831647d32d16f3e_prof);

        
        $__internal_f3e1bbc0a6c077a2261cd8f6f18f26bc63e2b708ef38bcd13008253de08056b0->leave($__internal_f3e1bbc0a6c077a2261cd8f6f18f26bc63e2b708ef38bcd13008253de08056b0_prof);

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
