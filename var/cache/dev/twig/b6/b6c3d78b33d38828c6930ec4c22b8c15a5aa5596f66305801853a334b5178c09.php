<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8ecf163068ac17b63cdd93158fe4c62852e2fe1c07021c9eb06fc79573f11397 extends Twig_Template
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
        $__internal_553b88099b341475bce44e1a92eb96b933f4ae108fd8fa8dd290e07ad5c82aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553b88099b341475bce44e1a92eb96b933f4ae108fd8fa8dd290e07ad5c82aa6->enter($__internal_553b88099b341475bce44e1a92eb96b933f4ae108fd8fa8dd290e07ad5c82aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f11fb98444efb6aa5130ea758750614a9bd3b587031d9b28f5f7f1dd5d5e4afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11fb98444efb6aa5130ea758750614a9bd3b587031d9b28f5f7f1dd5d5e4afb->enter($__internal_f11fb98444efb6aa5130ea758750614a9bd3b587031d9b28f5f7f1dd5d5e4afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_553b88099b341475bce44e1a92eb96b933f4ae108fd8fa8dd290e07ad5c82aa6->leave($__internal_553b88099b341475bce44e1a92eb96b933f4ae108fd8fa8dd290e07ad5c82aa6_prof);

        
        $__internal_f11fb98444efb6aa5130ea758750614a9bd3b587031d9b28f5f7f1dd5d5e4afb->leave($__internal_f11fb98444efb6aa5130ea758750614a9bd3b587031d9b28f5f7f1dd5d5e4afb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
