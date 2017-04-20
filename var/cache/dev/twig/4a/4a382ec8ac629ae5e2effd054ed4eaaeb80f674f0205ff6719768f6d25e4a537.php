<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_94641d383bc9b83346974321ccd4200458da37a2b5841c898dfff07f045dc337 extends Twig_Template
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
        $__internal_fa3d28aeefafd313d794a3a6ad0f8a325c38a41d1b54be8ef01c965e363f1b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d28aeefafd313d794a3a6ad0f8a325c38a41d1b54be8ef01c965e363f1b44->enter($__internal_fa3d28aeefafd313d794a3a6ad0f8a325c38a41d1b54be8ef01c965e363f1b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e2150e6917e9f6d1411884c45b743bad9362e71abf136c252337d6bcb3aa8026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2150e6917e9f6d1411884c45b743bad9362e71abf136c252337d6bcb3aa8026->enter($__internal_e2150e6917e9f6d1411884c45b743bad9362e71abf136c252337d6bcb3aa8026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fa3d28aeefafd313d794a3a6ad0f8a325c38a41d1b54be8ef01c965e363f1b44->leave($__internal_fa3d28aeefafd313d794a3a6ad0f8a325c38a41d1b54be8ef01c965e363f1b44_prof);

        
        $__internal_e2150e6917e9f6d1411884c45b743bad9362e71abf136c252337d6bcb3aa8026->leave($__internal_e2150e6917e9f6d1411884c45b743bad9362e71abf136c252337d6bcb3aa8026_prof);

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
