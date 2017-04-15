<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_720e5c1f851267e2030c90d1632aa1a163e0796a3ddca192fcd0fa23a5fec8a7 extends Twig_Template
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
        $__internal_4d55b66d58e2380f6a5d8b4253525b242e2e629d6f6128771fc34bd6e9038aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d55b66d58e2380f6a5d8b4253525b242e2e629d6f6128771fc34bd6e9038aeb->enter($__internal_4d55b66d58e2380f6a5d8b4253525b242e2e629d6f6128771fc34bd6e9038aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a766480166343fdd143952c9964933dbd14055730bb59b69d923bab313ec8035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a766480166343fdd143952c9964933dbd14055730bb59b69d923bab313ec8035->enter($__internal_a766480166343fdd143952c9964933dbd14055730bb59b69d923bab313ec8035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4d55b66d58e2380f6a5d8b4253525b242e2e629d6f6128771fc34bd6e9038aeb->leave($__internal_4d55b66d58e2380f6a5d8b4253525b242e2e629d6f6128771fc34bd6e9038aeb_prof);

        
        $__internal_a766480166343fdd143952c9964933dbd14055730bb59b69d923bab313ec8035->leave($__internal_a766480166343fdd143952c9964933dbd14055730bb59b69d923bab313ec8035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
