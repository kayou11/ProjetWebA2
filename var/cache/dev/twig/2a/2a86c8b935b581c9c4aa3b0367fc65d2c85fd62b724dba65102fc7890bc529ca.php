<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_43f81a62435c9b2086b6e4572b1c63b8e4af16057d54b132a56547b8b8559d4c extends Twig_Template
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
        $__internal_5a73459f79fd2810ade8866297577996aa9bb59a52af1960621e40dd73c05e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a73459f79fd2810ade8866297577996aa9bb59a52af1960621e40dd73c05e54->enter($__internal_5a73459f79fd2810ade8866297577996aa9bb59a52af1960621e40dd73c05e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_00eb065501459481944742b1f55209fe5d396bb22c824b3c17b9c86c00e8eae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00eb065501459481944742b1f55209fe5d396bb22c824b3c17b9c86c00e8eae1->enter($__internal_00eb065501459481944742b1f55209fe5d396bb22c824b3c17b9c86c00e8eae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5a73459f79fd2810ade8866297577996aa9bb59a52af1960621e40dd73c05e54->leave($__internal_5a73459f79fd2810ade8866297577996aa9bb59a52af1960621e40dd73c05e54_prof);

        
        $__internal_00eb065501459481944742b1f55209fe5d396bb22c824b3c17b9c86c00e8eae1->leave($__internal_00eb065501459481944742b1f55209fe5d396bb22c824b3c17b9c86c00e8eae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
