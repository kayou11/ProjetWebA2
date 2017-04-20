<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_884eb31974ec38a272f58763ddde665afeb0d404f2f823dc30b0ee66f82abf60 extends Twig_Template
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
        $__internal_ddb3520b2b36b498bfb40421141c86b09a6571c5609e09198ec4c8381ca474fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb3520b2b36b498bfb40421141c86b09a6571c5609e09198ec4c8381ca474fe->enter($__internal_ddb3520b2b36b498bfb40421141c86b09a6571c5609e09198ec4c8381ca474fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_53e05ebc39410196b793a63af8d169d6ea43dea35f13d3659b1070375d9d334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e05ebc39410196b793a63af8d169d6ea43dea35f13d3659b1070375d9d334f->enter($__internal_53e05ebc39410196b793a63af8d169d6ea43dea35f13d3659b1070375d9d334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ddb3520b2b36b498bfb40421141c86b09a6571c5609e09198ec4c8381ca474fe->leave($__internal_ddb3520b2b36b498bfb40421141c86b09a6571c5609e09198ec4c8381ca474fe_prof);

        
        $__internal_53e05ebc39410196b793a63af8d169d6ea43dea35f13d3659b1070375d9d334f->leave($__internal_53e05ebc39410196b793a63af8d169d6ea43dea35f13d3659b1070375d9d334f_prof);

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
