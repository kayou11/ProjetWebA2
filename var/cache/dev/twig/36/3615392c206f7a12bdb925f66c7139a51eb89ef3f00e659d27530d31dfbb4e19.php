<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4a0e4b2201b584a3cacda0260291876090f887dc72cbcbe4af5d0b4025eaa409 extends Twig_Template
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
        $__internal_704a73510829246569483125dbf844140fd7f947425c1ec7708c71f9c7ea781a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704a73510829246569483125dbf844140fd7f947425c1ec7708c71f9c7ea781a->enter($__internal_704a73510829246569483125dbf844140fd7f947425c1ec7708c71f9c7ea781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9d69a11056617edb5ecc89f00d08f6c03c2a6a5b56c6fb2283dc566843483381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d69a11056617edb5ecc89f00d08f6c03c2a6a5b56c6fb2283dc566843483381->enter($__internal_9d69a11056617edb5ecc89f00d08f6c03c2a6a5b56c6fb2283dc566843483381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_704a73510829246569483125dbf844140fd7f947425c1ec7708c71f9c7ea781a->leave($__internal_704a73510829246569483125dbf844140fd7f947425c1ec7708c71f9c7ea781a_prof);

        
        $__internal_9d69a11056617edb5ecc89f00d08f6c03c2a6a5b56c6fb2283dc566843483381->leave($__internal_9d69a11056617edb5ecc89f00d08f6c03c2a6a5b56c6fb2283dc566843483381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
