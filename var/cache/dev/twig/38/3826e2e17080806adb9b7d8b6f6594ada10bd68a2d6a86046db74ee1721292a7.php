<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7e499de1e152d65b75da11e8e6c4e435eb1b4dcf5ee0c1c276662f0e228377da extends Twig_Template
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
        $__internal_d9113aea9a8efb9b80d1e9afe02f75cc9f888424903eb94bc57d10c17a306ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9113aea9a8efb9b80d1e9afe02f75cc9f888424903eb94bc57d10c17a306ad4->enter($__internal_d9113aea9a8efb9b80d1e9afe02f75cc9f888424903eb94bc57d10c17a306ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4a8af9434dc7a9c41099c7fe545a60276dc21e76171a2fe2b77ef77b50646f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8af9434dc7a9c41099c7fe545a60276dc21e76171a2fe2b77ef77b50646f45->enter($__internal_4a8af9434dc7a9c41099c7fe545a60276dc21e76171a2fe2b77ef77b50646f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d9113aea9a8efb9b80d1e9afe02f75cc9f888424903eb94bc57d10c17a306ad4->leave($__internal_d9113aea9a8efb9b80d1e9afe02f75cc9f888424903eb94bc57d10c17a306ad4_prof);

        
        $__internal_4a8af9434dc7a9c41099c7fe545a60276dc21e76171a2fe2b77ef77b50646f45->leave($__internal_4a8af9434dc7a9c41099c7fe545a60276dc21e76171a2fe2b77ef77b50646f45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
