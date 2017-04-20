<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9788ca648ccf6b941eb07a8728f0418a906c9abeeaf12aad56ae48d339218657 extends Twig_Template
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
        $__internal_b55a48001c1c7931fb04b541e464a7ede0dc10e2ea9ed55d6d01a4a8b137b132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55a48001c1c7931fb04b541e464a7ede0dc10e2ea9ed55d6d01a4a8b137b132->enter($__internal_b55a48001c1c7931fb04b541e464a7ede0dc10e2ea9ed55d6d01a4a8b137b132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_47931b4b50e1d76b12dfb384c91415b3f3132d424b3d83ba98b483d6700b2509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47931b4b50e1d76b12dfb384c91415b3f3132d424b3d83ba98b483d6700b2509->enter($__internal_47931b4b50e1d76b12dfb384c91415b3f3132d424b3d83ba98b483d6700b2509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b55a48001c1c7931fb04b541e464a7ede0dc10e2ea9ed55d6d01a4a8b137b132->leave($__internal_b55a48001c1c7931fb04b541e464a7ede0dc10e2ea9ed55d6d01a4a8b137b132_prof);

        
        $__internal_47931b4b50e1d76b12dfb384c91415b3f3132d424b3d83ba98b483d6700b2509->leave($__internal_47931b4b50e1d76b12dfb384c91415b3f3132d424b3d83ba98b483d6700b2509_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
