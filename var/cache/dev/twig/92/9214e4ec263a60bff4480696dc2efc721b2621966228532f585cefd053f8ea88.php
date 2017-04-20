<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a2d0499cbc8844bee014d1733ff9fc5d99e093dbedfa4e2dff55431b37ceab80 extends Twig_Template
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
        $__internal_f3b14c13d6b820ca6036dad4cd0a20be8e2f37064319d2a1d637fcadf00d02e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b14c13d6b820ca6036dad4cd0a20be8e2f37064319d2a1d637fcadf00d02e2->enter($__internal_f3b14c13d6b820ca6036dad4cd0a20be8e2f37064319d2a1d637fcadf00d02e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d048d68cce9151bbeb407c7d69e20183dd9a6c6b7cf7f31d619a8a6d6e3fe014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d048d68cce9151bbeb407c7d69e20183dd9a6c6b7cf7f31d619a8a6d6e3fe014->enter($__internal_d048d68cce9151bbeb407c7d69e20183dd9a6c6b7cf7f31d619a8a6d6e3fe014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3b14c13d6b820ca6036dad4cd0a20be8e2f37064319d2a1d637fcadf00d02e2->leave($__internal_f3b14c13d6b820ca6036dad4cd0a20be8e2f37064319d2a1d637fcadf00d02e2_prof);

        
        $__internal_d048d68cce9151bbeb407c7d69e20183dd9a6c6b7cf7f31d619a8a6d6e3fe014->leave($__internal_d048d68cce9151bbeb407c7d69e20183dd9a6c6b7cf7f31d619a8a6d6e3fe014_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
