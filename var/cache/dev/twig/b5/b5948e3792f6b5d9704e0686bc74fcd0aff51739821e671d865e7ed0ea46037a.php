<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4b27bdd758fb6cfdc2102d52baa055a957bf4ca270056c155fab58577ae7d913 extends Twig_Template
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
        $__internal_6acae8fb59945992d62dc5d6a72b7a0e81d6065afd23ebd72dcb6daf4f0ba010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acae8fb59945992d62dc5d6a72b7a0e81d6065afd23ebd72dcb6daf4f0ba010->enter($__internal_6acae8fb59945992d62dc5d6a72b7a0e81d6065afd23ebd72dcb6daf4f0ba010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d4f8af9251b498bed7ff6f04a9f3c1e6f26247d7839b6df4c3ebec22ca149809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f8af9251b498bed7ff6f04a9f3c1e6f26247d7839b6df4c3ebec22ca149809->enter($__internal_d4f8af9251b498bed7ff6f04a9f3c1e6f26247d7839b6df4c3ebec22ca149809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6acae8fb59945992d62dc5d6a72b7a0e81d6065afd23ebd72dcb6daf4f0ba010->leave($__internal_6acae8fb59945992d62dc5d6a72b7a0e81d6065afd23ebd72dcb6daf4f0ba010_prof);

        
        $__internal_d4f8af9251b498bed7ff6f04a9f3c1e6f26247d7839b6df4c3ebec22ca149809->leave($__internal_d4f8af9251b498bed7ff6f04a9f3c1e6f26247d7839b6df4c3ebec22ca149809_prof);

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
