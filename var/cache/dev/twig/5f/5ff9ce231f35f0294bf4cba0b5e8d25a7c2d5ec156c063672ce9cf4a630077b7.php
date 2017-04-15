<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ac1537708aeeef2bc2c57e101ac611dc42fd8da078e2db25440192d1446d098f extends Twig_Template
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
        $__internal_e8acfba4e61f8c7b4931cf1dac22182d511697dd2028909d8b1ef6d542a1b95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8acfba4e61f8c7b4931cf1dac22182d511697dd2028909d8b1ef6d542a1b95e->enter($__internal_e8acfba4e61f8c7b4931cf1dac22182d511697dd2028909d8b1ef6d542a1b95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9627cb6f732209164cf15445360628e03c6122ae45939bae0d35c5e5c6867b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9627cb6f732209164cf15445360628e03c6122ae45939bae0d35c5e5c6867b34->enter($__internal_9627cb6f732209164cf15445360628e03c6122ae45939bae0d35c5e5c6867b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e8acfba4e61f8c7b4931cf1dac22182d511697dd2028909d8b1ef6d542a1b95e->leave($__internal_e8acfba4e61f8c7b4931cf1dac22182d511697dd2028909d8b1ef6d542a1b95e_prof);

        
        $__internal_9627cb6f732209164cf15445360628e03c6122ae45939bae0d35c5e5c6867b34->leave($__internal_9627cb6f732209164cf15445360628e03c6122ae45939bae0d35c5e5c6867b34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
