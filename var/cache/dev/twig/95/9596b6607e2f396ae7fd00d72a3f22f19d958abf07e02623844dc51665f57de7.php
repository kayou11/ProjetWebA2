<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_12a663d199dd43ec8a16169c29ec21b6f3e8fdc30486fa22c04471eb43303649 extends Twig_Template
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
        $__internal_0d82e4633ca726a5795b5ae27d00ad47a2960182285001e9be2f3beb8e984f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d82e4633ca726a5795b5ae27d00ad47a2960182285001e9be2f3beb8e984f9a->enter($__internal_0d82e4633ca726a5795b5ae27d00ad47a2960182285001e9be2f3beb8e984f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_355850957592fc7bfe3992a6a55cf2b82b63d0ada8d61a0b4d6e1e8897d51a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355850957592fc7bfe3992a6a55cf2b82b63d0ada8d61a0b4d6e1e8897d51a68->enter($__internal_355850957592fc7bfe3992a6a55cf2b82b63d0ada8d61a0b4d6e1e8897d51a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0d82e4633ca726a5795b5ae27d00ad47a2960182285001e9be2f3beb8e984f9a->leave($__internal_0d82e4633ca726a5795b5ae27d00ad47a2960182285001e9be2f3beb8e984f9a_prof);

        
        $__internal_355850957592fc7bfe3992a6a55cf2b82b63d0ada8d61a0b4d6e1e8897d51a68->leave($__internal_355850957592fc7bfe3992a6a55cf2b82b63d0ada8d61a0b4d6e1e8897d51a68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
