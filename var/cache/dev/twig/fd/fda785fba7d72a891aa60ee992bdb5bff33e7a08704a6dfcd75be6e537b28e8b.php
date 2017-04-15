<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cf3fb4191a6a3e2dad474a406d17cc20805c4d9caa89c4534196bc05b8046916 extends Twig_Template
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
        $__internal_189071991e5e8c595487496d7b21670b3d6da77e1517df898ef952140b923bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189071991e5e8c595487496d7b21670b3d6da77e1517df898ef952140b923bd3->enter($__internal_189071991e5e8c595487496d7b21670b3d6da77e1517df898ef952140b923bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a2124bf18dbcbf37feec3124a5dbf47fed62bd2acac93ed63ea37e931a19856d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2124bf18dbcbf37feec3124a5dbf47fed62bd2acac93ed63ea37e931a19856d->enter($__internal_a2124bf18dbcbf37feec3124a5dbf47fed62bd2acac93ed63ea37e931a19856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_189071991e5e8c595487496d7b21670b3d6da77e1517df898ef952140b923bd3->leave($__internal_189071991e5e8c595487496d7b21670b3d6da77e1517df898ef952140b923bd3_prof);

        
        $__internal_a2124bf18dbcbf37feec3124a5dbf47fed62bd2acac93ed63ea37e931a19856d->leave($__internal_a2124bf18dbcbf37feec3124a5dbf47fed62bd2acac93ed63ea37e931a19856d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
