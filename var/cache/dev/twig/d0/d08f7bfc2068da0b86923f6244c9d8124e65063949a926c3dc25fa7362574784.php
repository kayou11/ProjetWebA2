<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e0450f0c739590d748db9f4258585f17675c9a2b682c66faca4ef3aaf8654fb7 extends Twig_Template
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
        $__internal_9710e207ee24e3ce59046b1321eba45bb6bc99c614b6b1066c876e7ace04318b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9710e207ee24e3ce59046b1321eba45bb6bc99c614b6b1066c876e7ace04318b->enter($__internal_9710e207ee24e3ce59046b1321eba45bb6bc99c614b6b1066c876e7ace04318b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2c0130755d522962a2c8909f798a7a5593a80b53f1768fc6502667008bef1ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0130755d522962a2c8909f798a7a5593a80b53f1768fc6502667008bef1ec8->enter($__internal_2c0130755d522962a2c8909f798a7a5593a80b53f1768fc6502667008bef1ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9710e207ee24e3ce59046b1321eba45bb6bc99c614b6b1066c876e7ace04318b->leave($__internal_9710e207ee24e3ce59046b1321eba45bb6bc99c614b6b1066c876e7ace04318b_prof);

        
        $__internal_2c0130755d522962a2c8909f798a7a5593a80b53f1768fc6502667008bef1ec8->leave($__internal_2c0130755d522962a2c8909f798a7a5593a80b53f1768fc6502667008bef1ec8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
