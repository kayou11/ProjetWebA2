<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_93353d0255c8080c0c2473615d033ac2bb4d667c3b413905b9dafb26d170c660 extends Twig_Template
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
        $__internal_310f1493b0ee251e33b087a16c9bce8d760e11fa1e352d21bb853263e3914909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310f1493b0ee251e33b087a16c9bce8d760e11fa1e352d21bb853263e3914909->enter($__internal_310f1493b0ee251e33b087a16c9bce8d760e11fa1e352d21bb853263e3914909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_07b50468ffe8fd6dcf6fa6d969051def46231cac6ca3c64b92722f8b166f11ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b50468ffe8fd6dcf6fa6d969051def46231cac6ca3c64b92722f8b166f11ee->enter($__internal_07b50468ffe8fd6dcf6fa6d969051def46231cac6ca3c64b92722f8b166f11ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_310f1493b0ee251e33b087a16c9bce8d760e11fa1e352d21bb853263e3914909->leave($__internal_310f1493b0ee251e33b087a16c9bce8d760e11fa1e352d21bb853263e3914909_prof);

        
        $__internal_07b50468ffe8fd6dcf6fa6d969051def46231cac6ca3c64b92722f8b166f11ee->leave($__internal_07b50468ffe8fd6dcf6fa6d969051def46231cac6ca3c64b92722f8b166f11ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
