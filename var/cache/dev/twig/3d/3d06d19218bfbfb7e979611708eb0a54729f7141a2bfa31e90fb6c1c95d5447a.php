<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d343c1c5f394c2cda34b9b582847123cc411725b768776c879325e1c8782516e extends Twig_Template
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
        $__internal_c06e0fdbfb539920da1381a38ef7281a8a03cd008116fb207e9920652ba3aba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06e0fdbfb539920da1381a38ef7281a8a03cd008116fb207e9920652ba3aba9->enter($__internal_c06e0fdbfb539920da1381a38ef7281a8a03cd008116fb207e9920652ba3aba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d7566a8f73c9c1c91d8ab33c58ec0acf09cff687b5dd85ac11a4e21083e57feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7566a8f73c9c1c91d8ab33c58ec0acf09cff687b5dd85ac11a4e21083e57feb->enter($__internal_d7566a8f73c9c1c91d8ab33c58ec0acf09cff687b5dd85ac11a4e21083e57feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c06e0fdbfb539920da1381a38ef7281a8a03cd008116fb207e9920652ba3aba9->leave($__internal_c06e0fdbfb539920da1381a38ef7281a8a03cd008116fb207e9920652ba3aba9_prof);

        
        $__internal_d7566a8f73c9c1c91d8ab33c58ec0acf09cff687b5dd85ac11a4e21083e57feb->leave($__internal_d7566a8f73c9c1c91d8ab33c58ec0acf09cff687b5dd85ac11a4e21083e57feb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
