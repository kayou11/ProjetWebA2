<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2273beb8c3eb2b71147cc44d0dc7ea22c1b7ca6d3f4be495f036fbe2138fd234 extends Twig_Template
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
        $__internal_b42e9af67961d7bc148716f1f025f11213c270a8f700043d478379ab1c57f778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42e9af67961d7bc148716f1f025f11213c270a8f700043d478379ab1c57f778->enter($__internal_b42e9af67961d7bc148716f1f025f11213c270a8f700043d478379ab1c57f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_57dd5712382e41e0f8dd9abfdb94d0818f26ea24a531a082be61a0de4514e2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dd5712382e41e0f8dd9abfdb94d0818f26ea24a531a082be61a0de4514e2a7->enter($__internal_57dd5712382e41e0f8dd9abfdb94d0818f26ea24a531a082be61a0de4514e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b42e9af67961d7bc148716f1f025f11213c270a8f700043d478379ab1c57f778->leave($__internal_b42e9af67961d7bc148716f1f025f11213c270a8f700043d478379ab1c57f778_prof);

        
        $__internal_57dd5712382e41e0f8dd9abfdb94d0818f26ea24a531a082be61a0de4514e2a7->leave($__internal_57dd5712382e41e0f8dd9abfdb94d0818f26ea24a531a082be61a0de4514e2a7_prof);

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
