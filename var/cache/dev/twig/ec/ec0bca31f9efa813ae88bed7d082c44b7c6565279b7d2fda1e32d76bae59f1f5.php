<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6ae5ba7a6df266ef8ba3ad674469323f2b84bc647c6aac8a5abc6ef046090cbe extends Twig_Template
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
        $__internal_c0fda42f7a7d380222bfdea101c8bff56573358f6653daf4a37eaa98bf2fd58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fda42f7a7d380222bfdea101c8bff56573358f6653daf4a37eaa98bf2fd58f->enter($__internal_c0fda42f7a7d380222bfdea101c8bff56573358f6653daf4a37eaa98bf2fd58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_56d723ada8e7eadf7bc57d47a4b1cc815722a17411754defdf9b6653021df192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d723ada8e7eadf7bc57d47a4b1cc815722a17411754defdf9b6653021df192->enter($__internal_56d723ada8e7eadf7bc57d47a4b1cc815722a17411754defdf9b6653021df192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c0fda42f7a7d380222bfdea101c8bff56573358f6653daf4a37eaa98bf2fd58f->leave($__internal_c0fda42f7a7d380222bfdea101c8bff56573358f6653daf4a37eaa98bf2fd58f_prof);

        
        $__internal_56d723ada8e7eadf7bc57d47a4b1cc815722a17411754defdf9b6653021df192->leave($__internal_56d723ada8e7eadf7bc57d47a4b1cc815722a17411754defdf9b6653021df192_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
