<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ef8b4fafd9f28845f3ee8b99e1b43593dc18d113ddf22d3163075e1f3dfe1656 extends Twig_Template
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
        $__internal_b196fcf53020d537d0ced747731a03947a9cdfce7f5796ea659cca303fdb92d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b196fcf53020d537d0ced747731a03947a9cdfce7f5796ea659cca303fdb92d0->enter($__internal_b196fcf53020d537d0ced747731a03947a9cdfce7f5796ea659cca303fdb92d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6cf8891839f7ebbef455528722ce99a0c430ec32343319425044381df44cfbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf8891839f7ebbef455528722ce99a0c430ec32343319425044381df44cfbdc->enter($__internal_6cf8891839f7ebbef455528722ce99a0c430ec32343319425044381df44cfbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b196fcf53020d537d0ced747731a03947a9cdfce7f5796ea659cca303fdb92d0->leave($__internal_b196fcf53020d537d0ced747731a03947a9cdfce7f5796ea659cca303fdb92d0_prof);

        
        $__internal_6cf8891839f7ebbef455528722ce99a0c430ec32343319425044381df44cfbdc->leave($__internal_6cf8891839f7ebbef455528722ce99a0c430ec32343319425044381df44cfbdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
