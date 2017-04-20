<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b22c78b33e4130cea8f1cc83a86b12702dafbb39948200f51f9a0297db0a427b extends Twig_Template
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
        $__internal_c5b69018c49d5f69b4a562b2c28c1b9fc09f41762c21cacf4159e64303a68748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b69018c49d5f69b4a562b2c28c1b9fc09f41762c21cacf4159e64303a68748->enter($__internal_c5b69018c49d5f69b4a562b2c28c1b9fc09f41762c21cacf4159e64303a68748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6387222d01b66bf73354314098ded331165e2a48f069de34c9896b4ef2b07cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6387222d01b66bf73354314098ded331165e2a48f069de34c9896b4ef2b07cea->enter($__internal_6387222d01b66bf73354314098ded331165e2a48f069de34c9896b4ef2b07cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c5b69018c49d5f69b4a562b2c28c1b9fc09f41762c21cacf4159e64303a68748->leave($__internal_c5b69018c49d5f69b4a562b2c28c1b9fc09f41762c21cacf4159e64303a68748_prof);

        
        $__internal_6387222d01b66bf73354314098ded331165e2a48f069de34c9896b4ef2b07cea->leave($__internal_6387222d01b66bf73354314098ded331165e2a48f069de34c9896b4ef2b07cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
