<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fd2900e70ff3447453ba0028779a90ef85685c332cfe01701d19a0abdb517c68 extends Twig_Template
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
        $__internal_a1a8302b24865c85113b80fb59acf07c3055d5e6fcf16e3557da582b242ac25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a8302b24865c85113b80fb59acf07c3055d5e6fcf16e3557da582b242ac25f->enter($__internal_a1a8302b24865c85113b80fb59acf07c3055d5e6fcf16e3557da582b242ac25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_34ea1a51598fea12058bc8178ff1063b9ce674be2d514434941997d956331ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ea1a51598fea12058bc8178ff1063b9ce674be2d514434941997d956331ba0->enter($__internal_34ea1a51598fea12058bc8178ff1063b9ce674be2d514434941997d956331ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a1a8302b24865c85113b80fb59acf07c3055d5e6fcf16e3557da582b242ac25f->leave($__internal_a1a8302b24865c85113b80fb59acf07c3055d5e6fcf16e3557da582b242ac25f_prof);

        
        $__internal_34ea1a51598fea12058bc8178ff1063b9ce674be2d514434941997d956331ba0->leave($__internal_34ea1a51598fea12058bc8178ff1063b9ce674be2d514434941997d956331ba0_prof);

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
