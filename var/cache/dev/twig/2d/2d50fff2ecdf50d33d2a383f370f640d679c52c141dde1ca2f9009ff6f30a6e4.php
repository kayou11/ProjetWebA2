<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_df6f104009d2e6ec69b4040fb306a892236563b2f3e0f1076462d80ecd3f27d4 extends Twig_Template
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
        $__internal_32af97faa2139ea359e4f9a4d9f11bfec8e2a04fa1dc5384e9f9762b3fe7df00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32af97faa2139ea359e4f9a4d9f11bfec8e2a04fa1dc5384e9f9762b3fe7df00->enter($__internal_32af97faa2139ea359e4f9a4d9f11bfec8e2a04fa1dc5384e9f9762b3fe7df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f4b71f4d29d7c105fe26b55f8ce075d488154db8d47322b09e87bfb7e35d1f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b71f4d29d7c105fe26b55f8ce075d488154db8d47322b09e87bfb7e35d1f20->enter($__internal_f4b71f4d29d7c105fe26b55f8ce075d488154db8d47322b09e87bfb7e35d1f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_32af97faa2139ea359e4f9a4d9f11bfec8e2a04fa1dc5384e9f9762b3fe7df00->leave($__internal_32af97faa2139ea359e4f9a4d9f11bfec8e2a04fa1dc5384e9f9762b3fe7df00_prof);

        
        $__internal_f4b71f4d29d7c105fe26b55f8ce075d488154db8d47322b09e87bfb7e35d1f20->leave($__internal_f4b71f4d29d7c105fe26b55f8ce075d488154db8d47322b09e87bfb7e35d1f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
