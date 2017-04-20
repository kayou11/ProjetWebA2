<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_01703813334bac9d231722eddab1b7964c251a53c383720a6bf5ea44e60be576 extends Twig_Template
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
        $__internal_6412b585683f4565378087358f28f3247200e1ce893fb9e526fcdfc65df7655c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6412b585683f4565378087358f28f3247200e1ce893fb9e526fcdfc65df7655c->enter($__internal_6412b585683f4565378087358f28f3247200e1ce893fb9e526fcdfc65df7655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_084a00c7cec5f7846dd05dfd8b12a6d1c2a1bf67443e751e17421eb679b0732f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084a00c7cec5f7846dd05dfd8b12a6d1c2a1bf67443e751e17421eb679b0732f->enter($__internal_084a00c7cec5f7846dd05dfd8b12a6d1c2a1bf67443e751e17421eb679b0732f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6412b585683f4565378087358f28f3247200e1ce893fb9e526fcdfc65df7655c->leave($__internal_6412b585683f4565378087358f28f3247200e1ce893fb9e526fcdfc65df7655c_prof);

        
        $__internal_084a00c7cec5f7846dd05dfd8b12a6d1c2a1bf67443e751e17421eb679b0732f->leave($__internal_084a00c7cec5f7846dd05dfd8b12a6d1c2a1bf67443e751e17421eb679b0732f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
