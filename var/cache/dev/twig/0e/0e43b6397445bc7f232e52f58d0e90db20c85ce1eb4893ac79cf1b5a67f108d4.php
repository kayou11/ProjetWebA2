<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3f6b679d62c8f029c05c866a1a92311257c88af90b472d76b87579281215dddb extends Twig_Template
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
        $__internal_6aaffd44481afc882a652c1bcb65c8f4034d17b49176d0e59d7c88e940a1c0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aaffd44481afc882a652c1bcb65c8f4034d17b49176d0e59d7c88e940a1c0c7->enter($__internal_6aaffd44481afc882a652c1bcb65c8f4034d17b49176d0e59d7c88e940a1c0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_249a9b9acc2c95c4f5f2fe8cf0493e385b5eaeb69abe85a4d73e7eabfcbf1cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249a9b9acc2c95c4f5f2fe8cf0493e385b5eaeb69abe85a4d73e7eabfcbf1cfe->enter($__internal_249a9b9acc2c95c4f5f2fe8cf0493e385b5eaeb69abe85a4d73e7eabfcbf1cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6aaffd44481afc882a652c1bcb65c8f4034d17b49176d0e59d7c88e940a1c0c7->leave($__internal_6aaffd44481afc882a652c1bcb65c8f4034d17b49176d0e59d7c88e940a1c0c7_prof);

        
        $__internal_249a9b9acc2c95c4f5f2fe8cf0493e385b5eaeb69abe85a4d73e7eabfcbf1cfe->leave($__internal_249a9b9acc2c95c4f5f2fe8cf0493e385b5eaeb69abe85a4d73e7eabfcbf1cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
