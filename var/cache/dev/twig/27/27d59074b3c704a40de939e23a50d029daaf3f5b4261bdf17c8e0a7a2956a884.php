<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6f38a9b77e31a1e4e7149fefdeb1932bf28d83f0314d72f6cf9f33ea565b5348 extends Twig_Template
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
        $__internal_a8df36a42c7bbe9f3fb048d03885f1658c3346eb2def398feb1803451e473574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8df36a42c7bbe9f3fb048d03885f1658c3346eb2def398feb1803451e473574->enter($__internal_a8df36a42c7bbe9f3fb048d03885f1658c3346eb2def398feb1803451e473574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_78c92badf834846a7f98283d44cf20356e7827a87f8e087bbd2e8c039b5a5ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c92badf834846a7f98283d44cf20356e7827a87f8e087bbd2e8c039b5a5ade->enter($__internal_78c92badf834846a7f98283d44cf20356e7827a87f8e087bbd2e8c039b5a5ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a8df36a42c7bbe9f3fb048d03885f1658c3346eb2def398feb1803451e473574->leave($__internal_a8df36a42c7bbe9f3fb048d03885f1658c3346eb2def398feb1803451e473574_prof);

        
        $__internal_78c92badf834846a7f98283d44cf20356e7827a87f8e087bbd2e8c039b5a5ade->leave($__internal_78c92badf834846a7f98283d44cf20356e7827a87f8e087bbd2e8c039b5a5ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
