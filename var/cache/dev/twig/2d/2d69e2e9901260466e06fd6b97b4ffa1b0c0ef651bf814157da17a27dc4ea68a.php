<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dfbd68cb26c024ceb176e74512b55d14796a060410d8545a48adbe4cf47bac00 extends Twig_Template
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
        $__internal_c5f01763b36ec2bc6bacb4018710849ce09354a697845757f8ba5b719ac5e37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f01763b36ec2bc6bacb4018710849ce09354a697845757f8ba5b719ac5e37d->enter($__internal_c5f01763b36ec2bc6bacb4018710849ce09354a697845757f8ba5b719ac5e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_bf053b51239bb67377a6aacb1c3791acdb5bded5dd93a323f52bd15c9a4dc2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf053b51239bb67377a6aacb1c3791acdb5bded5dd93a323f52bd15c9a4dc2e1->enter($__internal_bf053b51239bb67377a6aacb1c3791acdb5bded5dd93a323f52bd15c9a4dc2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c5f01763b36ec2bc6bacb4018710849ce09354a697845757f8ba5b719ac5e37d->leave($__internal_c5f01763b36ec2bc6bacb4018710849ce09354a697845757f8ba5b719ac5e37d_prof);

        
        $__internal_bf053b51239bb67377a6aacb1c3791acdb5bded5dd93a323f52bd15c9a4dc2e1->leave($__internal_bf053b51239bb67377a6aacb1c3791acdb5bded5dd93a323f52bd15c9a4dc2e1_prof);

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
