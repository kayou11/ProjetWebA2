<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53642aff8c12dd90b24d74e2f620d5e47cc919ba09a72736585ee5ebc36038d2 extends Twig_Template
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
        $__internal_a9000e911230d1e33faf67d1a6e98c4a093fb36d2763c067ec47b1a8f22b848e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9000e911230d1e33faf67d1a6e98c4a093fb36d2763c067ec47b1a8f22b848e->enter($__internal_a9000e911230d1e33faf67d1a6e98c4a093fb36d2763c067ec47b1a8f22b848e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c3d9baab50e538afbdabd7e8db3dbc777bbce55e190bae4f3537b5f689de50a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d9baab50e538afbdabd7e8db3dbc777bbce55e190bae4f3537b5f689de50a6->enter($__internal_c3d9baab50e538afbdabd7e8db3dbc777bbce55e190bae4f3537b5f689de50a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a9000e911230d1e33faf67d1a6e98c4a093fb36d2763c067ec47b1a8f22b848e->leave($__internal_a9000e911230d1e33faf67d1a6e98c4a093fb36d2763c067ec47b1a8f22b848e_prof);

        
        $__internal_c3d9baab50e538afbdabd7e8db3dbc777bbce55e190bae4f3537b5f689de50a6->leave($__internal_c3d9baab50e538afbdabd7e8db3dbc777bbce55e190bae4f3537b5f689de50a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
