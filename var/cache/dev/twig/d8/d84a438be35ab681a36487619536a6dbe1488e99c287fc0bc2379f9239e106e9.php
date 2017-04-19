<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2ac3f553132d6abe7a22f00686b179963c197ed57c76ae430189c3be8388ed58 extends Twig_Template
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
        $__internal_fc7742ca3319719f16b4e73f03ec4b8546226e8ce18fde462eee56e75b5d94f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7742ca3319719f16b4e73f03ec4b8546226e8ce18fde462eee56e75b5d94f8->enter($__internal_fc7742ca3319719f16b4e73f03ec4b8546226e8ce18fde462eee56e75b5d94f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f09a3f2dbe76e135ce7f1a9577fc3cbca73df00e01921160e9e265c96d774437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09a3f2dbe76e135ce7f1a9577fc3cbca73df00e01921160e9e265c96d774437->enter($__internal_f09a3f2dbe76e135ce7f1a9577fc3cbca73df00e01921160e9e265c96d774437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fc7742ca3319719f16b4e73f03ec4b8546226e8ce18fde462eee56e75b5d94f8->leave($__internal_fc7742ca3319719f16b4e73f03ec4b8546226e8ce18fde462eee56e75b5d94f8_prof);

        
        $__internal_f09a3f2dbe76e135ce7f1a9577fc3cbca73df00e01921160e9e265c96d774437->leave($__internal_f09a3f2dbe76e135ce7f1a9577fc3cbca73df00e01921160e9e265c96d774437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
