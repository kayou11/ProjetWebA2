<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_14632e84c2c764a656f4e99a680f2b5f59a67faa948598816e508e811494baa4 extends Twig_Template
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
        $__internal_779c520bd394046ba1f916b47df534bfd2bc7d39f1c7540060139074f7537424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779c520bd394046ba1f916b47df534bfd2bc7d39f1c7540060139074f7537424->enter($__internal_779c520bd394046ba1f916b47df534bfd2bc7d39f1c7540060139074f7537424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3548415639dc3d6b41741c6aebc8d8ecb0d319240e472b740d556a1aa589e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3548415639dc3d6b41741c6aebc8d8ecb0d319240e472b740d556a1aa589e067->enter($__internal_3548415639dc3d6b41741c6aebc8d8ecb0d319240e472b740d556a1aa589e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_779c520bd394046ba1f916b47df534bfd2bc7d39f1c7540060139074f7537424->leave($__internal_779c520bd394046ba1f916b47df534bfd2bc7d39f1c7540060139074f7537424_prof);

        
        $__internal_3548415639dc3d6b41741c6aebc8d8ecb0d319240e472b740d556a1aa589e067->leave($__internal_3548415639dc3d6b41741c6aebc8d8ecb0d319240e472b740d556a1aa589e067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
