<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_9cbb9322603933706e5fc1250f67dba80a2df993ea95506c91f32997cd7e106b extends Twig_Template
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
        $__internal_971b2ec286b18097bc376ddad34b5169fb7e2413ac1e5661b3e6691b122235cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971b2ec286b18097bc376ddad34b5169fb7e2413ac1e5661b3e6691b122235cc->enter($__internal_971b2ec286b18097bc376ddad34b5169fb7e2413ac1e5661b3e6691b122235cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2741c177289d62da7caa9286f454e0f9237ece3823ee211110a81780d80e5d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2741c177289d62da7caa9286f454e0f9237ece3823ee211110a81780d80e5d87->enter($__internal_2741c177289d62da7caa9286f454e0f9237ece3823ee211110a81780d80e5d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_971b2ec286b18097bc376ddad34b5169fb7e2413ac1e5661b3e6691b122235cc->leave($__internal_971b2ec286b18097bc376ddad34b5169fb7e2413ac1e5661b3e6691b122235cc_prof);

        
        $__internal_2741c177289d62da7caa9286f454e0f9237ece3823ee211110a81780d80e5d87->leave($__internal_2741c177289d62da7caa9286f454e0f9237ece3823ee211110a81780d80e5d87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
