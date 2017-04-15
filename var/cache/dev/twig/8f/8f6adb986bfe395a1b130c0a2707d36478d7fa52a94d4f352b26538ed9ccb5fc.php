<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_266836353665eeb8f1ead42c73c8ab1b78f490ab26c996beef09732430b407ee extends Twig_Template
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
        $__internal_dead5034be5a8e5f2f5511375df8b216b0e4734c8ca0e82ed7f54c2bbddeead7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dead5034be5a8e5f2f5511375df8b216b0e4734c8ca0e82ed7f54c2bbddeead7->enter($__internal_dead5034be5a8e5f2f5511375df8b216b0e4734c8ca0e82ed7f54c2bbddeead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5ee43dd51449cbd123f58f341eab89f77900aa9bde88bcc4d67c773da62f44df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee43dd51449cbd123f58f341eab89f77900aa9bde88bcc4d67c773da62f44df->enter($__internal_5ee43dd51449cbd123f58f341eab89f77900aa9bde88bcc4d67c773da62f44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dead5034be5a8e5f2f5511375df8b216b0e4734c8ca0e82ed7f54c2bbddeead7->leave($__internal_dead5034be5a8e5f2f5511375df8b216b0e4734c8ca0e82ed7f54c2bbddeead7_prof);

        
        $__internal_5ee43dd51449cbd123f58f341eab89f77900aa9bde88bcc4d67c773da62f44df->leave($__internal_5ee43dd51449cbd123f58f341eab89f77900aa9bde88bcc4d67c773da62f44df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
