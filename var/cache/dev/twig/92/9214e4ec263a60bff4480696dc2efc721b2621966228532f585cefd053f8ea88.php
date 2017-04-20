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
        $__internal_21d2f06af87e7c7727db17505855fd87f18ad5bf5ddb7172657253ae35b2616c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d2f06af87e7c7727db17505855fd87f18ad5bf5ddb7172657253ae35b2616c->enter($__internal_21d2f06af87e7c7727db17505855fd87f18ad5bf5ddb7172657253ae35b2616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_16a1843a2abca00471833846f380f0ce6d992d4316fd07172cd0252d7f1fcc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a1843a2abca00471833846f380f0ce6d992d4316fd07172cd0252d7f1fcc0e->enter($__internal_16a1843a2abca00471833846f380f0ce6d992d4316fd07172cd0252d7f1fcc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_21d2f06af87e7c7727db17505855fd87f18ad5bf5ddb7172657253ae35b2616c->leave($__internal_21d2f06af87e7c7727db17505855fd87f18ad5bf5ddb7172657253ae35b2616c_prof);

        
        $__internal_16a1843a2abca00471833846f380f0ce6d992d4316fd07172cd0252d7f1fcc0e->leave($__internal_16a1843a2abca00471833846f380f0ce6d992d4316fd07172cd0252d7f1fcc0e_prof);

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
